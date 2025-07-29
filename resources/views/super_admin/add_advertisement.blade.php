@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Advertisement</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Advertisement</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex bg-primary">
                        <h4 class="card-title mb-0 flex-grow-1 text-white">Advertisement Number (This Month)</h4>

                    </div><!-- end card header -->
                    <form action="{{ route('super.add.advertisement.post') }}" method="POST">
                        @csrf

                        @if(Session::has('success'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-success">{{ Session::get('success') }} !
                            </p>
                        </div>
                        @endif
                        @if(Session::has('error'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-danger">{{ Session::get('error') }} !
                            </p>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">

                                    {{-- Post Name --}}
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="add_number" name="post"
                                            placeholder="Number" value="" required>
                                        @error('post') <small class="text-danger">{{ $message }}</small> @enderror

                                    </div>

                                    <div class="col-md-4 mt-4 text-center">
                                        <button type="submit" class="btn btn-success w-100">Submit </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="card-title mb-0 text-white">All Advertisement List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Advertisement_Number</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $index => $ad)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $ad->advt_number }}</td>
                                        <td>{{ \Carbon\Carbon::parse($ad->created_at)->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">View</a>
                                            <a href="" class="btn btn-sm btn-danger"
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    $(document).ready(function () {
        // Get current date
        var today = new Date();
        var month = (today.getMonth() + 1).toString().padStart(2, '0'); // Get month in 2-digit format
        var year = today.getFullYear().toString().slice(-2); // Get last 2 digits of year

        // Format value as MM/YY
        var formattedDate = month + '/' + year;

        // Set value in input field
        $('#add_number').val(formattedDate);
    });
</script> --}}


@endsection
