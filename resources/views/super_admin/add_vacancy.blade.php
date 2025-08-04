@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Vacancy</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Vacancy</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Enter Vacancy Deatils</h4>

                    </div><!-- end card header -->
                    <form action="{{ route('super.add.vacancy.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(Session::has('success'))
                        <div style="padding: 10px 15px 0px 15px;">
                            <p class="alert alert-success">{{ Session::get('success') }} !
                            </p>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">

                                    {{-- Advt Number --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-control" id="advt_number" name="advt_number" required>
                                                <option value="">-- Select Advt Number --</option>
                                                @foreach ($ads as $ad)
                                                <option value="{{ $ad->id }}" {{ old('advt_number')==$ad->
                                                    advt_number || (empty(old('advt_number')) && $loop->first) ?
                                                    'selected' : '' }}>
                                                    {{ $ad->advt_number }}
                                                </option>
                                                @endforeach

                                            </select>
                                            <small class="form-text text-muted">Select the job advertisement
                                                number.</small>
                                            @error('advt_number')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                            <label for="advt_number">Advertisement Number</label>
                                            <small class="form-text text-muted">Select the job advertisement
                                                number.</small>
                                            @error('advt_number')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- Post Name --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="post" name="post"
                                                placeholder="e.g. Web Developer" value="{{ old('post') }}" required>
                                            <label for="post">Post Name</label>
                                            <small class="form-text text-muted">Enter the job Title .</small>
                                            @error('post') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    {{-- Category --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="category" name="category"
                                                placeholder="e.g." value="{{ old('category') }}" required>
                                            <label for="category">Category</label>
                                            <small class="form-text text-muted">Like “A”, “B”, “C”, “D”
                                                .</small>
                                            @error('category') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Post Date --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="post_date" name="post_date"
                                                placeholder="Select post date" value="{{ old('post_date') }}" required>
                                            <label for="post_date">Post Date</label>
                                            <small class="form-text text-muted">The date when this vacancy will be
                                                posted.</small>
                                            @error('post_date') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Last Date --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="last_date" name="last_date"
                                                placeholder="Select last date" value="{{ old('last_date') }}" required>
                                            <label for="last_date">Last Date</label>
                                            <small class="form-text text-muted">The last date for applying to this
                                                vacancy.</small>
                                            @error('last_date') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Application Fee (General) --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="application_fee_gen"
                                                name="application_fee_gen" placeholder="e.g. 500"
                                                value="{{ old('application_fee_gen') }}" required>
                                            <label for="application_fee_gen">Application Fee (General)</label>
                                            <small class="form-text text-muted">Fee for general category applicants.
                                                Enter numbers only.</small>
                                            @error('application_fee_gen') <small class="text-danger">{{ $message
                                                }}</small> @enderror
                                        </div>
                                    </div>

                                    {{-- Application Fee (Other) --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="application_fee_oth"
                                                name="application_fee_oth" placeholder="e.g. 250"
                                                value="{{ old('application_fee_oth') }}" required>
                                            <label for="application_fee_oth">Application Fee (Other)</label>
                                            <small class="form-text text-muted">Fee for reserved category applicants.
                                                Enter numbers only.</small>
                                            @error('application_fee_oth') <small class="text-danger">{{ $message
                                                }}</small> @enderror
                                        </div>
                                    </div>

                                    {{-- Total Post --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="total_post" name="total_post"
                                                placeholder="Total Post" required>
                                            <label for="total_post">Total Post Count</label>
                                            <small class="form-text text-muted">Total post count in this
                                                Vacancy.</small>
                                            @error('total_post')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Qualifications --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="qualifications" name="qualifications"
                                                placeholder="Enter required education/skills"
                                                required>{{ old('qualifications') }}</textarea>
                                            <label for="qualifications">Qualifications</label>
                                            <small class="form-text text-muted">Mention minimum qualifications or
                                                experience required.</small>
                                            @error('qualifications') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="age_limit" name="age_limit"
                                                placeholder="Enter job responsibilities/details"
                                                required>{{ old('age_limit') }}</textarea>
                                            <label for="age_limit">Age Limit</label>
                                            {{-- <small class="form-text text-muted">Describe job duties, working hours, team
                                                info, etc.</small> --}}
                                            @error('age_limit') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="location" name="location"
                                                placeholder="e.g. New Delhi, Remote" value="Haryana"
                                                required>
                                            <label for="location">Location</label>
                                            <small class="form-text text-muted">City or work location (use “Remote” if
                                                applicable).</small>
                                            @error('location') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Salary Range --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="salary_range"
                                                name="salary_range" placeholder=""
                                                value="{{ old('salary_range') }}" required>
                                            <label for="salary_range">Pay Scale</label>
                                            {{-- <small class="form-text text-muted">Mention Pay Scale</small> --}}
                                            @error('salary_range') <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Image Upload --}}
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" id="file" name="file" accept=".jpeg,.jpg,.png"
                                                placeholder="Upload Image" required>
                                            <label for="file">Upload Image</label>
                                            <small class="form-text text-muted">Upload vacancy notice .</small>
                                            @error('file') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3 text-center">
                                        <button type="submit" class="btn btn-success w-100">Submit Vacancy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    // Numbers only
    $('#application_fee_gen, #application_fee_oth').on('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });

  // Allow only image files (jpg, jpeg, png)
$('#file').on('change', function () {
    var file = this.files[0];
    if (file) {
        var allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        if (!allowedTypes.includes(file.type)) {
            alert("Only JPG, JPEG, or PNG image files are allowed.");
            $(this).val(''); // Clear the input
        }
    }
});


    // Post date must not be greater than last date
    $('#post_date, #last_date').on('change', function () {
        let postDate = new Date($('#post_date').val());
        let lastDate = new Date($('#last_date').val());

        if (postDate >= lastDate) {
            alert("Post Date cannot be later than Last Date.");
            $('#last_date').val('');
        }
    });
});
</script>


@endsection
