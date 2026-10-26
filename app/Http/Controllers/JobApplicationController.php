<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobApplicationController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'job_opening_id' => [
                'nullable',
                'integer',
                Rule::exists('job_openings', 'id')->where('is_active', true),
            ],
            'message' => ['nullable', 'string', 'max:10000'],
        ]);

        JobApplication::query()->create($validated);

        return redirect()->route('careers')->with('status', 'Thank you. Your application has been received.');
    }
}
