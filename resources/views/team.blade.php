@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')
<section class="team-area ptb-100">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Team">
                        {{-- <ul>
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
                        </ul> --}}
                    </div>
                    <div class="bottom">
                        <h2>श्री राम मेहर शर्मा</h2>
                        <span>चैयरमेन-कम-मुख्य कार्यकारी निदेशक</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्रीमती रत्न बाला</h2>
                        <span>उप प्रधान-कम-सहायक निदेशक</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/5.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्री बलवान सिहं</h2>
                        <span>उप सचिव-कम-उप निदेशक</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/7.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्रीमती गीता रानी</h2>
                        <span>घ-कम-निरीक्षण अधिकारी सदस्य-कम-
                            & & EMPLOΥΜΕΝΤ</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/8.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्री मौहित सैन</h2>
                        <span>WEL
                            सदस्य-कम-वित्त अधिकारी
                            SERVICES LIMITED</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/9.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्री नवीन कुमार</h2>
                        <span> GRAM
                            सदस्य-कम-सहायक निदेशक
                            HARYANA</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('assets/img/team/10.jpg') }}" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>श्री जितेन्द्र कुमार</h2>
                        <span>सदस्य-कम-कम-सुरक्षा अधिकारी</span>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>
@endsection
