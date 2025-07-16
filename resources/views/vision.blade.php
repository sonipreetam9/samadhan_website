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
                    <span class="about-span">Our Vision to seek a world of hope, tolerance and social justice, where poverty has been overcome and people live in dignity and security.
                    </span>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- End About -->





@endsection
