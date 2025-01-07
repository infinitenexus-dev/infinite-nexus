@extends('frontend.layouts.main_index.main')
@section('keywords', 'This is keyword')
@section('description', 'This is Description')
@section('title')
    Web Design
@endsection
@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Web Desing</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white" aria-current="page"><a class="text-white"
                                    href="{{ route('frontend.services') }}">Service</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Web Design</li>
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
                        <h6 class="position-relative text-primary ps-4">Web Design</h6>
                        {{-- <h3 class="mt-2">Your Trusted Partner in Web Development and Digital Growth.</h3>   --}}
                    </div>
                    <p class="mb-4">We create visually appealing and user-friendly websites that are responsive, modern,
                        and tailored to your brand's identity. Our designs focus on enhancing user experience while
                        reflecting your unique business values.</p>
                    <h6 class="fw-bold"> Our web design services cater to a wide range of needs, including:</h6>
                    <ul>
                        <li>E-commerce websites for online shops</li>
                        <li>Custom corporate websites</li>
                        <li>Landing pages for marketing campaigns</li>
                        <li>Web applications and software solutions</li>
                    </ul>

                    <h6 class="fw-bold">Our Approach to Web Design:</h6>
                    <ul>
                        <li>Discovery: We start by understanding your brand, target audience, and business goals.</li>
                        <li>Wireframing: We create structural layouts to plan content placement and user flow.</li>
                        <li>Visual Design: Our designers craft aesthetically pleasing interfaces that align with your brand.
                        </li>
                        <li>Responsive Design: We ensure your website looks great on all devices - desktop, tablet, and
                            mobile.</li>
                        <li>User Testing: We conduct tests to refine the user experience before launch.</li>
                    </ul>

                    <h6 class="fw-bold">Tools We Use:</h6>
                    <ul>
                        <li>Adobe XD or Figma for prototyping and design</li>
                        <li>HTML5, CSS3, and JavaScript for front-end development</li>
                        <li>WordPress for content management systems when appropriate</li>
                        <li>Optimized graphics and animations for fast loading times</li>
                    </ul>

                    <p>Our web designs are not just visually stunning but also optimized for search engines, ensuring your
                        site ranks well and attracts your target audience.</p>

                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn about-image" data-wow-delay="0.5s"
                        src="{{ asset('frontend/img/web-design-service.png') }}" alt="home-image-1">
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
