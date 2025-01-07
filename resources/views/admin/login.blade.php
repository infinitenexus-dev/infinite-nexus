    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.min.css') }}" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/font-awesome/sweetalert2.min.css') }}">
        <script src="{{ asset('frontend/font-awesome/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('frontend/asset/jquery-validation/') }}"></script>
        <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


    </head>

    <body>
        <div class="container">
            <div class="row vh-100 align-items-center justify-content-center">
                <div class="col-lg-4 col-12">
                    <div class="p-3 bg-white border">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('frontend/site_logo/vr-logo-2.svg') }}" alt="Logo" class="img-fluid">
                        </div>
                        <form method="post" action="{{ route('admin-data') }}" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label for="email2" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->has('login_error'))
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Invalid credentials, please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        @if (session('logout_success'))
            <script>
                Swal.fire({
                    title: 'Logged Out!',
                    text: 'You have successfully logged out.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        <script>
            $(document).ready(function() {
                $("#loginForm").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        }
                    },
                    messages: {
                        email: {
                            required: "Please enter your email address.",
                            email: "Please enter a valid email address."
                        },
                        password: {
                            required: "Please enter your password.",
                            minlength: "Your password must be at least 6 characters long."
                        }
                    },
                    errorClass: "text-danger",
                    submitHandler: function(form) {
                        form.submit(); // Submit the form if valid
                    }
                });
            });
        </script>

    </body>

    </html>
