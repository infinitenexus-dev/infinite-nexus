@extends('frontend.layouts.main_index.main')
@section('keywords','pratham,pratham,pratham,pratham')
@section('description','This is Description')
@section('title')
Testimonial Page
@endsection
@section('main-container')
<div class="py-5 bg-primary hero-header main_header_background">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h2 class="text-white animated zoomIn">Testimonial</h2>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

   <!-- Full Screen Search Start -->
   <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Testimonial Start -->
<div class="bg-primary testimonial py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin:0;">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center"> 
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;" alt="testimonial-image-1">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;" alt="testimonial-image-2">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-3.jpg') }}" style="width: 50px; height: 50px;" alt="testimonial-image-4">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;" alt="testimonial-image-5">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
