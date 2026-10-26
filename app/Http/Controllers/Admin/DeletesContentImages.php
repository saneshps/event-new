<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;

trait DeletesContentImages
{
    protected function deleteUploadedImage(?string $path): void
    {
        if ($path !== null && ! str_starts_with($path, 'assets/')) {
            Storage::disk('public')->delete($path);
        }
    }
}
