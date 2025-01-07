@extends('frontend.layouts.main_index.main')
@section('keywords', 'This is keyword')
@section('description', 'This is Description')
@section('title')
    Branding & Logo Design
@endsection
@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Branding & Logo Design</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white" aria-current="page"><a class="text-white"
                                    href="{{ route('frontend.services') }}">Service</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Branding & Logo Design</li>
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
                        <h6 class="position-relative text-primary ps-4">Branding & Logo Design</h6>
                    </div>
                    <p class="mb-4">We specialize in comprehensive branding and logo design services that elevate your
                        brand's identity and recognition in the marketplace. Our approach is tailored to create a cohesive
                        brand image that resonates with your target audience and fosters loyalty.
                    </p>
                    <h6 class="fw-bold">What We Offer:</h6>
                    <ul>
                        <li>Brand Strategy Development: We work with you to define your brand’s goals, values, and vision.
                            This includes conducting market research to understand your competition and identifying your
                            unique selling proposition.</li>
                        <li>Logo Design: Our team crafts unique and memorable logos that visually represent your brand's
                            essence. We focus on creating logos that are not only aesthetically pleasing but also functional
                            across various platforms.</li>
                        <li>Visual Identity Creation: Beyond logos, we develop a complete visual identity that includes
                            color palettes, typography, and imagery standards to ensure a consistent brand message.</li>
                        <li>Brand Messaging: We help articulate your brand's voice through taglines, messaging frameworks,
                            and positioning statements that clearly convey your value proposition.</li>
                    </ul>

                    <h6 class="fw-bold">Our Approach:</h6>
                    <ul>
                        <li>Discovery Phase: We begin by understanding your business, target audience, and market landscape.
                        </li>
                        <li>Concept Development: Our designers create multiple logo concepts based on your feedback and
                            preferences.</li>
                        <li>Refinement: We refine the chosen concept through iterative feedback loops to ensure it aligns
                            perfectly with your vision.</li>
                        <li>Finalization: Once approved, we deliver the final logo along with a comprehensive brand
                            guidelines document outlining usage standards.</li>
                    </ul>

                    <h6 class="fw-bold">Tools We Use:</h6>
                    <ul>
                        <li>Adobe Illustrator and CorelDRAW for logo design</li>
                        <li>Figma or Sketch for collaborative design processes</li>
                        <li>Brand guidelines templates to maintain consistency across all brand materials</li>
                    </ul>
                    <p>By combining strategic insight with creative design, our branding and logo design services help you
                        establish a strong identity that sets you apart from competitors and connects meaningfully with your
                        audience.</p>

                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn about-image" data-wow-delay="0.5s"
                        src="{{ asset('frontend/img/Branding-service.png') }}" alt="home-image-1">
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
