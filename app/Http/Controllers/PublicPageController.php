<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\JobOpening;
use App\Models\Service;
use Illuminate\View\View;

class PublicPageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function services(): View
    {
        return view('services', [
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function gallery(): View
    {
        return view('gallery', [
            'galleryItems' => GalleryItem::query()->where('is_active', true)->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function careers(): View
    {
        return view('careers', [
            'careers' => JobOpening::query()->where('is_active', true)->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }
}
