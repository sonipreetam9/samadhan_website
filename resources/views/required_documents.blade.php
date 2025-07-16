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
                        <h2>Most Important Documents</h2>
                    </div>


                  <ul><li>Aadhar Card</li><li>Domicile Certificate</li><li>Caste Certificate (Reservations)</li><li>Signature</li><li>Passport size Photograph</li><li>Experience Cerificate</li><li>Qualification Certificate</li></ul>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- End About -->





@endsection
