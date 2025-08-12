@extends('layouts.header')
@section('content')


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/slide2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/b2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/b3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/b4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="dream-area p-2">

@if(Session::has('success'))
            <div style="padding: 10px 15px 0px 15px;">
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            </div>
            @endif

            @if(Session::has('error'))
            <div style="padding: 10px 15px 0px 15px;">
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
            </div>
            @endif


</section>
<section class="dream-area p-2">


    <marquee><a href="{{ asset('assets/img/07_2025_vacancy.jpg') }}" target="_blank" style="color: red">{{ $web_name }}
            Advertisement number 07/2025
            for Multiple Positions Released. Online application will start from 01-AUG-2025 and closed
            15-SEPT-2025 Click here to download notification.</a></marquee>


</section>
<section class="dream-area p-2 mt-2">

    <marquee><a href="{{ asset('assets/membership_form.pdf') }}" target="_blank" style="color: red">मुख्यालय द्वारा
            कल्याणकारी योजनाओं से सम्बन्धित आवेदन फ़ार्म पोर्टल पर या नजदीक के सी0एस0सी0 केन्द्रों पर जाकर अपना यूनिक
            पंजीकरण नम्बर प्राप्त करें। (download application form)</a></marquee>
</section>




<!-- Dream -->
{{-- <section class="dream-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Fulfill our dream</span>
            <h2>Mission to make a smile</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Over 20M+ people around the world is having good life because of
                            Findo</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*50</span>country served world wide</h4>
                    <span class="sub-span">01</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">We are supporting the poor and homeless people by providing
                            food</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*Food</span>served world wide</h4>
                    <span class="sub-span">02</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">First time a non- profitable organization is fighting against the
                            poverty</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*Finance</span>collecting & donating</h4>
                    <span class="sub-span">03</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Over 1200+ volunteer working for Findo around the world</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*Volunteer</span>in every Country</h4>
                    <span class="sub-span">04</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">Hands move to support in Yemen combat covid-19 by donating face
                            masks</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*Lockdown</span>covid-19 helping</h4>
                    <span class="sub-span">05</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
                    <h3>
                        <a href="donations.html">This project seeks to build houses for reduce their suffering allow
                            them to live</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>
                    <h4><span>*150</span>house project</h4>
                    <span class="sub-span">06</span>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Dream -->





<!-- About -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-4">
                <div class="about-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="About">
                </div>
            </div>

            <div class="col-lg-8">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">हमारे बारे में</span>
                        <h3>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड</h3>
                    </div>
                    <span class="about-span">
                        हम उन संस्थाओं, सामाजिक संगठनों, समुदाय समूहों, कार्यकर्ताओं और नागरिकों के लिए कार्य करते हैं
                        जो समाज में सकारात्मक परिवर्तन लाने के लिए समर्पित हैं।
                    </span>
                    <p>
                        समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड का उद्देश्य ग्रामीण और शहरी क्षेत्रों
                        के लोगों को सामाजिक, आर्थिक और रोजगार से जुड़ी योजनाओं से जोड़ना है। हम सरकारी और गैर-सरकारी
                        योजनाओं को जनता तक पहुंचाने के लिए जागरूकता अभियान, सर्वेक्षण, प्रशिक्षण और सेवा वितरण कार्यों
                        में सक्रिय रूप से कार्य करते हैं।
                    </p>
                    <p>
                        हमारा विश्वास है कि समाज का हर वर्ग, चाहे वह शिक्षित हो या अशिक्षित, उचित मार्गदर्शन और अवसर
                        मिलने पर आत्मनिर्भर बन सकता है। इसी दिशा में हमारा प्रयास है कि हम समाज के अंतिम व्यक्ति तक अपनी
                        सेवाएं पहुंचाएं और उन्हें सशक्त बनाएं।
                    </p>
                    <div class="about-btn-area">
                        <a class="common-btn about-btn" href="#">फंडरेज़िंग शुरू करें</a>
                        <a class="common-btn" href="#">और पढ़ें</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End About -->




<div class="container my-4">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <aside class="user_information">
                <div class="main-users">
                    <div id="Div1" style="margin-top: 15px; text-align: center;">
                        <h3>To avail SGWESLTD. any scheme or service, Please visit</h3>
                        your nearest CSC Center
                        <br><br>
                        <a href="{{ asset('assets/membership_form.pdf') }}" target="_blank">
                            <img src="assets/img/form_download.png">
                        </a>
                        <br>
                        For any queries related to schemes/services ,<br>
                        (9am to 5pm - Monday to Saturday)
                        <h4>
                            <a href="https://www.google.com/search?q=csc+center+near+me" target="_blank">
                                CSC Center Search Near Me
                            </a>
                        </h4>
                    </div>

                    <div class="bootstrap-web text-center">
                        <a href="{{ route('membership.form') }}" target="_blank">
                            <img class="rounded mx-auto d-block mt-3" src="assets/img/job.gif" alt="Job">
                        </a>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <aside class="login_sec" style="padding:10px;">
                <link rel="stylesheet" href="assets/css/hlwb/bootstrap-web.css">
                <div class="bootstrap-web">
                    <div class="border border-white mt-2">
                        <h6 class="text-center text-danger font-weight-bold">E-Services Online</h6>
                    </div>
                    <div style="display: flex;flex-direction: column;">
                        <a href="{{ route('membership.form') }}" style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn btn-warning btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-person"></i> Apply Membership
                        </a>
                        <a href="{{ route('membership.form') }}" style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn login-btn btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-person"></i> Membership Login
                        </a>
                        <a href="{{ route('login') }}" style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn btn-warning btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-person"></i> Apply Job
                        </a>
                        <a href="{{ route('contact') }}" style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn btn-warning btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-phone"></i> Contact Us
                        </a>
                        <a href="{{ route('services') }}" style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn btn-warning btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-list"></i> Services
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<!--=== Feature ===-->
<div class="feature-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-item">
                    <i class="flaticon-solidarity"></i>
                    <h3>
                        <a href="#">Be a volunteer</a>
                    </h3>
                    <p>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड में हम ऐसे समर्पित नागरिकों की तलाश में हैं जो समाज में बदलाव लाने की भावना से प्रेरित हों</p>
                    <a class="feature-btn" href="{{ route('login') }}">Join Now</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-item two">
                    <i class="flaticon-donation"></i>
                    <h3>
                        <a href="#">Donate now</a>
                    </h3>
                    <p>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड समाज के हर उस वर्ग के लिए कार्य करता है जिसे सहयोग और सहारे की आवश्यकता है
</p>
                    <a class="feature-btn" href="{{ route('login') }}">Join Now</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-item three">
                    <i class="flaticon-love"></i>
                    <h3>
                        <a href="#">Show your love</a>
                    </h3>
                    <p>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड के साथ जुड़कर आप उन हज़ारों लोगों की ज़िंदगी में रोशनी ला सकते हैं जिन्हें आपकी ज़रूरत है।
</p>
                    <a class="feature-btn" href="{{ route('login') }}">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Feature ===-->



<!-- Work -->
<section class="work-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="work-content">
                    <div class="section-title">
                        <span class="sub-title">हमारा कार्य</span>
                        <h2>हम ग्रामीण क्षेत्रों में कल्याणकारी योजनाएं और सेवाएं प्रदान करने के लिए प्रतिबद्ध हैं</h2>
                    </div>
                    <ul>
                        <li>
                            <h3><span>01</span>कल्याणकारी योजनाओं का लाभ</h3>
                            <p>हमारी स्कीम का लाभ 18-40 वर्ष आयु के ऐसे व्यक्ति ले सकते हैं जिनके पास 2 एकड़ या उससे कम जमीन है, चाहे वे किसी भी जाति के हों।</p>
                        </li>
                        <li>
                            <h3><span>02</span>आजीवन सदस्यता और विशेष सुविधाएं</h3>
                            <p>आजीवन सदस्यता शुल्क ₹1100 है। सदस्य को कन्यादान योजना, वृद्धावस्था पेंशन, दुर्घटना एवं मृत्यु दावा सहित सभी योजनाओं का लाभ मिलता है।</p>
                        </li>
                        <li>
                            <h3><span>03</span>रोजगार और कौशल विकास</h3>
                            <p>ग्रामीण बेरोजगार युवक-युवतियों को पंजीकरण के 5 वर्ष बाद रोजगार के अवसर, सिलाई मशीन योजना एवं अन्य कौशल विकास कार्यक्रम प्रदान किए जाते हैं।</p>
                        </li>
                        <li>
                            <h3><span>04</span>सांस्कृतिक एवं सामाजिक गतिविधियां</h3>
                            <p>हम स्कूलों में सांस्कृतिक कार्यक्रम आयोजित करते हैं, खेल-कूद और महिला सशक्तिकरण से जुड़े अभियान चलाते हैं, ताकि समाज में जागरूकता फैलाई जा सके।</p>
                        </li>
                        <li>
                            <h3><span>05</span>वृद्धावस्था एवं सुरक्षा योजनाएं</h3>
                            <p>60 वर्ष की आयु के बाद पंजीकृत सदस्य को ₹1500 मासिक वृद्धावस्था पेंशन और दुर्घटना/मृत्यु पर आर्थिक सहायता प्रदान की जाती है।</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="work-img">
                    <img src="assets/img/b2.jpg" alt="Work">
                    <img src="assets/img/b3.jpg" alt="Work">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Work -->

<!-- Benefit -->
<div class="benefit-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item">
                    <i class="flaticon-house"></i>
                    <h3>आवास सहायता</h3>
                    <p>ग्रामीण क्षेत्रों के जरूरतमंद परिवारों को आवास निर्माण व मरम्मत के लिए सहायता प्रदान करना।</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item two">
                    <i class="flaticon-hospital"></i>
                    <h3>चिकित्सा सुविधाएं</h3>
                    <p>सदस्यों और उनके परिवार को स्वास्थ्य सेवाओं और आकस्मिक चिकित्सा सहायता का लाभ उपलब्ध कराना।</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item three">
                    <i class="flaticon-fast-food"></i>
                    <h3>भोजन एवं पेयजल</h3>
                    <p>जरूरतमंदों को स्वच्छ पेयजल और पौष्टिक भोजन उपलब्ध कराना, विशेष रूप से ग्रामीण क्षेत्रों में।</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item four">
                    <i class="flaticon-graduation-cap"></i>
                    <h3>शिक्षा सुविधाएं</h3>
                    <p>गरीब परिवारों के बच्चों को शिक्षा, छात्रवृत्ति और सांस्कृतिक गतिविधियों में अवसर प्रदान करना।</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Benefit -->



<!-- Gallery -->
<section class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our gallery</span>
            {{-- <h2>Discover the best things we do</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p> --}}
        </div>
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/a1.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/a1.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/a2.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/a2.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery5.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery5.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/b3.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/b3.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/b4.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/b4.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Gallery -->



@endsection
