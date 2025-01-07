<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker me-3"></i><a
                        href="https://www.google.com/maps/search/?api=1&query=Sun+Gravitas,+nr.+Shyamal+Cross+Road,+Rajmani+Society,+Satellite,+Ahmedabad,+Gujarat+380015"
                        target="_blank" class="text-white"> Gravitas, nr. Shyamal Cross Road, Rajmani
                        Society, Satellite,
                        Ahmedabad, Gujarat 380015</a></p>
                <p><i class="fa fa-phone me-3"></i><a
                        href="https://wa.me/380986078772?text=Hello%20I%20need%20assistance" class="text-white">+380 98607 8772</a></p>
                <p><i class="fa fa-envelope me-3"></i> <a
                        href="mailto:infinitynexus220@gmail.com" class="text-white">infinitynexus220@gmail.com</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/g/15QTFkVNRs/"
                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social"
                        href="  https://wa.me/380986078772?text=Hello%20I%20need%20assistance" target="_blank"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.instagram.com/infinitenexus_it_solutions" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://in.linkedin.com/company/infinite-nexus?trk=public_post_feed-actor-name"
                        target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="{{ route('frontend.aboutus') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('frontend.contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('privacy_policy') }}">Privacy Policy</a>
                <a class="btn btn-link" href="{{ route('terms_and_conditions') }}">Terms & Condition</a>
                {{-- <a class="btn btn-link" href="">Career</a> --}}
            </div>
            {{-- <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Project Gallery</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-1.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-2.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-3.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-4.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-5.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('frontend/img/portfolio-6.jpg') }}" alt="Image">
                    </div>
                </div>
            </div> --}}
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Sign up for the InfiniteNexus IT Solutions newsletter to stay updated on the latest trends, tips, and
                    insights in digital solutions! Our newsletter features exclusive offers, industry news, and helpful
                    resources designed to elevate your business. Join our community and be the first to know about our
                    innovative services and success stories.
                </p>
                <p>Subscribe today and unlock a world of possibilities!</p>
                <div class="position-relative w-100 mt-3">
                    <input type="hidden" name="form_type" value="newsletter">
                    <input id="newsletter-email-footer" class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
                        type="text" placeholder="Your Email" style="height: 48px;">
                    <button id="subscribe-button-footer" type="button"
                        class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                        <i class="fa fa-paper-plane text-primary fs-4"></i>
                    </button>
                </div>
                <h3 id="thank-you-message-footer" style="display: none;" class="text-white mt-3"><u>Thank you for
                        subscribe</u>
                </h3>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('frontend.home') }}">infinitenexus</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="#"></a>
                </div>
                {{-- <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
{{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a> --}}
</div>

<script>
    document.getElementById('subscribe-button-footer').addEventListener('click', function() {
        const emailInput = document.getElementById('newsletter-email-footer');
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
                    document.getElementById('thank-you-message-footer').style.display = 'block';
                } else {
                    alert(data.error);
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>
