@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')
<!-- End Page Title -->
<section class="team-area ptb-100">
    <div class="container">
        <div class="row">

            @foreach ($members as $mem)
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset($mem->image) }}" height="500" style="object-fit: cover;" alt="Team">

                    </div>
                    <div class="bottom">
                        <h2>{{ $mem->name }}</h2>
                        <span style="font-size: 22px; color:green;font-weight:800;">{{ $mem->post }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
