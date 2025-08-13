@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">User Applyed Job</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Applyed Job</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="text-end mb-3 noprint">
                <button onclick="window.print()" class="btn btn-primary">
                    <i class="ri-printer-line"></i> Print
                </button>
            </div>

            {{-- Candidate Details --}}
            <div class="card shadow mb-4">
                <div class="card-header bg-primary ">
                    <h5 class="mb-0 text-white">Candidate Application Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if($job->vacancy_id) <div class="col-md-6 mb-2"><strong>Vacancy ID:</strong> {{
                            $job->vacancy_id }}</div> @endif
                        @if($job->advertisement_no) <div class="col-md-6 mb-2"><strong>Advt Number:</strong> {{
                            $job->advertisement_no }}</div> @endif
                        @if($job->category_no) <div class="col-md-6 mb-2"><strong>Category No:</strong> {{
                            $job->category_no }}</div> @endif
                        @if($job->post_name) <div class="col-md-6 mb-2"><strong>Post Name:</strong> {{ $job->post_name
                            }}</div> @endif
                        @if($job->candidate_name) <div class="col-md-6 mb-2"><strong>Candidate Name:</strong> {{
                            $job->candidate_name }}</div> @endif
                        @if($job->father_name) <div class="col-md-6 mb-2"><strong>Father Name:</strong> {{
                            $job->father_name }}</div> @endif
                        @if($job->dob_day) <div class="col-md-6 mb-2"><strong>DOB:</strong> {{ $job->dob_day }}-{{
                            $job->dob_month }}-{{ $job->dob_year }}</div> @endif
                        @if($job->sex) <div class="col-md-6 mb-2"><strong>Gender:</strong> {{ $job->sex }}</div> @endif
                        @if($job->category) <div class="col-md-6 mb-2"><strong>Category:</strong> {{ $job->category }}
                        </div> @endif
                        @if($job->domicile) <div class="col-md-6 mb-2"><strong>Domicile:</strong> {{ $job->domicile }}
                        </div> @endif
                        @if($job->nationality) <div class="col-md-6 mb-2"><strong>Nationality:</strong> {{
                            $job->nationality }}</div> @endif
                        @if($job->address) <div class="col-md-6 mb-2"><strong>Address:</strong> {{ $job->address }}
                        </div> @endif
                        @if($job->pincode) <div class="col-md-6 mb-2"><strong>Pincode:</strong> {{ $job->pincode }}
                        </div> @endif
                        @if($job->other_qualification) <div class="col-md-6 mb-2"><strong>Other Qualification:</strong>
                            {{ $job->other_qualification }}</div> @endif
                        @if($job->exp_years || $job->exp_months || $job->exp_days)
                        <div class="col-md-6 mb-2"><strong>Experience:</strong> {{ $job->exp_years }} Years {{
                            $job->exp_months }} Months {{ $job->exp_days }} Days</div>
                        @endif
                        @if($job->visible_mark) <div class="col-md-6 mb-2"><strong>Visible Mark:</strong> {{
                            $job->visible_mark }}</div> @endif

                        @if($job->place) <div class="col-md-6 mb-2"><strong>Place:</strong> {{ $job->place }}</div>
                        @endif
                        @if($job->form_date) <div class="col-md-6 mb-2"><strong>Form Date:</strong> {{ $job->form_date
                            }}</div> @endif
                        @if($job->domicial_yes_no) <div class="col-md-6 mb-2"><strong>Domicile Yes/No:</strong> {{
                            $job->domicial_yes_no }}</div> @endif
                        @if($job->phc_type) <div class="col-md-6 mb-2"><strong>PHC Type:</strong> {{ $job->phc_type }}
                        </div> @endif
                        @if($job->fees) <div class="col-md-6 mb-2"><strong>Fees:</strong> ₹ {{ $job->fees }}/-</div>
                        @endif
                        @if($job->payment_status)
                        <div class="col-md-6 mb-2"><strong>Payment Status:</strong>
                            @if($job->payment_status == 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($job->payment_status == 'completed')
                            <span class="badge bg-success">Paid</span>
                            @else
                            <span class="badge bg-secondary">Review</span>
                            @endif
                        </div>
                        @endif



                        @if($job->payment_utr) <div class="col-md-6 mb-2 "><strong>Payment UTR:</strong> {{
                            $job->payment_utr }}</div> @endif


                        <div class="col-md-12 mt-4 mb-4"></div>



                        @php
    function showDocument($label, $file) {
        if(empty($file)) return;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        echo '<div class="col-md-3 col-sm-6">
                <div class="doc-card text-center border rounded p-2 h-100">
                    <p class="fw-bold text-primary mb-1">'.e($label).'</p>';
        if($ext === 'pdf') {
            echo '<a href="'.asset($file).'" target="_blank" class="btn btn-sm btn-danger">Preview PDF</a>';
        } else {
            echo '<a href="'.asset($file).'" target="_blank"><img src="'.asset($file).'" class="img-fluid doc-thumb" alt="'.$label.'"></a>';
        }
        echo '</div></div>';
    }
@endphp

{{-- Usage --}}
{{ showDocument('Passport Image', $job->passport_image) }}
{{ showDocument('Signature', $job->sign) }}
{{ showDocument('Domicile', $job->domicial_yes_no == 'Yes' ? $job->domicial : '') }}
{{ showDocument('Aadhar Front', $job->aadhar_card_front) }}
{{ showDocument('Aadhar Back', $job->aadhar_card_back) }}
{{ showDocument('PAN Card', $job->pan_card) }}
{{ showDocument('Caste Certificate', $job->caste) }}
{{ showDocument('Other 1', $job->eligibility_1) }}
{{ showDocument('Other 2', $job->eligibility_2) }}






                        {{-- Small CSS for hover effect --}}
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

                            .doc-card {
                                background: #f8f9fa;
                            }
                        </style>

                    </div>
                </div>
            </div>

            {{-- Uploaded Documents --}}
            <div class="card shadow mb-4">
                <div class="card-header bg-dark">
                    <h5 class="mb-0  text-white">Uploaded Documents</h5>
                </div>
                <div class="card-body">
                    @if($job_docs->count() > 0)
                    <div class="row">
                        @foreach($job_docs as $doc)
                        <div class="col-md-6 mb-4">
                            <div class="border p-2 rounded">
                                @if($doc->education_name) <p class="mb-1"><strong>Education:</strong> {{
                                    $doc->education_name }}</p> @endif
                                @if($doc->year) <p class="mb-1"><strong>Year:</strong> {{ $doc->year }}</p> @endif
                                @if($doc->marks) <p class="mb-1"><strong>Marks:</strong> {{ $doc->marks }}</p> @endif
                                @if($doc->total) <p class="mb-1"><strong>Total:</strong> {{ $doc->total }}</p> @endif
                                @if($doc->percent) <p class="mb-1"><strong>Percent:</strong> {{ $doc->percent }}%</p>
                                @endif
                                @if($doc->division) <p class="mb-1"><strong>Division:</strong> {{ $doc->division }}</p>
                                @endif
                                @if($doc->board) <p class="mb-1"><strong>Board:</strong> {{ $doc->board }}</p> @endif
                                @if($doc->subjects) <p class="mb-1"><strong>Subjects:</strong> {{ $doc->subjects }}</p>
                                @endif

                                @if($doc->file_link)
                                @php
                                $ext = strtolower(pathinfo($doc->file_link, PATHINFO_EXTENSION));
                                @endphp
                                @if(in_array($ext , ['jpg','jpeg','png','gif','webp']))
                                <a href="{{ asset($doc->file_link) }}" target="_blank">
                                    <img src="{{ asset($doc->file_link) }}" alt="Document"
                                        class="img-fluid rounded border" style="max-height:150px;">
                                </a>
                                @elseif($ext == 'pdf')
                                <a href="{{ asset($doc->file_link) }}" target="_blank"
                                    class="btn btn-sm btn-outline-primary mt-2">
                                    <i class="ri-file-pdf-line"></i> View PDF
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-muted">No documents uploaded.</p>
                    @endif
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
