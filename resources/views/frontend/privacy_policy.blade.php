@extends('frontend.layouts.main_index.main')
@section('keywords', 'pratham,pratham,pratham,pratham')
@section('description', 'This is Description')
@section('title')
    Privacy Policy
@endsection

@section('main-container')
    <div class="py-5 bg-primary hero-header main_header_background">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row py-5" style="--bs-gutter-y: 3rem;">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Privacy Policy</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Privacy Policy
                            </li>
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
                                Introduction:
                            </li>
                        </h5>
                        <p>This Privacy Policy explains how InfiniteNexus IT Solutions collects, uses, discloses, and
                            protects
                            your information when you visit our website or use our services.
                        </p>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Information We Collect:</strong>
                            </li>
                        </h5>
                        <ul>
                            <li>We may collect personal information from you when you:</li>
                            <ul>
                                <li>Fill out forms on our website.</li>
                                <li>Contact us via email or phone.</li>
                                <li>Subscribe to our newsletter.</li>
                            </ul>
                            <li>The types of information we may collect include:</li>
                            <ul>
                                <li>Name</li>
                                <li>Email address</li>
                                <li>Phone number</li>
                                <li>Company name</li>
                                <li>Project details</li>
                            </ul>
                        </ul>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">How We Use Your Information:</strong>
                            </li>
                        </h5>
                        <ul>
                            <li>To provide and maintain our services.</li>
                            <li>To notify you about changes to our services.</li>
                            <li>To respond to your inquiries.</li>
                            <li>To send you newsletters and marketing communications (you can opt-out at any time).</li>
                        </ul>

                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Disclosure of Your Information:</strong>
                            </li>
                        </h5>

                        <ul>
                            <li>We do not sell or rent your personal information to third parties.</li>
                            <li>We may share your information with:</li>
                            <ul>
                                <li>Service providers who assist us in providing our services (e.g., payment
                                    processors).
                                </li>
                                <li>Legal authorities if required by law or to protect our rights.</li>
                            </ul>
                        </ul>

                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Data Security:</strong>
                            </li>
                        </h5>
                        We take the security of your personal information seriously and implement reasonable measures to
                        protect it from unauthorized access or disclosure. However, no method of transmission over the
                        internet is completely secure.

                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Your Rights:</strong>
                            </li>
                        </h5>
                        Depending on your jurisdiction, you may have certain rights regarding your personal information,
                        including:
                        <ul>
                            <li>The right to access your personal data.</li>
                            <li>The right to request correction of inaccurate data.</li>
                            <li>The right to request deletion of your personal data.</li>
                        </ul>
                        </li>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Changes to This Privacy Policy:</strong>
                            </li>
                        </h5>

                        We may update this Privacy Policy from time to time. We will notify you of any changes by
                        posting
                        the new Privacy Policy on our website with a new effective date.
                        </li>
                        <h5 class="fw-bold mt-2">
                            <li>
                                <strong class="fs-5 fw-bold">Contact Us:</strong>
                            </li>
                        </h5>
                        If you have any questions about this Privacy Policy or wish to exercise your rights
                        regarding
                        your
                        personal information, please contact us at:
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
