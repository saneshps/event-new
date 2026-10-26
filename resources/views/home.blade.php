@extends('layouts.app')

@section('title', 'BS Events LLC || Home')

@section('content')
<main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-scroll-box">
                <div class="hero-scroll">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="hero-slider owl-carousel owl-theme">
                <div class="hero-single" style="background: url({{ asset('assets/img/hero/slider-2.jpg') }})">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        BIG Screen <span>Events</span> LLC
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        Have an event in mind? The team at Big Screen Events LLC is here to help bring
                                        your vision to life.
                                        Contact us today to discuss your requirements, request a quote, or learn more
                                        about our event
                                        management services. We look forward to making your next event a success.

                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="{{ route('contact') }}" class="theme-btn">Contact Us<i
                                                class="fas fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background: url({{ asset('assets/img/hero/slider-11.jpg') }})">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        BIG Screen <span>Events</span> LLC
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        Have an event in mind? The team at Big Screen Events LLC is here to help bring
                                        your vision to life.
                                        Contact us today to discuss your requirements, request a quote, or learn more
                                        about our event management services.
                                        We look forward to making your next event a success.

                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="{{ route('contact') }}" class="theme-btn">Contact Us<i
                                                class="fas fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background: url({{ asset('assets/img/hero/slider-22.jpg') }})">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        BIG Screen <span>Events</span> LLC
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        Have an event in mind? The team at Big Screen Events LLC is here to help bring
                                        your vision to life.
                                        Contact us today to discuss your requirements, request a quote, or learn more
                                        about our event management services.
                                        We look forward to making your next event a success.

                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="{{ route('contact') }}" class="theme-btn">Contact Us<i
                                                class="fas fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->




        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInRight" data-wow-delay=".25s">
                            <div class="about-img">
                                <img class="img-1" src="{{ asset('assets/img/about/01.jpg') }}" alt="">
                            </div>
                            <div class="about-experience">
                                <span> 06 </span>
                                <h5>Years Of <br> Experience</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                    About Us
                                </h2>
                                <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">About Us</div>
                            </div>
                            <p class="about-text mb-2"> Big Screen Events LLC was founded in 2019 by four passionate
                                partners who shared
                                a common dreamâ€”to create unforgettable events and exceptional experiences that bring
                                people together.
                            </p>
                            <p class="about-text mb-4"> What began as a vision among four ambitious entrepreneurs has
                                grown
                                into a trusted event management company dedicated to delivering creative, professional,
                                and seamless event solutions. From corporate gatherings and conferences to exhibitions,
                                product launches, weddings, and special celebrations,
                                we bring innovation, precision, and attention to detail to every project we undertake.
                            </p>


                            <a href="{{ route('about') }}" class="theme-btn"> Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- feature area -->
        <div class="feature-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <h2 class="site-title"> We <span>specialize in</span></h2>
                        </div>
                    </div>
                </div>
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">01</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/speaker.svg') }}" alt="">
                                </div>
                                <h4 class="feature-title">Corporate Events</h4>
                                <p>Conferences, product launches,
                                    award ceremonies, team-building
                                    retreats and holiday parties
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <span class="count">02</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/learn.svg') }}" alt="">
                                </div>
                                <h4 class="feature-title">Social Celebrations</h4>
                                <p> Weddings, anniversaries,
                                    milestone birthdays and
                                    themed private gatherings
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">03</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/meet.svg') }}" alt="">
                                </div>
                                <h4 class="feature-title">Entertainment Productions</h4>
                                <p>Concerts, festivals, talent
                                    shows and red-carpet galas</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <span class="count">04</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/question.svg') }}" alt="">
                                </div>
                                <h4 class="feature-title">Exhibitions & Trade Shows</h4>
                                <p> Booth design, exhibit logistics,
                                    attendee engagement and onsite support
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->

        <!-- choose area -->
        <div class="choose-area py-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <h2 class="site-title"> Why <span>Choose Us</span></h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                            <img src="{{ asset('assets/img/choose/01.jpg') }}" alt="">
                            <a href="{{ route('about') }}" class="theme-btn"> View More <i class="far fa-arrow-right"></i></a>
                        </div> -->
                        <div class="choose-item">
                            <div class="choose-item-icon">
                                <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4> Attention to Detail </h4>
                                <p> We carefully manage every aspect of your event, ensuring a seamless experience from
                                    start to finish. </p>
                            </div>
                        </div>
                        <div class="choose-item">
                            <div class="choose-item-icon">
                                <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4> On-Time Execution </h4>
                                <p> We value your time and are committed to delivering every project efficiently and
                                    according to schedule. </p>
                            </div>
                        </div>
                        <div class="choose-item">
                            <div class="choose-item-icon">
                                <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4> Client-Focused Approach </h4>
                                <p> Your satisfaction is our priority. We work closely with you throughout the process
                                    to ensure your expectations are exceeded. </p>
                            </div>
                        </div>
                        <div class="choose-item">
                            <div class="choose-item-icon">
                                <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4> Quality & Professionalism </h4>
                                <p> We maintain the highest standards of professionalism, ensuring exceptional service
                                    and outstanding event experiences. </p>
                            </div>
                        </div>
                        <div class="choose-item">
                            <div class="choose-item-icon">
                                <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                            </div>
                            <div class="choose-item-info">
                                <h4> Passion for Excellence </h4>
                                <p> Founded by four partners with a shared dream, we are passionate about creating
                                    events that leave lasting impressions and unforgettable memories. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">

                            <div class="choose-content-wrap">
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/event.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4> Experienced Event Professionals </h4>
                                        <p> Our team brings industry knowledge, creativity, and hands-on expertise to
                                            ensure every event is planned and executed flawlessly. </p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/location.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4> Customized Event Solutions </h4>
                                        <p> We understand that every event is unique. We tailor our services to match
                                            your vision, goals, and budget. </p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4> End-to-End Event Management </h4>
                                        <p> From concept development and planning to execution and post-event support,
                                            we handle every detail so you can focus on your guests.
                                        </p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4> Creative & Innovative Ideas </h4>
                                        <p> We combine creativity with the latest event trends to deliver engaging and
                                            memorable experiences.

                                        </p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/idea.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4> Reliable Vendor Network </h4>
                                        <p> Our strong relationships with trusted suppliers and partners help us provide
                                            quality services at competitive prices. </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- choose area end -->



    </main>
@endsection

