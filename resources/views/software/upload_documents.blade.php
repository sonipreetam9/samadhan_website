@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Apply Job</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Apply Job</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <h4 class="mb-0 flex-grow-1 text-white">Vacancy Details</h4>
                    </div>

                      @if(Session::has('success'))
                    <div class="p-3">
                                                <p class="alert alert-success mt-2">{{ Session::get('success') }}</p>


                    </div>
@endif
                      @if(Session::has('error-al'))
                    <div class="p-3">
                                                <p class="alert alert-danger mt-2">{{ Session::get('error-al') }}</p>


                    </div>
@endif


                    <div class="card-body">
                        <div class="row gy-3">
                            @php $vac = $vacancy; @endphp

                            <div class="col-6 col-md-3">
                                <strong>Advertisement ID</strong>
                                <div>{{ $vac->advertisement->advt_number ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Vacancy Number</strong>
                                <div>{{ $vac->vacancy_number ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Post Name</strong>
                                <div>{{ $vac->post ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Post Date</strong>
                                <div>{{ \Carbon\Carbon::parse($vac->post_date)->format('d M Y') }}</div>
                            </div>



                            <div class="col-6 col-md-3">
                                <strong>Category</strong>
                                <div>{{ $vac->category ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Application Fee (GEN)</strong>
                                <div>₹{{ $vac->application_fee_gen ?? '0' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Application Fee (OBC/SC/ST)</strong>
                                <div>₹{{ $vac->application_fee_oth ?? '0' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Total Posts</strong>
                                <div>{{ $vac->total_post ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Location</strong>
                                <div>{{ $vac->location ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Salary Range</strong>
                                <div>{{ $vac->salary_range ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3">
                                <strong>Status</strong>
                                <div>
                                    @if($vac->status == 1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-6">
                                <strong>Qualifications</strong>
                                <div>{{ $vac->qualifications ?? '-' }}</div>
                            </div>

                            <div class="col-6">
                                <strong>Description</strong>
                                <div>{{ $vac->description ?? '-' }}</div>
                            </div>

                            @if($vac->file)
                            <div class="col-12">
                                <strong>Attached File</strong><br>
                                <a href="{{ asset('uploads/'.$vac->file) }}" target="_blank"
                                    class="btn btn-sm btn-outline-info mt-1">
                                    View / Download File
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <h4 class="mb-0 flex-grow-1 text-white">Fill Details</h4>
                    </div>
                  <form method="POST" action="{{ route('user.apply.job.post') }}"
      enctype="multipart/form-data"
      id="candidateForm"
      class="card-body">



    @csrf

    <div class="row gy-2">

        {{-- Advt No / Category No / Post Name --}}
        <div class="col-12 col-md-3">
            <label>Advertisement No</label>
            <input type="text" name="advertisement_no" class="form-control"
                   value="{{ old('advertisement_no', $vac->advertisement->advt_number ?? '-') }}" readonly required>
            @error('advertisement_no')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    








        {{-- Submit --}}
        <div class="col-12 mt-3 text-center">
            <button type="submit" class="btn btn-success">Submit Application</button>
        </div>
    </div>
</form>





                </div>
            </div>
        </div>



    </div>
</div>



@endsection
