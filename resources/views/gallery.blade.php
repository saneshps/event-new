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
    <section class="py-5">
        <div class="container">
            <div class="row g-4 popup-gallery">
                @forelse ($galleryItems as $item)
                    <div class="col-sm-6 col-lg-4">
                        <figure class="card h-100 border-0 shadow-sm overflow-hidden mb-0">
                            @php($imageUrl = str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/'.$item->image_path))
                            <a href="{{ $imageUrl }}" class="popup-img" title="{{ $item->title }}" aria-label="View {{ $item->title }} full size">
                                <img src="{{ $imageUrl }}" alt="{{ $item->title }}" class="w-100" style="height:260px;object-fit:cover">
                            </a>
                            @if ($item->description)
                                <figcaption class="card-body"><h3 class="h5">{{ $item->title }}</h3><p class="mb-0">{{ $item->description }}</p></figcaption>
                            @else
                                <figcaption class="visually-hidden">{{ $item->title }}</figcaption>
                            @endif
                        </figure>
                    </div>
                @empty
                    <div class="col-12 text-center"><p>Our event gallery will be updated soon.</p></div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection
