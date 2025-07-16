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
                    <span class="about-span">Our mission is to serve individuals and families in the poorest communities
                        in the Drawing strength from our global diversity, resources and experience, we promote
                        innovative solutions and are advocates for global responsibility.
                    </span>
                    <p>We promote lasting change by:<br>
                        Strengthening capacity for self-help.<br>
                        Providing economic opportunity.<br>
                        Delivering relief in emergencies.<br>
                        Influencing policy decisions at all levels.<br>
                        Addressing discrimination in all its.</p>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End About -->





@endsection
