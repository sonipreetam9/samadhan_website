@extends('software.layouts.header')
@section('software')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Already Applyed</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">>Already Applyed</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">Already Applyed Vacancy List</h5>
                    </div>
                    <div class="p-2">

                        @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                        @endif
                        @if(Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        @endif
                    </div>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr_No</th>
                                        <th>Advt_No.</th>
                                        <th>Post</th>
                                        <th>Pay_Scale</th>
                                        <th>Age</th>
                                        <th>Total_Post</th>
                                        <th>Qualification</th>
                                        <th>Category</th>
                                        <th>Fee (GEN)</th>
                                        <th>Fee (OTH)</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applyed_jobs as $index => $applyed)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $applyed->vacancy->advertisement->advt_number ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->post ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->salary_range ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->age_limit ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->total_post ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->qualifications ?? 'N/A' }}</td>
                                        <td>{{ $applyed->vacancy->category ?? 'N/A' }}</td>
                                        <td>₹{{ $applyed->vacancy->application_fee_gen ?? '0' }}</td>
                                        <td>₹{{ $applyed->vacancy->application_fee_oth ?? '0' }}</td>

                                        <td>
                                            @if(optional($applyed->vacancy)->status == 1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($applyed->payment_status =="completed")
                                            <a href="{{ route('user.print.form',['applyed_id' => $applyed->id, 'vacancy_id' => $applyed->vacancy->vacancy_number]) }}"
                                                class="btn btn-sm btn-primary" target="_blank">Print PDF</a>
                                            @else
                                            <span class="text-danger">Payment Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="14" class="text-center text-danger fw-bold">आपने अभी तक किसी भी
                                            नौकरी के लिए आवेदन नहीं किया है।</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
