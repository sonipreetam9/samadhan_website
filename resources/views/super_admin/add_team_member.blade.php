@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Team</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Team Members</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex bg-primary">
                        <h4 class="card-title mb-0 flex-grow-1 text-white">Add Team Members</h4>

                    </div><!-- end card header -->
                    <form action="{{ route('super.add.team.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(Session::has('success'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                        </div>
                        @endif

                        @if(Session::has('error'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">

                                    {{-- Name --}}
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>



                                    {{-- Post --}}
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="post" placeholder="Post Name"
                                            required>
                                        @error('post') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    {{-- Show on Website --}}
                                    <div class="col-md-6">
                                        <select class="form-control" name="show_website" required>
                                            <option value="">Show on Website?</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        @error('show_website') <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    {{-- Image --}}
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="image" required>
                                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <div class="col-md-12 text-center mt-3">
                                        <button type="submit" class="btn btn-success w-100">Submit</button>
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
                        <h5 class="card-title mb-0 text-white">All Member List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable"
                                class="table table-bordered table-hover table-striped align-middle w-100">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Reference_Number</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Post</th>
                                        <th>On_Website</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $index => $mem)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $mem->tag_id ?? 'N/A' }}</td>
                                        <td>{{ $mem->name }}</td>
                                        <td>
                                            @if($mem->image)
                                            <img src="{{ asset($mem->image) }}" width="50" height="50">
                                            @else
                                            N/A
                                            @endif
                                        </td>
                                        <td>{{ $mem->post }}</td>
                                         <td>
                                            <a href="{{ route('super.toggle.website', $mem->id) }}"
                                                class="btn btn-sm {{ $mem->show_website ? 'btn-success' : 'btn-danger' }}">
                                                {{ $mem->show_website ? 'Yes' : 'No' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('super.toggle.status', $mem->id) }}"
                                                class="btn btn-sm {{ $mem->status ? 'btn-success' : 'btn-warning' }}">
                                                {{ $mem->status ? 'Active' : 'Inactive' }}
                                            </a>
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
