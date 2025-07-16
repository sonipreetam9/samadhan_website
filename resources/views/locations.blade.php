@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')

<!-- About -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="section-title">
                        {{-- <span class="sub-title">{{ $page_title }}</span> --}}
                        <h2>{{ $page_title }}</h2>
                    </div>

                    <div class="col-md-12">
                        <div>
                            <ul class="location_list">

                                <li>Ambala</li>

                                <li>Bhiwani</li>

                                <li>Charkhi Dadri</li>

                                <li>Faridabad</li>

                                <li>Fatehabad</li>

                                <li>Gurugram</li>

                                <li>Hansi</li>

                                <li>Hisar</li>

                                <li>Jhajjar</li>

                                <li>Jind</li>

                                <li>Kaithal</li>

                                <li>Karnal</li>

                                <li>Kurukshetra</li>

                                <li>Mahendragarh</li>

                                <li>Mohali</li>

                                <li>Nuh</li>

                                <li>Palwal</li>

                                <li>Panchkula</li>

                                <li>Panipat</li>

                                <li>Rewari</li>

                                <li>Rohtak</li>

                                <li>Sirsa</li>

                                <li>Sonipat</li>

                                <li>Yamunanagar</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

@endsection
