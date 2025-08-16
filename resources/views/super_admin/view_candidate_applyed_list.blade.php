@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">User Applyed Job List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Applyed Job List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            @if($applyed_jobs->count() > 0)
            @foreach ($applyed_jobs as $list)
            <div class="col-xl-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h6 class="card-title mb-0 text-white">
                            Post Name - {{ $list->post_name }}
                        </h6>
                    </div>

                    <div class="card-body text-center">



                        <div class="row text-start">
                            <div class="col-12 col-md-6 mb-2">
                                <p><strong>Advt Number:</strong> {{ $list->advertisement_no }}</p>
                                <p><strong>Category No:</strong> {{ $list->category_no }}</p>
                                <p class="mb-1"><strong>शुल्क (Fees):</strong>
                                    <span class="fw-bold text-success">₹ {{ $list->fees }}/-</span>
                                </p>
                            </div>

                            <div class="col-12 col-md-6">
                                <p><strong>Candidate Name:</strong> {{ $list->candidate_name }}</p>
                                <p><strong>Father Name:</strong> {{ $list->father_name }}</p>

                                <p class="mb-1"><strong>Phone :</strong>
                                    <span class="fw-bold text-success">{{ $user->phone }}</span>
                                </p>

                            </div>
                            <div class="col-12 col-md-12 mb-2 text-center">
                                <p style="font-size: 18px;"><strong>शुल्क स्थिति:</strong>
                                    @if($list->payment_status == 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($list->payment_status == 'completed')
                                    <span class="badge bg-success">Paid</span>
                                    @else
                                    <span class="badge bg-secondary">Review</span>
                                    @endif
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end gap-2">
                        <a href="{{ route('super.view.candidate.job',['jobId'=>$list->id]) }}" class="btn btn-success btn-md">
                            <i class="ri-file-line"></i> Documents

                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 text-center py-5">
                <h5 class="text-muted">कोई रिकॉर्ड नहीं मिला।</h5>
            </div>
            @endif


        </div>



    </div>
</div>

@endsection
