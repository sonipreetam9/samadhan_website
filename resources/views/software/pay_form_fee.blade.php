@extends('software.layouts.header')
@section('title', 'Apply Job - Upload Documents')

@section('software')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Pay Fees</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pay Fees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upload Documents Card -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <h4 class="mb-0 flex-grow-1 text-white">Pay Fees</h4>
                    </div>
                  <div class="container">
                    <div class="card-body">
                        <form action="{{ route('make.payment.post', ['applyed_id' => $applyed_id, 'vacancy_id' => $vacancy_id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-3 text-center">
                                    <img src="{{ asset('assets/img/sacnner.jpg') }}" alt="" width="300">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 text-center">
                                    <h2 class="text-success">Pay Fee ₹ {{ $applyed_job->fees }}</h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="utr" class="form-label">UTR Number</label>
                                        <input type="text" name="utr" id="utr" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="screenshot" class="form-label">Upload Payment Proof</label>
                                        <input type="file" name="screenshot" id="screenshot" class="form-control" required accept=".jpeg,.png,.jpg,.gif">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
