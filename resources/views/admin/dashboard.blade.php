@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<section class="admin-welcome">
    <div>
        <div class="admin-welcome-kicker">Your workspace</div>
        <h1 class="admin-welcome-title">Welcome back, {{ auth()->user()->name }}</h1>
        <p class="admin-welcome-copy">Manage your website content and keep your event updates fresh.</p>
    </div>
    <a class="admin-btn-primary" href="{{ route('home') }}" target="_blank" rel="noopener">
        <i class="far fa-arrow-up-right-from-square"></i> View live website
    </a>
</section>

<div class="d-flex align-items-center justify-content-between mb-3">
    <div>
        <div class="admin-page-eyebrow">Overview</div>
        <h2 class="admin-section-heading mb-0">Content at a glance</h2>
    </div>
</div>
<div class="row g-3 mb-4">
    @foreach ([
        ['Services', $serviceCount, 'admin.services.index', 'far fa-calendar-star', 'orange'],
        ['Gallery images', $galleryCount, 'admin.gallery.index', 'far fa-images', 'purple'],
        ['Career openings', $careerCount, 'admin.careers.index', 'far fa-briefcase', 'blue'],
        ['Job applications', $applicationCount, 'admin.careers.index', 'far fa-file-user', 'orange'],
    ] as [$label, $count, $route, $icon, $color])
        <div class="col-sm-6 col-xl-4">
            <a class="admin-card admin-stat-card" href="{{ route($route) }}">
                <span class="admin-stat-icon {{ $color }}"><i class="{{ $icon }}"></i></span>
                <span>
                    <span class="admin-stat-label">{{ $label }}</span>
                    <span class="admin-stat-count d-block">{{ $count }}</span>
                    <span class="admin-stat-link">Manage content <i class="fas fa-arrow-right"></i></span>
                </span>
            </a>
        </div>
    @endforeach
</div>

<div class="mb-3">
    <div class="admin-page-eyebrow">Get started</div>
    <h2 class="admin-section-heading mb-0">Quick actions</h2>
</div>
<div class="row g-3">
    @foreach ([
        ['Add a service', 'Create or update a service offering.', 'admin.services.create', 'far fa-calendar-plus'],
        ['Add gallery image', 'Share a recent event moment.', 'admin.gallery.create', 'far fa-image'],
        ['Add a career opening', 'Publish a role on your careers page.', 'admin.careers.create', 'far fa-briefcase'],
    ] as [$label, $description, $route, $icon])
        <div class="col-md-6 col-xl-4">
            <a class="admin-card admin-quick-card" href="{{ route($route) }}">
                <span class="admin-quick-icon"><i class="{{ $icon }}"></i></span>
                <span>
                    <span class="admin-quick-title d-block">{{ $label }}</span>
                    <span class="admin-quick-copy">{{ $description }}</span>
                </span>
                <i class="admin-quick-arrow fas fa-chevron-right"></i>
            </a>
        </div>
    @endforeach
</div>
@endsection
