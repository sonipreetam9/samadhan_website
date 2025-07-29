@extends('layouts.header')
@section('content')
@include('layouts.breadcrumb')



<!-- About -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-4">
                <div class="about-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="About" width="100">
                </div>
            </div>

            <div class="col-lg-8">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">{{ $page_title }}</span>
                        <h3>{{ $web_name }}</h3>
                    </div>
                    <span class="about-span">
                        हमारे मूल्य हमारी ब्रांड की नींव और आधार हैं, जिन पर हम खड़े हैं और जिनके माध्यम से हम समुदायों
                        को आगे बढ़ने और फलने-फूलने में मदद करते हैं। हमारा ध्यान अपने ग्राहकों को सर्वोत्तम मूल्य प्रदान
                        करने पर केंद्रित है — अपने अनुभव, कौशल और भागीदारों के सहयोग से।
                    </span>
                    <style>
                        .justify-text {
                            text-align: justify !important;
                        }
                    </style>
                    <p class="justify-text">

                        <b>G</b><span>rowth - लोगों और समुदायों की प्रगति पर केंद्रित रहना।</span><br>
                        <b>R</b><span>espect - उन सभी लोगों के प्रति सम्मान रखना जिनके साथ और जिनके लिए हम काम करते
                            हैं।</span><br>
                        <b>A</b><span>nalytical - कार्यों को सोच-समझकर, व्यवस्थित तरीके से और विश्लेषणात्मक रूप से
                            निष्पादित करना।</span><br>
                        <b>M</b><span>eaningful - ऐसा संसार बनाना जो गहराई और महत्व से भरा हो।</span><br>
                        <b>I</b><span>nnovation - रचनात्मकता में समझौता न करना, ईमानदार और पारदर्शी बने रहना।</span><br>
                        <b>N</b><span>urturing - एक ऐसा वातावरण प्रदान करना जो हमारे लोगों को शारीरिक और मानसिक पोषण
                            दे।</span>
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End About -->





@endsection
