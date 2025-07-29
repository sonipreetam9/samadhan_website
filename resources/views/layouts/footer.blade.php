<!-- Footer -->
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{ asset($small_logo) }}" class="logo-one" alt="Logo" width="120">
                        </a>


                        <p>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड पंजीकृत कॉरपोरेट कार्य मंत्रालय,
                            भारत सरकार</p>

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('overview') }}">
                                    <i class="icofont-simple-right"></i>
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">
                                    <i class="icofont-simple-right"></i>
                                    Service
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}">
                                    <i class="icofont-simple-right"></i>
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="icofont-simple-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Download</h3>
                        <ul>
                            <li>
                                <a href="{{ asset('assets/membership_form.pdf') }}" target="_blank"> <i
                                        class="icofont-simple-right"></i> Membership Form</a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/application.pdf') }}" target="_blank"> <i
                                        class="icofont-simple-right"></i> Job Application From</a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/SAMADHAN_CERTIFICATE_OF_INCORPORATION-20191218.pdf') }}"
                                    target="_blank"> <i class="icofont-simple-right"></i> Certificates</a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Registered Adresss</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">{{ $web_address }}</a>
                                </li>
                                <li>
                                    <i class="icofont-whatsapp"></i>
                                    <a href="tel:123456789">+91 {{ $web_phone2 }}  (Only Whatsapp)</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">{{ $web_address }}</a>
                                </li>
                                <li>
                                    <i class="icofont-whatsapp"></i>
                                    <a href="tel:548658956">+91 {{ $web_phone2 }}</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @
                <script>
                    document.write(new Date().getFullYear())
                </script> SGWESLTD.


                {{-- Designed By <a href="https://techgeometry.com/" target="_blank">TechGeometry</a> --}}
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>
<!-- End Go Top -->

<!--=== Essential JS ===-->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>


</html>
