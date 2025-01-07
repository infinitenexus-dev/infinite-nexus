@extends('frontend.layouts.main_index.main')
@section('keywords',
    'Web Development Services, Custom Web Development, E-commerce Development, Shopify Development,
    Laravel Development, UI/UX Design Services, Digital Marketing Solutions, Branding and Logo Design, Responsive Web
    Design, SEO Optimization for E-commerce, Software Development Services, Content Management Systems (CMS), API
    Integration Services, Website Maintenance and Support, User Experience Enhancement, High-Performance Websites, Tailored
    Digital Solutions, Affordable E-commerce Solutions')
@section('description',
    'We offer high-quality, tailored digital solutions such as web development, e-commerce
    platforms, UI/UX design, SEO optimization, branding services, and more to help businesses grow and succeed online.')
@section('title')
    About Us - Your Partner in Tailored Digital Solutions and Innovation
@endsection
@section('main-container')

    {{-- <div class=" bg-white p-0"> --}}
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">About Us</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <section class="pt-120 pt-70">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">About Us</h6>
                        <h3 class="mt-2">Your Trusted Partner in Web Development and Digital Growth.</h3>
                    </div>
                    <p class="mb-4">Welcome to InfiniteNexus IT Solutions, At InfiniteNexus, we are a modern and creative
                        team of young, results-driven professionals
                        passionate about delivering exceptional digital solutions. Recently established, our agency
                        comprises 10
                        talented individuals who bring fresh perspectives to every project.</p>
                    <p>We specialize in web development, software development, design, and digital marketing. Our expertise
                        includes e-commerce solutions, UI/UX design, branding, logo creation, and graphic design. We pride
                        ourselves on our attention to detail and our commitment to exceeding client expectations.</p>
                    <p>At InfiniteNexus, your success is our passion. We promise to provide outstanding results that will
                        elevate your brand and enhance your online presence. Join us on this exciting journey as we explore
                        new
                        horizons together!
                        Let’s create something amazing!</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Guaranteed Quality</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Tailored Solutions</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Timely Delivery</h6>
                        </div>
                    </div>
                    <br>
                    <p>Contact us today to get the best quality services in web development and digital marketing!</p>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-outline-primary btn-square text-primary bg-white my-1 me-3"
                            href="https://www.facebook.com/share/g/15QTFkVNRs/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square text-primary bg-white my-1 me-3"
                            href="https://wa.me/380986078772?text=Hello%20I%20need%20assistance" target="_blank"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-primary btn-square text-primary bg-white my-1 me-3"
                            href="https://www.instagram.com/infinitenexus_it_solutions" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square text-primary bg-white my-1 me-3"
                            href="https://in.linkedin.com/company/infinite-nexus?trk=public_post_feed-actor-name"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn about-image" data-wow-delay="0.5s"
                        src="{{ asset('frontend/img/about-us.svg') }}" alt="home-image-1">
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Newsletter Start -->
    <section class="pt-120 pt-70">
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
                            alt="home-image-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->


    <!-- Team Start -->
    <section class="ptb-120 ptb-70">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                <h2 class="mt-2">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="d-flex">
                            <img class="img-fluid custom-border-img" src="{{ asset('frontend/img/pratham.jpeg') }}"
                                alt="home-image-14">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Pratham Patel</h5>
                            <small>Founder & CEO</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="d-flex">
                            <img class="img-fluid custom-border-img" src="{{ asset('frontend/img/xenia.jpeg') }}"
                                alt="home-image-15">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Oksana Musurova</h5>
                            <small>Co-Founder & BDM</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="d-flex">
                            <img class="img-fluid custom-border-img" src="{{ asset('frontend/img/shrey.jpeg') }}"
                                alt="home-image-16">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Shrey Patel</h5>
                            <small>Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="d-flex">
                            <img class="img-fluid custom-border-imgrounded" src="{{ asset('frontend/img/darshan.jpeg') }}"
                                alt="home-image-16">
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="fw-bold m-0">Darshan Rathod</h5>
                            <small>Web Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->
@endsection
