<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/lib/wow/wow.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script>
    // inquriy form validation
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
                    minlength: 4
                }
            },
            messages: {
                name: {
                    required: "Please enter your full name",
                    minlength: "Your name must consist of at least 3 characters"
                },
                number: {
                    required: "Please provide your mobile number",
                    digits: "Only numbers are allowed",
                    minlength: "Must be 10 digits",
                    maxlength: "Must be 10 digits"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                services: {
                    required: "Please select a service"
                },
                project_details: {
                    required: "Please provide details about your project",
                    minlength: "Details must be at least 4 characters long"
                }
            },
            errorClass: "is-invalid", // Bootstrap's error class
            validClass: "is-valid", // Bootstrap's valid class
            errorPlacement: function(error, element) {
                // For form-floating inputs, place the error message outside the floating container
                if (element.closest(".form-floating").length) {
                    error.addClass("invalid-feedback");
                    element.closest(".form-floating").after(error);
                } else {
                    error.addClass("invalid-feedback");
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).removeClass("is-invalid").addClass("is-valid");
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });

    // jQuery validation for the contact form
    $(document).ready(function() {
        $("#contactform").validate({
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
                    required: "Please enter the subject",
                    minlength: "Subject must be at least 5 characters long"
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Message must be at least 10 characters long"
                }
            },
            errorClass: "is-invalid", // Use "is-invalid" class for error fields
            errorPlacement: function(error, element) {
                // Place error message inside the invalid-feedback div
                error.appendTo(element.siblings(".invalid-feedback"));
            },
            highlight: function(element) {
                $(element).addClass("is-invalid"); // Add error class when field is invalid
            },
            unhighlight: function(element) {
                $(element).removeClass("is-invalid"); // Remove error class when field is valid
            },
            submitHandler: function(form) {
                form.submit(); // Submit the form if valid
            }
        });
    });

    // insert subscribe email
    document.getElementById('subscribe-button').addEventListener('click', function() {
        const emailInput = document.getElementById('newsletter-email');
        const email = emailInput.value;

        fetch('{{ route('newsletter.subscribe') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    email: email
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    emailInput.style.display = 'none';
                    document.getElementById('thank-you-message').style.display = 'block';
                } else {
                    alert(data.error);
                }
            })
            .catch(error => console.error('Error:', error));
    });

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


</body>

</html>
