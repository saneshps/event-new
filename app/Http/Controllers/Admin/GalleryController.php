<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    use DeletesContentImages;

    public function index(): View
    {
        return view('admin.items.index', [
            'section' => 'Gallery',
            'items' => GalleryItem::query()->orderBy('sort_order')->orderBy('id')->get(),
            'createRoute' => 'admin.gallery.create',
            'editRoute' => 'admin.gallery.edit',
            'deleteRoute' => 'admin.gallery.destroy',
            'type' => 'gallery',
        ]);
    }

    public function create(): View
    {
        return $this->formView(new GalleryItem(), false);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:10000'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $validated['image_path'] = $request->file('image')->store('gallery', 'public');
        unset($validated['image']);
        $validated['is_active'] = $request->boolean('is_active');
        GalleryItem::query()->create($validated);

        return redirect()->route('admin.gallery.index')->with('status', 'Gallery item added.');
    }

    public function edit(GalleryItem $gallery): View
    {
        return $this->formView($gallery, true);
    }

    public function update(Request $request, GalleryItem $gallery): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:10000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $oldImage = $gallery->image_path;
        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('gallery', 'public');
        }

        unset($validated['image']);
        $validated['is_active'] = $request->boolean('is_active');
        $gallery->update($validated);
        if (isset($validated['image_path'])) {
            $this->deleteUploadedImage($oldImage);
        }

        return redirect()->route('admin.gallery.index')->with('status', 'Gallery item updated.');
    }

    public function destroy(GalleryItem $gallery): RedirectResponse
    {
        $imagePath = $gallery->image_path;
        $gallery->delete();
        $this->deleteUploadedImage($imagePath);

        return redirect()->route('admin.gallery.index')->with('status', 'Gallery item deleted.');
    }

    private function formView(GalleryItem $gallery, bool $editing): View
    {
        return view('admin.items.form', [
            'section' => 'Gallery item',
            'item' => $gallery,
            'type' => 'gallery',
            'editing' => $editing,
            'formAction' => $editing ? route('admin.gallery.update', $gallery) : route('admin.gallery.store'),
            'formMethod' => $editing ? 'PUT' : 'POST',
            'fields' => [
                ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                ['name' => 'description', 'label' => 'Description', 'type' => 'textarea'],
                ['name' => 'image', 'label' => 'Image', 'type' => 'image', 'required' => ! $editing],
                ['name' => 'sort_order', 'label' => 'Display order', 'type' => 'number', 'required' => true],
                ['name' => 'is_active', 'label' => 'Visible on website', 'type' => 'checkbox'],
            ],
        ]);
    }
}
