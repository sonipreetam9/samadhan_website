@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- User Details Card -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">User Details</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Phone:</strong> {{ Auth::user()->phone ?? 'N/A' }}</p>
                        <p><strong>Verify:</strong>
                            @if(Auth::user()->verify ==1)
                                <span class="badge bg-success">Verified</span>
                            @else
                                <span class="badge bg-danger">Not Verified</span>
                            @endif
                        </p>
                        <p><strong>Join Date:</strong> {{ Auth::user()->created_at->format('d-m-Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
