@extends('layouts.app')

@section('title', 'BS Events LLC || Services')

@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
    <div class="schedule-area3 events py-20">
        <div class="container">
            <div class="row g-4">
                @forelse ($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="Service-item">
                            @php($imageUrl = str_starts_with($service->image_path, 'assets/') ? asset($service->image_path) : asset('storage/'.$service->image_path))
                            <img src="{{ $imageUrl }}" alt="{{ $service->title }}">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-12"><p class="text-center">Our services will be listed here soon.</p></div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection
