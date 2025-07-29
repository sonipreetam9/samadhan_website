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


      <marquee><a href="{{ asset('assets/img/avt07.jpg') }}" target="_blank" style="color: red">{{ $web_name }}
                     Advertisement number 07/2025
                    for Multiple Positions Released. Online application will start from 01-AUG-2025 and closed
                    15-SEPT-2025 Click here to download notification.</a></marquee>


</section>
<section class="dream-area p-2 mt-2">

                    <marquee><a href="{{ asset('assets/membership_form.pdf') }}" target="_blank" style="color: red">मुख्यालय द्वारा कल्याणकारी योजनाओं से सम्बन्धित आवेदन फ़ार्म पोर्टल पर या नजदीक के सी0एस0सी0 केन्द्रों पर जाकर अपना यूनिक पंजीकरण नम्बर प्राप्त करें। (download application form)</a></marquee>
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
                        <a href="assets/form.pdf" target="_blank">
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
                        <a href="#" target="_blank">
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
                        <a href="#"
                            style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn btn-warning btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-person"></i> Apply Membership
                        </a>
                        <a href="{{ route('login') }}"
                            style="background-color:#ffd8b1; border-color:#ffd8b1;"
                            class="btn login-btn btn-block btn-flat p-2 mt-3 text-left">
                            <i class="bi bi-person"></i> Membership Login
                        </a>
                        <a href="{{ route('login') }}"
                            style="background-color:#ffd8b1; border-color:#ffd8b1;"
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
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                        not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-item two">
                    <i class="flaticon-donation"></i>
                    <h3>
                        <a href="#">Donate now</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                        not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-item three">
                    <i class="flaticon-love"></i>
                    <h3>
                        <a href="#">Show your love</a>
                    </h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply rom text. Contrary to popular belief is
                        not simply.</p>
                    <a class="feature-btn" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Feature ===-->

<!-- Donation -->
<section class="donations-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Causes to care</span>
            <h2>Be the reason of someone smiles</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p>
        </div>
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation1.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Medical</a>
                            <h3>
                                <a href="donation-details.html">Need help for treatment</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill1 wow fadeInLeftBig">
                                    <span class="skill-count1">85%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,500.00</li>
                                <li>Goal: $7,000.00</li>
                            </ul>
                            <h4>Donated by <span>60 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation2.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Education</a>
                            <h3>
                                <a href="donation-details.html">Education for poor children</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill2 wow fadeInLeftBig">
                                    <span class="skill-count2">95%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $6,500.00</li>
                                <li>Goal: $8,050.00</li>
                            </ul>
                            <h4>Donated by <span>50 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation3.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Family</a>
                            <h3>
                                <a href="donation-details.html">Financial help for poor</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill3 wow fadeInLeftBig">
                                    <span class="skill-count3">90%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,540.00</li>
                                <li>Goal: $6,055.00</li>
                            </ul>
                            <h4>Donated by <span>40 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation4.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Funding</a>
                            <h3>
                                <a href="donation-details.html">Funding for family</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill4 wow fadeInLeftBig">
                                    <span class="skill-count4">80%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,56.00</li>
                                <li>Goal: $6,85.00</li>
                            </ul>
                            <h4>Donated by <span>30 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation5.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Relief</a>
                            <h3>
                                <a href="donation-details.html">Relief for cyclone-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill5 wow fadeInLeftBig">
                                    <span class="skill-count5">75%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,5.00</li>
                                <li>Goal: $3,85.00</li>
                            </ul>
                            <h4>Donated by <span>20 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="assets/img/donation/donation6.jpg" alt="Donation">
                        <a class="common-btn" href="donation-details.html">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="#">#Drought</a>
                            <h3>
                                <a href="donation-details.html">Relief for drought-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and
                                individual citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill6 wow fadeInLeftBig">
                                    <span class="skill-count6">70%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $9,5.00</li>
                                <li>Goal: $3,84.00</li>
                            </ul>
                            <h4>Donated by <span>10 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Donation -->

<!-- Work -->
<section class="work-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="work-content">
                    <div class="section-title">
                        <span class="sub-title">How we work</span>
                        <h2>We exist for non-profits, social enterprises, community groups</h2>
                    </div>
                    <ul>
                        <li>
                            <h3><span>01</span>Raise money from different sources</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                animi temporibus iusto at dolorum</p>
                        </li>
                        <li>
                            <h3><span>02</span>Giving relief in rural area all over the world</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                animi temporibus iusto at dolorum</p>
                        </li>
                        <li>
                            <h3><span>03</span>Gather all the money and giving relief in need</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                animi temporibus iusto at dolorum</p>
                        </li>
                        <li>
                            <h3><span>04</span>Go to the country that really needs help</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
                                animi temporibus iusto at dolorum</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="work-img">
                    <img src="assets/img/work/work1.jpg" alt="Work">
                    <img src="assets/img/work/work2.jpg" alt="Work">
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
                    <h3>Build home</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
                        magnam earum</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item two">
                    <i class="flaticon-hospital"></i>
                    <h3>Medical facilities</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
                        magnam earum</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item three">
                    <i class="flaticon-fast-food"></i>
                    <h3>Food & water</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
                        magnam earum</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item four">
                    <i class="flaticon-graduation-cap"></i>
                    <h3>Education facilities</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
                        magnam earum</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Benefit -->

<!-- Events -->
<section class="event-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our events</span>
            <h2>Upcoming events near you</h2>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event1.jpg" alt="Event">
                    <div class="inner">
                        <h4>04 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Fundraising for MQ</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>2.00pm - 5.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Australia</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event2.jpg" alt="Event">
                    <div class="inner">
                        <h4>05 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Shout about it with us</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>1.00pm - 2.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Canada</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event3.jpg" alt="Event">
                    <div class="inner">
                        <h4>10 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Relief giving - Providing relief</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.00pm - 4.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>USA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="event-item-right">
                    <h4>06 <span>Jan</span></h4>
                    <h3>
                        <a href="event-details.html">Challenge is right for you</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>10.00am - 11.00am</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>UK</span>
                        </li>
                    </ul>
                </div>

                <div class="event-item-right">
                    <h4>07 <span>Jan</span></h4>
                    <h3>
                        <a href="event-details.html">Fundraising is going</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>11.00am - 12.00pm</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>France</span>
                        </li>
                    </ul>
                </div>

                <div class="event-item-right">
                    <h4>08 <span>Jan</span></h4>
                    <h3>
                        <a href="event-details.html">Bowling for a cause</a>
                    </h3>
                    <ul>
                        <li>
                            <i class="icofont-stopwatch"></i>
                            <span>1.00pm - 1.30pm</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <span>Spain</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Events -->

<!-- Gallery -->
<section class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our gallery</span>
            <h2>Discover the best things we do</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p>
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
                    <a href="assets/img/gallery/gallery3.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery3.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery4.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery4.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery5.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery5.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery6.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery6.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Gallery -->

<!--=== Blog ===-->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Latest news & blog</span>
            <h2>Latest charity blog</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog1.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>21 Jan, 2024</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Donate for nutration less poor people</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus
                            dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog2.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>22 Jan, 2024</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Charity meetup in Berline next year</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus
                            dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="blog-item">
                    <div class="top">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog3.jpg" alt="Blog">
                        </a>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                <span>23 Jan, 2024</span>
                            </li>
                            <li>
                                <i class="icofont-user-alt-3"></i>
                                <span>By:</span>
                                <a href="#">Admin</a>
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Donate for the poor people to help them</a>
                        </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus
                            dolor laudantium distinction</p>
                        <a class="blog-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog ===-->

@endsection
