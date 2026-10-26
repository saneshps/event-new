<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServiceController extends Controller
{
    use DeletesContentImages;

    public function index(): View
    {
        return view('admin.items.index', [
            'section' => 'Services',
            'items' => Service::query()->orderBy('sort_order')->orderBy('id')->get(),
            'createRoute' => 'admin.services.create',
            'editRoute' => 'admin.services.edit',
            'deleteRoute' => 'admin.services.destroy',
            'type' => 'services',
        ]);
    }

    public function create(): View
    {
        return $this->formView(new Service(), false);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:10000'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $validated['image_path'] = $request->file('image')->store('services', 'public');
        unset($validated['image']);
        $validated['is_active'] = $request->boolean('is_active');
        Service::query()->create($validated);

        return redirect()->route('admin.services.index')->with('status', 'Service added.');
    }

    public function edit(Service $service): View
    {
        return $this->formView($service, true);
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:10000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $oldImage = $service->image_path;
        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('services', 'public');
        }

        unset($validated['image']);
        $validated['is_active'] = $request->boolean('is_active');
        $service->update($validated);
        if (isset($validated['image_path'])) {
            $this->deleteUploadedImage($oldImage);
        }

        return redirect()->route('admin.services.index')->with('status', 'Service updated.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $imagePath = $service->image_path;
        $service->delete();
        $this->deleteUploadedImage($imagePath);

        return redirect()->route('admin.services.index')->with('status', 'Service deleted.');
    }

    private function formView(Service $service, bool $editing): View
    {
        return view('admin.items.form', [
            'section' => 'Service',
            'item' => $service,
            'type' => 'services',
            'editing' => $editing,
            'formAction' => $editing ? route('admin.services.update', $service) : route('admin.services.store'),
            'formMethod' => $editing ? 'PUT' : 'POST',
            'fields' => [
                ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => true],
                ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'required' => ! $editing],
                ['name' => 'sort_order', 'label' => 'Display order', 'type' => 'number', 'required' => true],
                ['name' => 'is_active', 'label' => 'Visible on website', 'type' => 'checkbox'],
            ],
        ]);
    }
}
