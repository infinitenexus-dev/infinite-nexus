@extends('frontend.layouts.main_index.main')
@section('keywords', 'This is keyword')
@section('description', 'This is Description')
@section('title')
    Web Development
@endsection
@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Web Development</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white" aria-current="page"><a class="text-white"
                                    href="{{ route('frontend.services') }}">Service</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Web Development</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-120 pt-70">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">Web Development</h6>
                    </div>
                    <p class="mb-4">Our web development services ensure your website is built with cutting-edge
                        technology, functionality, and a seamless user experience. We focus on creating robust, scalable
                        solutions that meet your business needs.</p>
                    <h6 class="fw-bold">We specialize in:</h6>
                    <ul>
                        <li>Developing custom web applications</li>
                        <li>Building e-commerce platforms</li>
                        <li>Creating content management systems (CMS)</li>
                        <li>Integrating third-party APIs</li>
                    </ul>

                    <h6 class="fw-bold">Our approach to web development:</h6>
                    <ul>
                        <li>Planning: We analyze project requirements and define the scope.</li>
                        <li>Architecture: We design a scalable architecture to support future growth.</li>
                        <li>Development: Our developers write clean, maintainable code using best practices.</li>
                        <li>Testing: We perform rigorous testing to ensure functionality, performance, and security.</li>
                        <li>Deployment: We launch your website with ongoing support for maintenance.</li>
                    </ul>

                    <h6 class="fw-bold">Tools We Use:</h6>
                    <ul>
                        <li>Laravel / Processwire / Wordpress / Node.js for backend development</li>
                        <li>React / Laravel for front-end development</li>
                        <li>MySQL or MongoDB for database management</li>
                        <li>Git for version control</li>
                    </ul>

                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn about-image" data-wow-delay="0.5s"
                        src="{{ asset('frontend/img/web-development-service.png') }}" alt="home-image-1">
                </div>
            </div>
        </div>
    </section>
    <section class="ptb-120 ptb-70">
        <div class="bg-primary newsletter wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white">Ready to elevate your business with innovative digital solutions? At
                            InfiniteNexus IT Solutions, we’re here to help you every step of the way!</small>
                        <div class="position-relative w-100 mt-3">
                            <input type="hidden" name="form_type" value="newsletter">
                            <input id="newsletter-email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
                                type="text" placeholder="Your Email" style="height: 48px;">
                            <button id="subscribe-button" type="button"
                                class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                                <i class="fa fa-paper-plane text-primary fs-4"></i>
                            </button>
                        </div>
                        <h3 id="thank-you-message" style="display: none;" class="text-white mt-3"><u>Thank you for
                                subscribe</u>
                        </h3>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="{{ asset('frontend/img/newsletter.png') }}"
                            alt="home-image-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
