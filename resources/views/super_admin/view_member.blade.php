@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">

        {{-- Title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Member Details</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Member Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Print Button --}}
        <div class="text-end mb-3 noprint">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="ri-printer-line"></i> Print
            </button>
        </div>

        {{-- Member Info --}}
        <div class="card shadow mb-4">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Member Application Details</h5>
            </div>
            <div class="card-body">
                <div class="row">

                    {{-- Profile --}}
                    <div class="col-md-3 text-center mb-3">
                        <img src="{{ asset($member->image) }}" alt="Member Image" class="img-fluid rounded border"
                            style="max-height:180px;">
                        <h3 class="fw-bold mt-2">{{ $member->name }}</h3>
                        <small><b class="font-weight:900;">Application ID:</b> {{ $member->tag_id }}</small>
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-2"><strong>Refer By:</strong>
                                @if($member->referMember)
                                {{ $member->referMember->name }}
                                <sup><small>{{ $member->referMember->tag_id }}</small></sup>
                                @else
                                -
                                @endif
                            </div>
                            <div class="col-md-6 mb-2"><strong>Email:</strong> {{ $member->email }}</div>
                            <div class="col-md-6 mb-2"><strong>Phone:</strong> {{ $member->phone }}</div>
                            <div class="col-md-6 mb-2"><strong>Father Name:</strong> {{ $member->father_name }}</div>
                            <div class="col-md-6 mb-2"><strong>Gender:</strong> {{ $member->sex }}</div>
                            <div class="col-md-6 mb-2"><strong>Caste:</strong> {{ $member->caste }}</div>
                            <div class="col-md-6 mb-2"><strong>DOB:</strong> {{ $member->dob ? \Carbon\Carbon::parse($member->dob)->format('d-m-Y') : '' }}</div>
                            <div class="col-md-6 mb-2"><strong>Marital Status:</strong> {{ $member->married_status }}
                            </div>
                            <div class="col-md-6 mb-2"><strong>Address:</strong> {{ $member->address }}</div>
                            <div class="col-md-6 mb-2"><strong>Place:</strong> {{ $member->place }}</div>
                            <div class="col-md-6 mb-2"><strong>Study:</strong> {{ $member->study }}</div>
                        </div>
                    </div>

                    {{-- Bank Details --}}
                    <div class="col-md-12 mt-4">
                        <h6 class="text-primary">Bank Details</h6>
                        <div class="row">
                            <div class="col-md-3 mb-2"><strong>Holder Name:</strong> {{ $member->bank_holder_name }}
                            </div>
                            <div class="col-md-3 mb-2"><strong>Bank:</strong> {{ $member->bank_name }}</div>
                            <div class="col-md-3 mb-2"><strong>Account No:</strong> {{ $member->bank_account_number }}
                            </div>
                            <div class="col-md-3 mb-2"><strong>IFSC:</strong> {{ $member->bank_ifsc_code }}</div>


                            <div class="col-md-3 mb-2"><strong>Payment Status:</strong>
                                @if($member->payment_status == "completed")
                                <span class="badge bg-success">Completed</span>
                                @elseif($member->payment_status == "review")
                                <span class="badge bg-warning">Review</span>

                                @elseif($member->payment_status == "pending")
                                <span class="badge bg-info">Review</span>

                                @else
                                <span class="badge bg-danger">Failed</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Payment --}}
                    {{-- <div class="col-md-12 mt-4">
                        <h6 class="text-primary">Payment Details</h6>
                        <div class="row">
                            <div class="col-md-3 mb-2"><strong>UTR:</strong> {{ $member->payment_utr }}</div>

                            <div class="col-md-6 mb-2">
                                <strong>Proof:</strong><br>
                                @if($member->payment_proof)
                                <a href="{{ asset($member->payment_proof) }}" target="_blank">
                                    <img src="{{ asset($member->payment_proof) }}" class="img-fluid border rounded"
                                        style="max-height:300px;">
                                </a>
                                @endif
                            </div>
                        </div>
                    </div> --}}

                    {{-- Documents --}}
                    <div class="col-md-12 mt-4">
                        <h6 class="text-primary">Documents</h6>
                        <div class="row">

                            {{-- Aadhar --}}
                            @if($member->aadhhar_link && $member->aadhar_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Aadhar</p>
                                <a href="{{ asset($member->aadhhar_link) }}" target="_blank">
                                    <img src="{{ asset($member->aadhhar_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Birth Certificate --}}
                            @if($member->birth_link && $member->birth_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Birth Certificate</p>
                                <a href="{{ asset($member->birth_link) }}" target="_blank">
                                    <img src="{{ asset($member->birth_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Ration Card --}}
                            @if($member->rashon_card_link && $member->rashon_card_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Ration Card</p>
                                <a href="{{ asset($member->rashon_card_link) }}" target="_blank">
                                    <img src="{{ asset($member->rashon_card_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Voter Card --}}
                            @if($member->voter_card_link && $member->voter_card__yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Voter Card</p>
                                <a href="{{ asset($member->voter_card_link) }}" target="_blank">
                                    <img src="{{ asset($member->voter_card_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Driving License --}}
                            @if($member->dl_link && $member->dl_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Driving License</p>
                                <a href="{{ asset($member->dl_link) }}" target="_blank">
                                    <img src="{{ asset($member->dl_link) }}" class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- PAN Card --}}
                            @if($member->pan_card_link && $member->pan_card_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">PAN Card</p>
                                <a href="{{ asset($member->pan_card_link) }}" target="_blank">
                                    <img src="{{ asset($member->pan_card_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- School Certificate --}}
                            @if($member->school_link && $member->school_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">School Certificate</p>
                                <a href="{{ asset($member->school_link) }}" target="_blank">
                                    <img src="{{ asset($member->school_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Passport --}}
                            @if($member->passport_link && $member->passport_yes_no == 'yes')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Passport</p>
                                <a href="{{ asset($member->passport_link) }}" target="_blank">
                                    <img src="{{ asset($member->passport_link) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                            {{-- Family Proof --}}
                            @if($member->family_yes_no == 'yes' && $member->family_name != 'No')
                            <div class="col-md-3 mb-3">
                                <p class="fw-bold">Family Proof</p>
                                <a href="{{ asset($member->family_name) }}" target="_blank">
                                    <img src="{{ asset($member->family_name) }}"
                                        class="img-fluid border rounded doc-thumb">
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>

                    <style>
                        .doc-thumb {
                            max-height: 150px;
                            object-fit: cover;
                            transition: transform 0.2s ease-in-out;
                            border: 1px solid #ddd;
                            padding: 3px;
                            background: #fff;
                        }

                        .doc-thumb:hover {
                            transform: scale(1.05);
                            border-color: #0d6efd;
                        }
                    </style>


                </div>
            </div>
        </div>

        {{-- Family Details --}}
        <div class="card shadow mb-4">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Family Details</h5>
            </div>
            <div class="card-body">
                @if($familyMembers->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Relation</th>
                                <th>Age</th>
                                <th>Aadhar</th>
                                <th>Study Level</th>
                                <th>School Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($familyMembers as $fam)
                            <tr>
                                <td>{{ $fam->name }}</td>
                                <td>{{ $fam->realtion }}</td>
                                <td>{{ $fam->age }}</td>
                                <td>{{ $fam->aadhhar_card_number }}</td>
                                <td>{{ $fam->study_level }}</td>
                                <td>{{ $fam->school_name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">No family details available.</p>
                @endif
            </div>
        </div>

        {{-- Nominee Details --}}
        <div class="card shadow mb-4">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Nominee Details</h5>
            </div>
            <div class="card-body">
                @if($familyNominess->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Relation</th>
                                <th>Age</th>
                                <th>Amount (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($familyNominess as $nominee)
                            <tr>
                                <td>{{ $nominee->name }}</td>
                                <td>{{ $nominee->nominee_relation }}</td>
                                <td>{{ $nominee->nominee_age }}</td>
                                <td>{{ $nominee->nominee_amount }} %</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">No nominee details available.</p>
                @endif
            </div>
        </div>

    </div>
</div>

@endsection
