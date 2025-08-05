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
<form action="{{ route('contact.post') }}" method="POST" >
    @csrf
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>✅</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>⚠ त्रुटियाँ पाई गईं:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h2 class="mb-3">चलिए बात करते हैं...!</h2>
    <p class="mb-4">हमसे संपर्क करें यदि आपके पास कोई प्रश्न, सुझाव या जानकारी हो। हम आपकी सहायता के लिए हमेशा तैयार हैं। नीचे दिए गए फॉर्म को भरें और हम शीघ्र ही आपसे संपर्क करेंगे।</p>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="name" id="name" class="form-control" placeholder="नाम" required>
                <label for="name"><i class="icofont-user-alt-3 me-2"></i>नाम</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="ईमेल" required>
                <label for="email"><i class="icofont-ui-email me-2"></i>ईमेल</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="फोन नंबर" required>
                <label for="phone_number"><i class="icofont-ui-call me-2"></i>फोन नंबर</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="विषय" required>
                <label for="msg_subject"><i class="icofont-notepad me-2"></i>विषय</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea name="message" id="message" class="form-control" placeholder="अपना संदेश लिखें" style="height: 150px;" required></textarea>
                <label for="message"><i class="icofont-comment me-2"></i>अपना संदेश लिखें</label>
            </div>
        </div>

        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-success px-4">
                संदेश भेजें
            </button>
            <div id="msgSubmit" class="h5 mt-3 text-success d-none"></div>
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
