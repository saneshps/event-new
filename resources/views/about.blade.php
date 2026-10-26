@extends('layouts.app')

@section('title', 'BS Events LLC || About Us')

@section('content')
<main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="about-right wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                    About Us
                                </h2>
                                <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">About Us</div>
                            </div>
                            <p class="about-text"> Big Screen Events LLC was founded in 2019 by four passionate partners
                                who shared
                                a common dreamâ€”to create unforgettable events and exceptional experiences that bring
                                people together.
                            </p>
                            <p class="about-text mb-2"> What began as a vision among four ambitious entrepreneurs has
                                grown into
                                a trusted event management company dedicated to delivering creative, professional, and
                                seamless event solutions.
                                From corporate gatherings and conferences to exhibitions, product launches, weddings,
                                and special celebrations,
                                we bring innovation, precision, and attention to detail to every project we undertake.

                            </p>
                            <p class="about-text mb-2"> At Big Screen Events LLC, we believe that every event tells a
                                story.
                                Our team works closely with clients to understand their goals, transform ideas into
                                reality,
                                and create memorable moments that leave a lasting impression. Through strong
                                partnerships,
                                creative thinking, and a commitment to excellence, we ensure that every event is
                                executed to the highest standards.

                            </p>
                            <p class="about-text mb-2"> Over the years, we have built our reputation on reliability,
                                creativity, and customer satisfaction. Whether managing a small private gathering or a
                                large-scale corporate event,
                                our mission remains the same: to deliver extraordinary experiences that exceed
                                expectations.

                            </p>
                            <p class="about-text mb-2"> Big Screen Events LLC â€” Turning Dreams into Remarkable Events
                                Since 2019. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- choose area -->
        <div class="choose-area">
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


        <!-- counter area -->
        <div class="counter-area pt-80 pb-80">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                        <div class="counter-info">
                            <div class="site-heading mb-3">
                                <h2 class="site-title text-center">
                                    Our Core Values
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Excellence </h6>
                                        <p> We are committed to delivering high-quality event solutions with precision,
                                            creativity, and professionalism in every project. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Creativity </h6>
                                        <p> We bring fresh, innovative ideas to every event, transforming concepts into
                                            unique and memorable experiences.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Integrity </h6>
                                        <p> We believe in honesty, transparency, and strong ethical practices in all our
                                            business relationships.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Customer Commitment </h6>
                                        <p> Our clients are at the heart of everything we do. We focus on understanding
                                            their vision and exceeding expectations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Teamwork </h6>
                                        <p> We value collaboration among our team, partners, and clients to ensure
                                            smooth execution and successful events.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Reliability </h6>
                                        <p> We take pride in being dependableâ€”delivering services on time and ensuring
                                            flawless event execution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Passion for Events </h6>
                                        <p> Driven by our foundersâ€™ shared dream, we are passionate about creating
                                            unforgettable experiences that leave lasting impressions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/workshop.svg') }}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h6 class="title"> Safety & Responsibility </h6>
                                        <p> We prioritize safety in all operations, ensuring secure setups and
                                            professional standards at every event.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->
        <section class="vision-mision pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="terms-content">
                            <h3>Mission</h3>
                            <p>
                                To ignite excitement and create unforgettable moments by delivering
                                seamless, high-impact events that exceed expectations. Weâ€™re
                                committed to excellence in every detailâ€”from concept development
                                and logistics to on-site coordination and post-event analysis
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="terms-content">
                            <h3>Vision</h3>
                            <p>
                                To be the go-to partner for organizations and individuals seeking
                                bold, cutting-edge events that inspire, connect and captivate
                                audiences around the world.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

