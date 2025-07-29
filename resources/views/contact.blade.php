@extends('layouts.header')
@section('content')


@include('layouts.breadcrumb')


<!--=== Contact Info ===-->
<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-location-pin"></i>
                    <span>Registered Adresss:</span>
                    <a href="#">{{ $web_address }}</a>
                    {{-- <a href="#">6A, North street, Jordan</a> --}}
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-whatsapp"></i>
                    <span>Whatsapp Only:</span>
                    {{-- <a href="tel:{{ $web_phone }}">+91 {{ $web_phone }}</a> --}}
                    <a href="tel:{{ $web_phone2 }}">+91 {{ $web_phone2 }}</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-ui-email"></i>
                    <span>Email:</span>
                    <a
                        href="#">
                            {{ $web_email }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Contact Info ===-->

<!-- Contact -->
<div class="contact-area pb-70">
    <div class="container">
<form id="contactForm">
    <h2>चलिए बात करते हैं...!</h2>
    <p>हमसे संपर्क करें यदि आपके पास कोई प्रश्न, सुझाव या जानकारी हो। हम आपकी सहायता के लिए हमेशा तैयार हैं। नीचे दिए गए फॉर्म को भरें और हम शीघ्र ही आपसे संपर्क करेंगे।</p>
    <div class="row">

        <div class="col-lg-6">
            <div class="form-group">
                <label>
                    <i class="icofont-user-alt-3"></i>
                </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="नाम" required
                    data-error="कृपया अपना नाम दर्ज करें">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>
                    <i class="icofont-ui-email"></i>
                </label>
                <input type="email" name="email" id="email" class="form-control" placeholder="ईमेल" required
                    data-error="कृपया अपना ईमेल दर्ज करें">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>
                    <i class="icofont-ui-call"></i>
                </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="फोन नंबर" required
                    data-error="कृपया अपना नंबर दर्ज करें" class="form-control">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>
                    <i class="icofont-notepad"></i>
                </label>
                <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                    placeholder="विषय" required data-error="कृपया विषय दर्ज करें">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>
                    <i class="icofont-comment"></i>
                </label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                    placeholder="अपना संदेश लिखें" required data-error="कृपया अपना संदेश लिखें"></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <div class="form-check agree-label">
                    <input name="gridCheck" value="I agree to the terms and privacy policy."
                        class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        मैं <a href="terms-condition.html">नियम एवं शर्तें</a> और <a href="privacy-policy.html">गोपनीयता नीति</a> से सहमत हूँ।
                    </label>
                    <div class="help-block with-errors gridCheck-error"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <button type="submit" class="btn common-btn">
                संदेश भेजें
            </button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>
    </div>

</form>


    </div>
</div>
<!-- End Contact -->

<!-- Map -->
{{-- <div class="map-area">
    <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1603558902714!5m2!1sen!2sbd"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div> --}}
<!-- End Map -->

@endsection
