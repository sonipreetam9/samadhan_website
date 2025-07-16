@extends('layouts.header')
@section('content')
@include('layouts.breadcrumb')



<!-- About -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="About" width="200">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">{{ $page_title }}</span>
                        <h2>{{ $web_name }}</h2>
                    </div>
                    <span class="about-span">Shagun Gramin Health and Family Welfare Council is a Non-profit organization specializing in to
                        carry on the activities to develop, Establish, promote, facilitate, promotion, improvement of
                        educational, social, cultural, economic and medical relief to the poor and downtrodden and
                        advancement of any other charitable and developmental objects of general public utility and
                        community welfare as well as social work for gramin welfare promote commerce, art, science,
                        sports, education. reserach, social, welfare, religion, charity, protection of environment or
                        any such other object.</span>





                    <p>
                        The Foundation also have the agenda to educate the poor girl child and give facilities like
                        arrangement of marriage ceremony, kanyadan etc. Gramin Social Welfare Programme goals to train
                        most women living in rural areas to become enterpreneurs by training them in domestic Industry
                        If women are unable to tun their own industry due to lack of money, then we cooperate fully in
                        giving them the benefits of government like udyog loan etc.<br>

                        "Shagun Gramin Health and Family Welfare Council" in the year 2022 with the objective to make
                        consistent efforts towards ensuring quality Skill Development and health services especially to
                        the por and marginalized community of rural areas. Institute is dedicated to Skill Development
                        also focuses on Agricultural engineering.</p>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End About -->





@endsection
