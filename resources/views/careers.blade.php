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
                                <button class="career-link career-apply-trigger" type="button"
                                    data-job-id="{{ $career->id }}" data-job-title="{{ $career->title }}"
                                    aria-controls="job-application-modal">
                                    Apply now <i class="far fa-arrow-right"></i>
                                </button>
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

<div class="career-modal" id="job-application-modal" role="dialog" aria-modal="true"
    aria-labelledby="job-application-title" aria-hidden="true">
    <div class="career-modal-backdrop" data-modal-close></div>
    <div class="career-modal-dialog">
        <div class="career-modal-content">
            <button type="button" class="career-modal-close" data-modal-close aria-label="Close application form">
                <i class="far fa-times"></i>
            </button>
            <div class="career-modal-heading">
                <span class="career-modal-icon"><i class="far fa-paper-plane"></i></span>
                <div>
                    <span class="careers-eyebrow">Take the next step</span>
                    <h2 id="job-application-title">Apply <span>now</span></h2>
                    <p>Tell us a little about yourself and our team will be in touch.</p>
                </div>
            </div>
            <form method="POST" action="{{ route('careers.apply') }}" class="career-application-form">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="application-name">Name <span>*</span></label>
                        <input id="application-name" type="text" name="name" value="{{ old('name') }}"
                            placeholder="Your full name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="application-phone">Phone <span>*</span></label>
                        <input id="application-phone" type="tel" name="phone" value="{{ old('phone') }}"
                            placeholder="Your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="application-email">Email <span>*</span></label>
                        <input id="application-email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="you@example.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="application-job">Select job</label>
                        <select id="application-job" name="job_opening_id">
                            <option value="">Choose a position</option>
                            @foreach ($careers as $career)
                                <option value="{{ $career->id }}" @selected((string) old('job_opening_id') === (string) $career->id)>
                                    {{ $career->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="application-message">Message</label>
                        <textarea id="application-message" name="message" rows="4"
                            placeholder="Share a little about your experience (optional)">{{ old('message') }}</textarea>
                    </div>
                </div>
                <button type="submit" class="theme-btn career-submit">Send application <i class="far fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div>

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
        border: 0;
        background: transparent;
        padding: 0;
        cursor: pointer;
        font-family: inherit;
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

    .career-modal {
        position: fixed;
        z-index: 1055;
        inset: 0;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .career-modal.is-open {
        display: flex;
    }

    .career-modal-backdrop {
        position: absolute;
        inset: 0;
        background: rgba(1, 5, 76, .72);
        backdrop-filter: blur(4px);
    }

    .career-modal-dialog {
        position: relative;
        width: min(680px, 100%);
        max-height: calc(100vh - 40px);
        overflow-y: auto;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 25px 80px rgba(0, 0, 0, .25);
    }

    .career-modal-content {
        position: relative;
        padding: 38px;
    }

    .career-modal-close {
        position: absolute;
        top: 18px;
        right: 18px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: #f2f4fa;
        color: var(--color-dark);
        cursor: pointer;
        transition: .2s ease;
    }

    .career-modal-close:hover {
        background: var(--theme-color);
        color: #fff;
    }

    .career-modal-heading {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 28px;
        padding-right: 35px;
    }

    .career-modal-icon {
        display: inline-flex;
        flex: 0 0 52px;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 14px;
        background: rgba(254, 136, 19, .13);
        color: var(--theme-color);
        font-size: 21px;
    }

    .career-modal-heading .careers-eyebrow {
        margin-bottom: 4px;
    }

    .career-modal-heading h2 {
        margin-bottom: 5px;
        color: var(--color-dark);
        font-size: 28px;
    }

    .career-modal-heading h2 span {
        color: var(--theme-color);
    }

    .career-modal-heading p {
        margin: 0;
        color: var(--body-text-color);
        font-size: 14px;
    }

    .career-application-form label {
        display: block;
        margin-bottom: 7px;
        color: var(--color-dark);
        font-size: 13px;
        font-weight: 700;
    }

    .career-application-form label span {
        color: #dc3545;
    }

    .career-application-form input,
    .career-application-form select,
    .career-application-form textarea {
        width: 100%;
        border: 1px solid #e3e6ef;
        border-radius: 8px;
        padding: 12px 14px;
        color: var(--color-dark);
        background: #fbfcff;
        outline: 0;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .career-application-form input:focus,
    .career-application-form select:focus,
    .career-application-form textarea:focus {
        border-color: var(--theme-color);
        box-shadow: 0 0 0 3px rgba(254, 136, 19, .12);
    }

    .career-application-form textarea {
        resize: vertical;
    }

    .career-submit {
        margin-top: 22px;
    }

    body.career-modal-open {
        overflow: hidden;
    }

    @media (max-width: 575px) {
        .career-card-top,
        .career-card-body {
            padding: 20px;
        }

        .career-card-body {
            min-height: 0;
        }

        .career-modal {
            padding: 12px;
        }

        .career-modal-dialog {
            max-height: calc(100vh - 24px);
        }

        .career-modal-content {
            padding: 28px 20px 24px;
        }

        .career-modal-heading {
            gap: 12px;
            margin-bottom: 22px;
        }

        .career-modal-icon {
            flex-basis: 42px;
            width: 42px;
            height: 42px;
            font-size: 17px;
        }

        .career-modal-heading h2 {
            font-size: 24px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('job-application-modal');
        const jobSelect = document.getElementById('application-job');
        if (!modal || !jobSelect) return;

        const openModal = function (trigger) {
            jobSelect.value = trigger.dataset.jobId || '';
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('career-modal-open');
            document.getElementById('application-name').focus();
        };
        const closeModal = function () {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('career-modal-open');
        };

        document.querySelectorAll('.career-apply-trigger').forEach(function (trigger) {
            trigger.addEventListener('click', function () { openModal(trigger); });
        });
        modal.querySelectorAll('[data-modal-close]').forEach(function (element) {
            element.addEventListener('click', closeModal);
        });
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
        });
        @if ($errors->any())
            openModal({ dataset: { jobId: '{{ old('job_opening_id') }}' } });
        @endif
    });
</script>
@endsection
