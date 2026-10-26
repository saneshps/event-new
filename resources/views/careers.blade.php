@extends('layouts.app')

@section('title', 'BS Events LLC || Careers')

@section('content')
<main class="main">
    <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Careers</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Careers</li>
            </ul>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title">Join our <span>team</span></h2>
            </div>
            <div class="row g-4">
                @forelse ($careers as $career)
                    <div class="col-12">
                        <article class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h4">{{ $career->title }}</h3>
                                @if ($career->location || $career->employment_type)
                                    <p class="text-muted">{{ $career->location }} @if ($career->location && $career->employment_type) &middot; @endif {{ $career->employment_type }}</p>
                                @endif
                                <p class="mb-0">{{ $career->description }}</p>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>There are no current openings. Please check again soon or <a href="{{ route('contact') }}">contact us</a>.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection
