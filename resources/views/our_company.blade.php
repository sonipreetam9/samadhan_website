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
                    <span class="about-span">Our Values are the base and foundation of our brand where we stand and help
                        communities to grow and thrive. We focus to deliver best values to our customers with full
                        application of our expertise and skills and support from our partners.</span>





                    <p><b>G</b><span>rowth- Be centric towards people and community
                            growth.</span><br><b>R</b><span>espect-Be respectful towards all the people we work with and
                            work for.</span><br><b>A</b><span>nalytical-Process and execute our work by involving the
                            careful and systematic study of something.</span><br><b>M</b><span>eaningful-Creating a
                            world that has deep significance</span><br><b>I</b><span>nnovation-Be uncompromising
                            Creative, straightforward and transparent</span><br><b>N</b><span>urturing-Provide an
                            environment for our people with physical and emotional nourishment.</span></p>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End About -->





@endsection
