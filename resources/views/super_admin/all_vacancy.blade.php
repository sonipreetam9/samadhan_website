@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Vacancy</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Vacancy</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Vacancy List</h5>
                    </div>
                    @if (session('success'))
                    <div class="p-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Advt No.</th>
                                        <th>Post</th>
                                        <th>Pay Scale</th>
                                        <th>Age</th>
                                        <th>Total Post</th>
                                        <th>Qualification</th>
                                        <th>Category</th>
                                        <th>Fee (GEN)</th>
                                        <th>Fee (OTH)</th>
                                        <th>Post Date</th>
                                        <th>Last Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacancies as $index => $vacancy)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $vacancy->advertisement->advt_number ?? "NULL" }}</td>
                                        <td>{{ $vacancy->post }}</td>
                                        <td>{{ $vacancy->salary_range }}</td>
                                        <td>{{ $vacancy->age_limit }}</td>
                                        <td>{{ $vacancy->total_post }}</td>
                                        <td>{{ $vacancy->qualifications }}</td>
                                        <td>{{ $vacancy->category }}</td>
                                        <td>₹{{ $vacancy->application_fee_gen }}</td>
                                        <td>₹{{ $vacancy->application_fee_oth }}</td>
                                        <td>{{ \Carbon\Carbon::parse($vacancy->post_date)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($vacancy->last_date)->format('d-m-Y') }}</td>
                                        <td>
                                            @if($vacancy->status == 1)
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ asset('uploads/'.$vacancy->file) }}"
                                                class="btn btn-sm btn-success">View</a>
                                            <a href="{{ route('super.vacancy.delete',['id'=>$vacancy->id]) }}"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>

                                    @endforeach
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
