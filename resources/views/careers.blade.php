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
    <section class="careers-section py-5">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <span class="careers-eyebrow">Build something meaningful</span>
                <h2 class="site-title">Join our <span>team</span></h2>
                <p class="careers-intro mx-auto">Bring your talent, energy, and ideas to a team that creates unforgettable event experiences.</p>
            </div>
            <div class="row g-4">
                @forelse ($careers as $career)
                    <div class="col-lg-6">
                        <article class="career-card h-100">
                            <div class="career-card-top">
                                <span class="career-icon"><i class="far fa-briefcase"></i></span>
                                <span class="career-label">We're hiring</span>
                            </div>
                            <div class="career-card-body">
                                <h3>{{ $career->title }}</h3>
                                @if ($career->location || $career->employment_type)
                                    <div class="career-meta">
                                        @if ($career->location)
                                            <span><i class="far fa-location-dot"></i>{{ $career->location }}</span>
                                        @endif
                                        @if ($career->employment_type)
                                            <span><i class="far fa-clock"></i>{{ $career->employment_type }}</span>
                                        @endif
                                    </div>
                                @endif
                                <p>{{ $career->description }}</p>
                                <a class="career-link" href="{{ route('contact') }}">
                                    Apply now <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="careers-empty">
                            <span class="career-icon"><i class="far fa-briefcase"></i></span>
                            <h3>No open positions right now</h3>
                            <p>There are no current openings. Please check again soon or <a href="{{ route('contact') }}">contact us</a>.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</main>

<style>
    .careers-section {
        background: linear-gradient(180deg, #fff 0%, #f8f9fe 100%);
    }

    .careers-eyebrow {
        display: block;
        margin-bottom: 10px;
        color: var(--theme-color);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.8px;
        text-transform: uppercase;
    }

    .careers-intro {
        max-width: 570px;
        color: var(--body-text-color);
        font-size: 16px;
        line-height: 1.7;
    }

    .career-card {
        overflow: hidden;
        border: 1px solid rgba(1, 5, 76, .07);
        border-radius: 14px;
        background: var(--color-white);
        box-shadow: 0 12px 35px rgba(1, 5, 76, .07);
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .career-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 42px rgba(1, 5, 76, .13);
    }

    .career-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 22px 26px;
        background: linear-gradient(135deg, #01054c 0%, #071b70 100%);
    }

    .career-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(254, 136, 19, .16);
        color: var(--theme-color);
        font-size: 20px;
    }

    .career-label {
        padding: 7px 12px;
        border: 1px solid rgba(255, 255, 255, .2);
        border-radius: 30px;
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .8px;
        text-transform: uppercase;
    }

    .career-card-body {
        display: flex;
        flex-direction: column;
        min-height: 220px;
        padding: 26px;
    }

    .career-card-body h3 {
        margin-bottom: 12px;
        color: var(--color-dark);
        font-size: 23px;
    }

    .career-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 18px;
        margin-bottom: 16px;
        color: var(--body-text-color);
        font-size: 14px;
    }

    .career-meta span {
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .career-meta i {
        color: var(--theme-color);
    }

    .career-card-body p {
        margin-bottom: 22px;
        color: var(--body-text-color);
        line-height: 1.7;
    }

    .career-link {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-top: auto;
        color: var(--color-dark);
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        transition: color .3s ease, gap .3s ease;
    }

    .career-link:hover {
        gap: 13px;
        color: var(--theme-color);
    }

    .careers-empty {
        max-width: 620px;
        margin: 0 auto;
        padding: 42px 25px;
        border: 1px dashed rgba(1, 5, 76, .18);
        border-radius: 14px;
        background: #fff;
    }

    .careers-empty .career-icon {
        margin-bottom: 16px;
    }

    .careers-empty h3 {
        color: var(--color-dark);
        font-size: 22px;
    }

    @media (max-width: 575px) {
        .career-card-top,
        .career-card-body {
            padding: 20px;
        }

        .career-card-body {
            min-height: 0;
        }
    }
</style>
@endsection
