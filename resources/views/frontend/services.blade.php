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
    Our Services - Comprehensive Digital Solutions for Your Business Growth
@endsection
@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Service</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Service Start -->
    <section class="ptb-120 ptb-70">
        <div class="container px-lg-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-paint-brush fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Design</h5>
                            <p>We create visually appealing and user-friendly websites that are responsive, modern, and
                                tailored
                                to
                                your brand’s identity.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('web-design') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Development</h5>
                            <p>Our web development services ensure your website is built with cutting-edge technology,
                                functionality, and seamless user experience.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('web-development') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-bullhorn fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Social Media Marketing</h5>
                            <p>Our social media marketing services help you build a strong online presence and engage with
                                your audience effectively. We create tailored strategies that align with your brand's goals.
                            </p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('social-media-marketing') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Software Development</h5>
                            <p>We deliver custom software solutions that streamline processes, enhance efficiency, and cater
                                to
                                your
                                specific business needs.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('software-development') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-pencil-ruler fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Branding & Logo Design</h5>
                            <p>Our Branding and Logo design services craft unique and memorable branding materials, logos
                                that effectively represent your brand’s values and vision.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('branding-and-logo-design') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-brush fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Application Design</h5>
                            <p>We design intuitive and functional applications that provide an engaging user experience
                                across
                                multiple platforms.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="{{ route('application-design') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script>
        //scroll a change logo header
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) { // Change 50 to the desired scroll threshold
                $('#default-logo').hide();
                $('#scroll-logo').show();
            } else {
                $('#default-logo').show();
                $('#scroll-logo').hide();
            }
        });
    </script>

    <!-- Service End -->
@endsection
