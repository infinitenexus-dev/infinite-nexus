@extends('frontend.layouts.main_index.main')
@section('keywords', 'pratham,pratham,pratham,pratham')
@section('description', 'This is Description')
@section('title')
    Terms and Conditions
@endsection

@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Terms and Conditions</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Terms and Conditions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="ptb-120 ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol>
                        <h5 class="fw-bold">
                            <li>
                                <strong class="fs-5 fw-bold">Introduction:</strong>
                            </li>
                        </h5>
                        Welcome to InfiniteNexus IT Solutions! By accessing or using our website and services, you agree
                        to
                        comply with and be bound by these Terms and Conditions. Please read them carefully.
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Services:</strong><br>
                            </li>
                        </h5>
                        InfiniteNexus IT Solutions provides a range of digital services, including but not limited to:
                        <ul>
                            <li>Web Development Services</li>
                            <li>Custom Web Development</li>
                            <li>E-commerce Solutions</li>
                            <li>Software Development</li>
                            <li>UI/UX Design Services</li>
                            <li>Branding and Logo Design</li>
                            <li>Digital Marketing Solutions</li>
                        </ul>

                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">User Responsibilities:</strong><br>
                            </li>
                        </h5>
                        You agree to use our services only for lawful purposes and in accordance with these Terms. You
                        must
                        not:
                        <ul>
                            <li>Use our services in any way that violates any applicable federal, state, local, or
                                international law or regulation.</li>
                            <li>Transmit any material that is fraudulent, deceptive, or otherwise objectionable.</li>
                            <li>Attempt to gain unauthorized access to our systems or networks.</li>
                        </ul>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Intellectual Property:</strong><br>
                            </li>
                        </h5>
                        All content on our website, including text, graphics, logos, and software, is the property of
                        InfiniteNexus IT Solutions or its licensors and is protected by copyright and other intellectual
                        property laws. You may not reproduce, distribute, or create derivative works without our express
                        written permission.
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Payment Terms:</strong><br>
                            </li>
                        </h5>
                        Payment for services must be made as outlined in the project proposal. We reserve the right to
                        suspend or terminate services if payment is not received in a timely manner.
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Limitation of Liability:</strong><br>
                            </li>
                        </h5>
                        To the fullest extent permitted by law, InfiniteNexus IT Solutions shall not be liable for
                        any
                        indirect, incidental, special, consequential, or punitive damages arising out of or related
                        to
                        your
                        use of our services.

                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Modifications:</strong><br>
                            </li>
                        </h5>
                        We reserve the right to modify these Terms at any time. Any changes will be effective
                        immediately
                        upon posting on our website. Your continued use of our services constitutes acceptance
                        of
                        the
                        revised Terms.
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Governing Law:</strong><br>
                            </li>
                        </h5>
                        These Terms shall be governed by and construed in accordance with the laws of [Your
                        Jurisdiction].
                        Any disputes arising from these Terms shall be resolved in the courts located in [Your
                        Jurisdiction].
                        </li>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Contact Information:</strong><br>
                            </li>
                        </h5>
                        For questions about these Terms and Conditions, please contact us at:
                        <ul>
                            <li><b class="text_black">Email:</b> <a href="mailto:infinitynexus220@gmail.com"
                                    class="custom-color-link">infinitynexus220@gmail.com</a></li>
                            <li><b class="text_black">Phone:</b> <a
                                    href="https://wa.me/380986078772?text=Hello%20I%20need%20assistance"
                                    class="custom-color-link">+380 98607 8772</a>
                            </li>
                            <li><b class="text_black">Address:</b> <a
                                    href="https://www.google.com/maps/search/?api=1&query=Sun+Gravitas,+nr.+Shyamal+Cross+Road,+Rajmani+Society,+Satellite,+Ahmedabad,+Gujarat+380015"
                                    target="_blank" class="custom-color-link">
                                    Sun Gravitas, nr. Shyamal Cross Road, Rajmani Society, Satellite, Ahmedabad,
                                    Gujarat
                                    380015</a></li>
                        </ul>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </section>
@endsection
