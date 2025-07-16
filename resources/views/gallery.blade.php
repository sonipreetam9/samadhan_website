@extends('layouts.header')
@section('content')


@include('layouts.breadcrumb')


<!-- Gallery -->
<div class="gallery-area ptb-100">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery1.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery1.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery2.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery2.jpg" alt="Gallery">
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
        <div class="pagination-area">
            <ul>
                <li>
                    <a href="#">Prev</a>
                </li>
                <li>
                    <a class="active" href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Gallery -->
@endsection
