<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Models\JobApplication;
use App\Models\JobOpening;
use App\Models\Service;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'serviceCount' => Service::query()->count(),
            'galleryCount' => GalleryItem::query()->count(),
            'careerCount' => JobOpening::query()->count(),
            'applicationCount' => JobApplication::query()->count(),
        ]);
    }
}
