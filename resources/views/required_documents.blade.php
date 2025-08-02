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
                        <span class="sub-title">{{ $page_title }}</span>
                        <h3>Most Important Documents</h3>
                    </div>

                    <style>
                        .li-rr {
                            font-size: 20px;
                        }
                     </style>
                    <ul>
                        <li class="li-rr">Qualification Certificate</li>
                        <li class="li-rr">Aadhar Card</li>
                        <li class="li-rr">Pan Card</li>
                        <li class="li-rr">Domicile Certificate</li>
                        <li class="li-rr">Caste Certificate (Reservations)</li>
                        <li class="li-rr">Passport size Photograph</li>
                        <li class="li-rr">Experience Cerificate</li>
                        <li class="li-rr">Signature</li>
                    </ul>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- End About -->





@endsection
