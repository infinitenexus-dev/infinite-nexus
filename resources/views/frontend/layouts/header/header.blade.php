<div class=" bg-white p-0">
    {{-- <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}


    <!-- Navbar & Hero Start -->
    <div class=" position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('frontend.home') }}" class="navbar-brand p-0">
                {{-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1> --}}
                <img id="default-logo" src="{{ asset('frontend/site_logo/Vartical-White-Logo.svg') }}" alt="Default Logo">
                <img id="scroll-logo" src="{{ asset('frontend/site_logo/vr-logo-2.svg') }}" alt="Scroll Logo"
                    style="display: none;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('frontend.home') }}"
                        class="nav-item nav-link @if (Route::currentRouteName() == 'frontend.home') active @endif">Home</a>
                    <a href="{{ route('frontend.aboutus') }}"
                        class="nav-item nav-link @if (Route::currentRouteName() == 'frontend.aboutus') active @endif">About</a>
                    <a href="{{ route('frontend.services') }}"
                        class="nav-item nav-link @if (Route::currentRouteName() == 'frontend.services') active @endif">Service</a>
                    {{-- <a href="{{ route('frontend.project') }}" class="nav-item nav-link">Project</a> --}}
                    {{-- <a href="{{ route('frontend.ourteam') }}" class="nav-item nav-link">Our Team</a> --}}
                    {{-- <a href="{{ route('frontend.testimonial') }}" class="nav-item nav-link">Testimonial</a> --}}
                    <a href="{{ route('frontend.contact') }}"
                        class="nav-item nav-link @if (Route::currentRouteName() == 'frontend.contact') active @endif">Contact</a>
                </div>
                {{-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> --}}
                {{-- <a href="#" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> --}}
                <a type="button" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3 inqurit_form" href="#"
                    data-bs-toggle="modal" data-bs-target="#applyLoan">Inquiry</a>

                <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel"
                    aria-hidden="true" style="backdrop-filter:blur(4px);">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <h4 class="modal-title" id="exampleModalLabel">Inquiry Form</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="loanForm" method="POST">
                                    @csrf
                                    <input type="hidden" name="form_type" value="inquiry">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 pb-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name"
                                                    name="name">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 pb-2">
                                            <div class="form-floating">
                                                <input type="tel" class="form-control" id="number"
                                                    name="number">
                                                <label for="number" class="form-label">Mobile Number</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4 pb-2">
                                            <div class="form-floating">
                                                <input class="form-control" id="email" name="email">
                                                <label for="email" class="form-label">Email address</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4 pb-2">
                                            <div class="form-floating">
                                                <select class="form-select" id="services" name="services">
                                                    <option value="">Select Service</option>
                                                    <option value="Web Design">Web Design</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="Software Development">Software Development</option>
                                                    <option value="Logo Design">Logo Design</option>
                                                    <option value="Banner Design">Banner Design</option>
                                                    <option value="Application Design">Application Design</option>
                                                </select>
                                                <label for="services" class="form-label">Choose Service</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-4 pb-2">
                                            <div class="form-floating">
                                                <textarea class="form-control h-auto" name="project_details" id="project_details"></textarea>
                                                <label for="project_details" class="form-label">Message Details</label>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            $(document).ready(function() {
                $("#loanForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        number: {
                            required: true,
                            digits: true,
                            minlength: 10,
                            maxlength: 10
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        services: {
                            required: true
                        },
                        project_details: {
                            required: true,
                            minlength: 10
                        }
                    },
                    messages: {
                        name: "Please enter your full name (at least 3 characters).",
                        number: "Please provide a valid 10-digit mobile number.",
                        email: "Please enter a valid email address.",
                        services: "Please select a service.",
                        project_details: "Please provide at least 10 characters of project details."
                    },
                    errorClass: "is-invalid",
                    validClass: "is-valid",
                    errorPlacement: function(error, element) {
                        element.siblings('.invalid-feedback').text(error.text());
                    },
                    submitHandler: function() {
                        let formData = {
                            name: $("#name").val(),
                            number: $("#number").val(),
                            email: $("#email").val(),
                            services: $("#services").val(),
                            project_details: $("#project_details").val(),
                            _token: $('input[name="_token"]').val()
                        };

                        $.ajax({
                            url: "{{ route('inquiry.store') }}",
                            method: "POST",
                            data: formData,
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: response.message,
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    $("#loanForm")[0].reset();
                                    location.reload();
                                });
                            },
                            error: function(xhr) {
                                let errors = xhr.responseJSON.errors;
                                let errorMessage = "";
                                $.each(errors, function(key, value) {
                                    errorMessage += `${value[0]}<br>`;
                                });

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    html: errorMessage,
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        });
                    }
                });

                $("#submitForm").click(function() {
                    $("#loanForm").submit();
                });
            });
        </script>