<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobOpening;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CareerController extends Controller
{
    public function index(): View
    {
        return view('admin.items.index', [
            'section' => 'Career openings',
            'items' => JobOpening::query()->orderBy('sort_order')->orderBy('id')->get(),
            'createRoute' => 'admin.careers.create',
            'editRoute' => 'admin.careers.edit',
            'deleteRoute' => 'admin.careers.destroy',
            'type' => 'careers',
        ]);
    }

    public function create(): View
    {
        return $this->formView(new JobOpening(), false);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'employment_type' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:10000'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);
        $validated['is_active'] = $request->boolean('is_active');
        JobOpening::query()->create($validated);

        return redirect()->route('admin.careers.index')->with('status', 'Career opening added.');
    }

    public function edit(JobOpening $career): View
    {
        return $this->formView($career, true);
    }

    public function update(Request $request, JobOpening $career): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'employment_type' => ['nullable', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:10000'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);
        $validated['is_active'] = $request->boolean('is_active');
        $career->update($validated);

        return redirect()->route('admin.careers.index')->with('status', 'Career opening updated.');
    }

    public function destroy(JobOpening $career): RedirectResponse
    {
        $career->delete();

        return redirect()->route('admin.careers.index')->with('status', 'Career opening deleted.');
    }

    private function formView(JobOpening $career, bool $editing): View
    {
        return view('admin.items.form', [
            'section' => 'Career opening',
            'item' => $career,
            'type' => 'careers',
            'editing' => $editing,
            'formAction' => $editing ? route('admin.careers.update', $career) : route('admin.careers.store'),
            'formMethod' => $editing ? 'PUT' : 'POST',
            'fields' => [
                ['name' => 'title', 'label' => 'Job title', 'type' => 'text', 'required' => true],
                ['name' => 'location', 'label' => 'Location', 'type' => 'text'],
                ['name' => 'employment_type', 'label' => 'Employment type', 'type' => 'text'],
                ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => true],
                ['name' => 'sort_order', 'label' => 'Display order', 'type' => 'number', 'required' => true],
                ['name' => 'is_active', 'label' => 'Visible on website', 'type' => 'checkbox'],
            ],
        ]);
    }
}
