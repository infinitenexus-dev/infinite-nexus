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
Contact Us for Tailored Web Development and Digital Solutions
@endsection
@section('main-container')
<div class="py-5 bg-primary hero-header main_header_background">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row py-5" style="--bs-gutter-y: 3rem;">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Contact Us</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<!-- Contact Start -->
<section class="pt-120 pt-70">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                    data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6>
                    <h2 class="mt-2">Contact For Any Query</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="first-name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ptb-120 ptb-70">
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117515.28690847225!2d72.41276096428398!3d23.010818099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85e9f2477ef1%3A0xd22e247bd25f9357!2sSun%20Gravitas!5e0!3m2!1sen!2sin!4v1735456253662!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 5
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must be at least 3 characters long"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                subject: {
                    required: "Please enter a subject",
                    minlength: "The subject must be at least 5 characters long"
                },
                message: {
                    required: "Please enter your message",
                    minlength: "Your message must be at least 10 characters long"
                }
            },
            errorClass: "is-invalid",
            validClass: "is-valid",
            errorPlacement: function(error, element) {
                element.siblings('.invalid-feedback').text(error.text());
            },
            submitHandler: function(form) {
                let formData = {
                    name: $('#first-name').val(),
                    email: $('#gmail').val(),
                    subject: $('#subject').val(),
                    message: $('#message').val(),
                    _token: $('input[name="_token"]').val(),
                };

                $.ajax({
                    url: "{{ route('contacts.store') }}",
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        $('#contactForm')[0].reset();
                        $('.is-valid').removeClass('is-valid');
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong. Please try again.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.reload();
                        });
                    }
                });
            }
        });
    });
</script>

@endsection