@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Members</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Members</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Members List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Referby</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        {{-- <th>Address</th> --}}
                                        <th>Password</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $index => $mem)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <div style="display: inline-block; text-align: center;">
                                                <small style="display: block; font-size: 10px;font-weight:800;">
                                                    {{ $mem->referMember->tag_id }}</small>
                                                {{ $mem->referMember->name }}
                                            </div>
                                        </td>

                                        <td>{{ $mem->name }}</td>
                                        <td>{{ $mem->email }}</td>
                                        <td>{{ $mem->phone }}</td>
                                        {{-- <td>{{ $mem->address }}</td> --}}

                                        {{-- Decode base64 password from in_hash --}}
                                        <td>
                                            @php
                                            $decodedPassword = base64_decode($mem->in_hash);
                                            @endphp
                                            {{ $decodedPassword }}
                                        </td>

                                        {{-- Verify status badge --}}
                                        <td>
                                            @if($mem->payment_status == "completed")
                                            <span class="badge bg-success">Completed</span>
                                            @elseif($mem->payment_status == "review")
                                            <span class="badge bg-warning">Review</span>

                                            @elseif($mem->payment_status == "pending")
                                            <span class="badge bg-info">Review</span>

                                            @else
                                            <span class="badge bg-danger">Failed</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('super.members.view',$mem->tag_id) }}"
                                                class="btn btn-sm btn-primary">View</a>

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
