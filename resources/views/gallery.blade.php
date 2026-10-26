@extends('layouts.app')

@section('title', 'BS Events LLC || Gallery')

@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Gallery</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
    <section class="gallery-page py-5">
        <div class="container">
            <div class="row g-4 popup-gallery">
                @forelse ($galleryItems as $item)
                    <div class="col-sm-6 col-lg-4">
                        <figure class="gallery-card mb-0">
                            @php($imageUrl = str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/'.$item->image_path))
                            <a href="{{ $imageUrl }}" class="gallery-media popup-img" title="{{ $item->title }}" aria-label="View {{ $item->title }} full size">
                                <img src="{{ $imageUrl }}" alt="{{ $item->title }}" loading="lazy">
                                <span class="gallery-overlay" aria-hidden="true">
                                    <span class="gallery-zoom"><i class="far fa-expand"></i></span>
                                </span>
                            </a>
                            <figcaption class="gallery-caption">
                                <h3>{{ $item->title }}</h3>
                                @if ($item->description)
                                    <p>{{ $item->description }}</p>
                                @endif
                            </figcaption>
                        </figure>
                    </div>
                @empty
                    <div class="col-12 text-center"><p class="gallery-empty">Our event gallery will be updated soon.</p></div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection
