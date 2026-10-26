@extends('layouts.app')

@section('title', 'BS Events LLC || Contact Us')

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- contact area -->
        <div class="contact-area py-120">
            <div class="container">

                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="contact-img">
                                <div class="footer-widget-box list">
                                    <h4 class="footer-widget-title">Contact Us</h4>
                                    <p>Reach out with any questions or to discuss your vision. Fill out the form below
                                        or contact us directlyâ€”weâ€™re here to help!</p>
                                    <ul class="footer-contact">

                                        <li><i class="far fa-map-marker-alt"></i> Shop No 3 Al Munthasir Street <br>
                                            Ras al Khaimah <br> United Arab Emirates </li>
                                        <li><a href="tel:+971504508113"><i class="far fa-mobile"></i> +971 504 50 81 13
                                            </a></li>
                                        <li><a href="tel:+971528051501"><i class="far fa-phone"></i> +971 52 805 1501
                                            </a></li>
                                        <li><a href="mailto:sales@bseventsllc.com"><i class="far fa-envelope"></i><span
                                                    class="__cf_email__"
                                                    data-cfemail="f1989f979eb19489909c819d94df929e9c">
                                                    sales@bseventsllc.com </span></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <form method="POST" action="{{ route('contact.store') }}" id="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="far fa-pen"></i></span>
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="input-group textarea">
                                        <span class="input-group-text"><i class="far fa-comment-lines"></i></span>
                                        <textarea name="message" required cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success">@if ($errors->any()) {{ $errors->first() }} @endif</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->

        <!-- map -->
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.5361462562546!2d54.371138646279014!3d24.4923504544399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e67164b414659%3A0xd0a770621d826556!2sBS%20Events!5e1!3m2!1sen!2sin!4v1749403704688!5m2!1sen!2sin"
                width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- map -->

    </main>
@endsection
