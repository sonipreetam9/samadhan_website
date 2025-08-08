@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')



<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="text-center text-primary mb-4 fw-bold">Pay Membership Fee</h3>

                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/sacnner.jpg') }}" alt="QR Scanner"
                            class="img-fluid rounded shadow" style="max-width: 300px;">
                        <h5 class="text-success mt-3 fw-semibold">Scan & Pay ₹1100/-</h5>
                    </div>

                    <form action="{{ route('pay.payment.membership.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tag_id" value="{{ $application->tag_id }}">
                        <div class="mb-3">
                            <label for="utr" class="form-label fw-semibold">UTR / Transaction Number</label>
                            <input type="text" name="utr" id="utr" class="form-control"
                                placeholder="Enter UTR/Txn Number" required>
                        </div>

                        <div class="mb-4">
                            <label for="screenshot" class="form-label fw-semibold">Upload Payment Screenshot</label>
                            <input type="file" name="screenshot" id="screenshot" class="form-control" required
                                accept=".jpeg,.png,.jpg,.gif">
                            <small class="text-muted">Accepted formats: JPG, PNG, GIF (Max 2MB)</small>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-2 fw-semibold">
                            Submit Payment Details
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
