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
    Your all-in-one hub for transforming ideas into reality
@endsection
@section('main-container')
    {{-- <style>
        .swal2-container.swal2-center.swal2-backdrop-show {
            padding: 0px !important;
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            width: 22em !important;
            grid-template-columns: minmax(0, 99%) !important;
        }
    </style> --}}
    <div class="bg-primary hero-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Your all-in-one hub for transforming ideas into reality!</h1>
                    <p class="text-white pb-3 animated zoomIn">From web design, web development, and software development to
                        digital marketing, we handle it all—from zero to launch and beyond!<br> Contact us to get a free
                        consultation.</p>
                    <a href="tel:+380986078772"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                        Quote</a>
                    <a href="{{ route('frontend.contact') }}"
                        class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start pt-lg-0 pt-5">
                    <img class="img-fluid" src="{{ asset('frontend/img/hero.png') }}" alt="home-image-1">
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- About Start -->
    <section class="pt-120 pt-70">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp why-choose-us" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">Why Choose Us?</h6>
                        <h3 class="mt-2">Welcome to InfiniteNexus IT Solutions!</h3>
                    </div>
                    <p class="mb-4">Ready to Elevate Your Business? At InfiniteNexus IT Solutions, we’re here to help you
                        every step of the way! Getting started is easy:</p>
                    <p><b>Reach Out:</b> Contact us through our website or give us a call to discuss your project needs and
                        goals.</p>
                    <p><b>Consultation:</b> Schedule a free consultation where our team will listen to your ideas and
                        provide expert recommendations tailored to your business.</p>
                    <p><b>Proposal:</b> We’ll create a customized proposal outlining our services, timelines, and pricing to
                        ensure complete transparency.</p>
                    <p><b>Collaboration:</b> Once you approve the proposal, we’ll begin our collaborative process, keeping
                        you informed and involved throughout the project.</p>
                    <p><b>Launch & Support:</b> After delivering your project, we’ll provide ongoing support to ensure your
                        success.</p>
                    <p>Let’s turn your vision into reality with tailored digital solutions that meet your unique needs!</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Guaranteed Quality</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Timely Delivery</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Creative and Prospective Team
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-outline-primary btn-square me-3"
                            href="https://www.facebook.com/share/g/15QTFkVNRs/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3"
                            href="https://wa.me/380986078772?text=Hello%20I%20need%20assistance" target="_blank"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3"
                            href="https://www.instagram.com/infinitenexus_it_solutions" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square"
                            href="https://in.linkedin.com/company/infinite-nexus?trk=public_post_feed-actor-name"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 why-choose-us-img">
                    <img class="img-fluid wow zoomIn about-image" data-wow-delay="0.5s"
                        src="{{ asset('frontend/img/whychooseus.svg') }}" alt="home-image-2">
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
                            <button id="subscribe-b utton" type="button"
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
    <!-- Newsletter End -->


    <!-- Service Start -->
    <section class="pt-120 pt-70">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                <h3 class="mt-2">What Solutions We Provide</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-paint-brush fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Web Design</h5>
                        <p>We create visually appealing and user-friendly websites that are responsive, modern, and tailored
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
                        <p>Our social media marketing services help you build a strong online presence and engage with your
                            audience effectively. We create tailored strategies that align with your brand's goals.
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
                        <p>We deliver custom software solutions that streamline processes, enhance efficiency, and cater to
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
                        <p>Our Branding and Logo design services craft unique and memorable branding materials, logos that
                            effectively represent your brand’s values and vision.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('branding-and-logo-design') }}">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-brush fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Application Design</h5>
                        <p>We design intuitive and functional applications that provide an engaging user experience across
                            multiple platforms.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('application-design') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- Portfolio Start -->
    <section class="pt-120 pt-70">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp">
                <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                <h3 class="mt-2">Recently Launched Projects</h3>
            </div>
            <div class="row mt-n2 wow fadeInUp">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                        <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                        <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/Logo.jpg') }}" alt="home-image-4">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-logo-design-for-revanto-jewels-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Revanto Jewels, a luxury
                                    jewelry brand, sought a distinctive logo that embodies sophistication and quality. The
                                    goal was to create a visual identity that resonates with their target audience. Our team
                                    conceptualized and created the logo from scratch, collaborating closely with the client
                                    to capture their vision.<br>

                                    Results Achieved:
                                    Delivered a logo that aligns with Revanto Jewels' identity and enhances its presence in
                                    the luxury market.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Logo Design for Revanto
                                    Jewels</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/Lona-Hai.jpg') }}" alt="home-image-5">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-design-and-development-of-loanHai-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>LoanHai is an innovative online
                                    platform designed to provide users with quick access to various personal loans.
                                    Developed from scratch by my team and me
                                    <br>
                                    Results Achieved:
                                    Successfully designed, developed and launched LoanHai within the projected timeline.
                                    Enabled users to complete loan applications in under 2 minutes, enhancing user
                                    satisfaction.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="https://loanhai.in/">Design and
                                    Development of LoanHai from 0 - Instant Personal Loan Platform</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/Thabhnail.jpg') }}" alt="home-image-6">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-youTube-thumbnail-design-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>The goal was to create an
                                    eye-catching YouTube thumbnail for one famous YouTube Channel, aimed at increasing
                                    viewer engagement and click-through rates. The video focuses on AI

                                    <br>
                                    Results Achieved:
                                    Increased click-through rate by 73% compared to previous videos.
                                    Enhanced overall viewer engagement and channel growth.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">YouTube Thumbnail Design for
                                    YouTube Channel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden" style="border: 10px solid black;">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/shopify.jpeg') }}" alt="home-image-8">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-shopify-store-development-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i> Our team led the development
                                    of a Shopify store for a sustainable fashion brand.

                                    The result was a significant increase in online sales and improved customer engagement
                                    within the first month.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Shopify Store Development</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/Branding-Services.jpeg') }}"
                            alt="home-image-7">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-branding-services-for-a-tech-startup-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>We designed a modern logo
                                    reflecting innovation, developed promotional banners for online use, and established
                                    brand guidelines for consistency across platforms. The startup successfully launched its
                                    website with increased recognition and interest from potential investors.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Branding Services for a Tech
                                    Startup</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn custom-portfolio-with">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('frontend/img/modern-furniture.jpeg') }}"
                            alt="home-image-9">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light"
                                href="{{ asset('frontend/img/our-projects/full-e-commerce-development-home-doods-store-img.jpeg') }}"
                                data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i> We led the development of an
                                    e-commerce platform for a home goods retailer. Our goal was to create an intuitive
                                    online store that enhances customer experience and boosts sales.

                                    We chose Shopify for its scalability, migrated existing product data, and designed a
                                    responsive UI/UX. Key features included custom product filtering, secure payment
                                    processing, and integration with inventory management systems. The result was a 40%
                                    increase in online sales within the first month.</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">E-commerce Development for a
                                    Home Goods Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <section class="pt-120 pt-70">
        <div class="bg-primary testimonial py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>InfiniteNexus exceeded our expectations with their digital marketing services and
                            logo design. The
                            team took the time to understand our goals and delivered a tailored marketing plan that resulted
                            in
                            a noticeable increase in leads and customer engagement. The logo they designed is not only
                            visually
                            appealing but also aligns perfectly with our brand identity. Their commitment to quality and
                            attention to detail made the entire process seamless.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonials-2.jpg') }}" style="width: 50px; height: 50px;"
                                alt="home-image-13">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Parth Patel</h6>
                                <small>CEO at P&D Associate</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Working with InfiniteNexus was a game-changer for our online store. They took the
                            time to understand
                            our unique needs and delivered a fully functional e-commerce website that exceeded our
                            expectations.
                            The team was responsive and provided 24/7 support throughout the project.I highly recommend
                            their
                            services to anyone looking to enhance their online presence!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;"
                                alt="home-image-10">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Sarah J.</h6>
                                <small>Owner of Trendy Boutique</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Working with InfiniteNexus was instrumental in bringing Loanhai to life. They
                            didn’t just provide
                            services; they partnered with us from the very beginning, helping us develop our brand and
                            digital
                            presence from scratch. Their team crafted a stunning logo that perfectly encapsulates our vision
                            and
                            values, and they built our website with a focus on user experience that has significantly
                            enhanced
                            our customer engagement. The comprehensive digital marketing strategy they implemented has
                            driven
                            impressive growth for our startup.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonials-3.jpg') }}" style="width: 50px; height: 50px;"
                                alt="home-image-13">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Nilesh Zapadiya</h6>
                                <small>Founder at Loanhai</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>We partnered with InfiniteNexus for our digital marketing needs, and the results
                            have been
                            phenomenal! They crafted a tailored strategy that significantly improved our online visibility
                            and
                            engagement on social media. The team's expertise in SEO and content marketing has driven more
                            traffic to our website than ever before. Their commitment to our success is evident.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;"
                                alt="home-image-12">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Jessica L.</h6>
                                <small>Marketing Director at Tech Innovations</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Working with InfiniteNexus for our digital marketing needs has been an
                            outstanding experience. Their
                            expertise in creating compelling content and managing our social media has driven impressive
                            results. Additionally, the logo design they provided perfectly captures our brand's essence.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonials-4.png') }}" style="width: 50px; height: 50px;"
                                alt="home-image-13">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Vishal Bhai Gupta</h6>
                                <small>CEO at Cack & More</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4 custome-testimonial-height">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>InfiniteNexus helped us redefine our brand identity with a stunning logo and
                            comprehensive branding
                            package. Their creative team was incredibly attentive, incorporating our feedback at every stage
                            of
                            the design process. The final product truly reflects our vision and has received positive
                            feedback
                            from our customers.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;"
                                alt="home-image-11">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Michael T</h6>
                                <small>CEO of EcoGoods</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <section class="section core-value about-section ptb-120 ptb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row position-relative gy-4">
                        <div class="icon-box-item col-md-6">
                            <div class="block bg-white">
                                <div class="icon rounded-number">01</div>
                                <h3 class="mb-3">Innovation</h3>
                                <p class="mb-0">We embrace cutting-edge technologies and strive to develop innovative solutions to meet and exceed client expectations.</p>
                            </div>
                        </div>
                        <div class="icon-box-item col-md-6">
                            <div class="block bg-white">
                                <div class="icon rounded-number">02</div>
                                <h3 class="mb-3">Reliability</h3>
                                <p class="mb-0">We deliver consistent, high-quality services that clients can depend on to drive their success.</p>
                            </div>
                        </div>
                        <div class="icon-box-item col-md-6">
                            <div class="block bg-white">
                                <div class="icon rounded-number">03</div>
                                <h3 class="mb-3">Collaboration</h3>
                                <p class="mb-0">We work closely with clients, partners, and team members to create solutions that truly address needs and goals.</p>
                            </div>
                        </div>
                        <div class="icon-box-item col-md-6">
                            <div class="block bg-white">
                                <div class="icon rounded-number">04</div>
                                <h3 class="mb-3">Integrity</h3>
                                <p class="mb-0">We uphold transparency, honesty, and ethical practices in all aspects of our business.</p>
                            </div>
                        </div>
                        <div class="has-shapes">
                            <svg class="shape shape-1 text-primary" width="71" height="71" viewBox="0 0 119 119"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z"
                                    fill="currentColor" />
                                <path
                                    d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z"
                                    fill="currentColor" />
                                <path
                                    d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z"
                                    fill="currentColor" />
                                <path
                                    d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z"
                                    fill="currentColor" />
                                <path
                                    d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z"
                                    fill="currentColor" />
                                <path
                                    d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z"
                                    fill="currentColor" />
                                <path
                                    d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z"
                                    fill="currentColor" />
                                <path
                                    d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z"
                                    fill="currentColor" />
                                <path
                                    d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z"
                                    fill="currentColor" />
                                <path
                                    d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z"
                                    fill="currentColor" />
                                <path
                                    d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z"
                                    fill="currentColor" />
                                <path
                                    d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z"
                                    fill="currentColor" />
                                <path
                                    d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z"
                                    fill="currentColor" />
                                <path
                                    d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z"
                                    fill="currentColor" />
                                <path
                                    d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z"
                                    fill="currentColor" />
                            </svg>
                            <svg class="shape shape-2 text-primary" width="100" height="100" viewBox="0 0 119 119"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z"
                                    fill="currentColor" />
                                <path
                                    d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z"
                                    fill="currentColor" />
                                <path
                                    d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z"
                                    fill="currentColor" />
                                <path
                                    d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z"
                                    fill="currentColor" />
                                <path
                                    d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z"
                                    fill="currentColor" />
                                <path
                                    d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z"
                                    fill="currentColor" />
                                <path
                                    d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z"
                                    fill="currentColor" />
                                <path
                                    d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z"
                                    fill="currentColor" />
                                <path
                                    d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z"
                                    fill="currentColor" />
                                <path
                                    d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z"
                                    fill="currentColor" />
                                <path
                                    d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z"
                                    fill="currentColor" />
                                <path
                                    d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z"
                                    fill="currentColor" />
                                <path
                                    d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z"
                                    fill="currentColor" />
                                <path
                                    d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z"
                                    fill="currentColor" />
                                <path
                                    d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="section-title ps-0 ps-lg-5">
                        <h2 class="fw-bold">Our Core Values</h2>
                        <div class="content">
                            <p>At Infinite Nexus, our mission is to empower businesses with cutting-edge IT solutions built on a foundation of trust, innovation, and excellence.</p>
                            <p>We are committed to delivering exceptional value by adhering to principles that foster collaboration, reliability, and ethical practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Team End -->
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


@endsection
