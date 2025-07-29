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
                        {{ $web_name }} एक बेहतर समाज के निर्माण के लिए प्रतिबद्ध है, जो समावेशी सेवाएं प्रदान करके समाज
                        के हर वर्ग को, विशेष रूप से वंचित और उपेक्षित लोगों को सशक्त बनाता है।
                    </span>
                    <style>
                        .justify-text {
                            text-align: justify !important;
                        }
                    </style>
                    <p class="justify-text">
                        {{ $web_name }} विभिन्न कल्याणकारी योजनाओं और सेवाओं को लागू करने और उन्हें समर्थन देने के लिए
                        प्रयासरत है, जिनमें कन्यादान योजना, वृद्धावस्था पेंशन, दुर्घटना और मृत्यु दावा, साथ ही
                        सांस्कृतिक और खेल गतिविधियाँ शामिल हैं। हम सिलाई मशीन योजना जैसे कौशल विकास कार्यक्रमों को भी
                        सक्रिय रूप से बढ़ावा देते हैं ताकि रोजगार के अवसरों को बढ़ाया जा सके।
                    </p>
                    <p class="justify-text">
                        हमारा उद्देश्य सरकारी, निजी या स्वरोजगार क्षेत्रों में रोजगार सृजन पर केंद्रित सरकारी टेंडरों के
                        लिए आवेदन करना और उन्हें क्रियान्वित करना है। साथ ही, हम किसानों, छात्रों, गृहिणियों और बेटियों
                        को जागरूक करने के लिए अभियान चलाते हैं, जो सामाजिक मुद्दों जैसे परिवार नियोजन, बाल श्रम, बाल
                        विवाह और महिला सशक्तिकरण पर केंद्रित होते हैं।
                    </p>
                    <p class="justify-text">
                        कंपनियों, एनजीओ और सरकारी संस्थाओं के साथ रणनीतिक साझेदारी के माध्यम से {{ $web_name }} शिक्षित
                        और अशिक्षित दोनों वर्गों की सेवा करता है, ताकि हर व्यक्ति को ऐसे अवसर मिल सकें जो उनके जीवन को
                        बेहतर बना सकें।
                    </p>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- End About -->





@endsection
