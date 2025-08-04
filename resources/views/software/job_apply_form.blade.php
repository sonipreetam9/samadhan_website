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

                            {{-- <div class="col-6 col-md-3">
                                <strong>Vacancy Number</strong>
                                <div>{{ $vac->vacancy_number ?? '-' }}</div>
                            </div> --}}

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


                            <div class="col-6 col-md-3">
                                <strong>Qualifications</strong>
                                <div>{{ $vac->qualifications ?? '-' }}</div>
                            </div>

                            <div class="col-6 col-md-3" >
                                <strong>Age Limit</strong>
                                <div>{{ $vac->age_limit ?? '-' }}</div>
                            </div>

                            @if($vac->file)
                            <div class="col-6 col-md-3">
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
        <div class="col-12 col-md-3">
            <label>Category No</label>
            <input type="text" name="category_no" class="form-control"
                   value="{{ old('category_no', $vac->category ?? '-') }}" readonly required>
            @error('category_no')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-12 col-md-3">
            <label>Post Name</label>
            <input type="text" name="post_name" class="form-control"
                   value="{{ old('post_name', $vac->post ?? '-') }}" readonly required>
            @error('post_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Vancany Number --}}
        <div class="col-md-3">
            <label>Vacancy Number</label>
            <input type="text" name="vancancy_id" class="form-control @error('vancancy_id') is-invalid @enderror"
                   value="{{ $vac->vacancy_number }}" required readonly>
            @error('vancancy_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        {{-- Candidate & Father Name --}}
        <div class="col-md-6">
            <label>Candidate's Name (As per X Certificate)</label>
            <input type="text" name="candidate_name" class="form-control @error('candidate_name') is-invalid @enderror"
                   value="{{ old('candidate_name') }}" required>
            @error('candidate_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label>Father's Name (As per X Certificate)</label>
            <input type="text" name="father_name" class="form-control @error('father_name') is-invalid @enderror"
                   value="{{ old('father_name') }}" required>
            @error('father_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- DOB --}}
        <div class="col-md-4">
            <label>Date of Birth</label>
            <div class="d-flex gap-1">
                <input type="text" name="dob_day" maxlength="2" placeholder="DD"
                       class="form-control @error('dob_day') is-invalid @enderror"
                       value="{{ old('dob_day') }}" required>
                <input type="text" name="dob_month" maxlength="2" placeholder="MM"
                       class="form-control @error('dob_month') is-invalid @enderror"
                       value="{{ old('dob_month') }}" required>
                <input type="text" name="dob_year" maxlength="4" placeholder="YYYY"
                       class="form-control @error('dob_year') is-invalid @enderror"
                       value="{{ old('dob_year') }}" required>
            </div>
            @error('dob_day')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            @error('dob_month')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            @error('dob_year')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Gender --}}
        <div class="col-md-4">
            <label>Sex</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" value="Male"
                       {{ old('sex')=='Male' ? 'checked' : '' }} required> Male
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" value="Female"
                       {{ old('sex')=='Female' ? 'checked' : '' }}> Female
            </div>
            @error('sex')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Category --}}
        <div class="col-md-4">
            <label>Category</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach(['GEN','SC','BCA','BCB','ESM','DESM'] as $cat)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" value="{{ $cat }}"
                               {{ old('category')==$cat ? 'checked' : '' }}> {{ $cat }}
                    </div>
                @endforeach
            </div>
            @error('category')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- PHC Type --}}
        <div class="col-md-6">
            <label>PHC Type (if applicable)</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach(['PHC (ortho)','PHC Blind/Low Vision','PHC Deaf & Dumb'] as $phc)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="phc[]"
                               value="{{ $phc }}"
                               {{ is_array(old('phc')) && in_array($phc, old('phc')) ? 'checked' : '' }}>
                        {{ $phc }}
                    </div>
                @endforeach
            </div>
            @error('phc')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Domicile --}}
        <div class="col-md-3">
            <label>Are you domicile of Haryana?</label><br>
            <input type="radio" name="domicile" value="Yes" {{ old('domicile')=='Yes' ? 'checked' : '' }} required> Yes
            <input type="radio" name="domicile" value="No" {{ old('domicile')=='No' ? 'checked' : '' }}> No
            @error('domicile')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Nationality --}}
        <div class="col-md-3">
            <label>Nationality</label>
            <select class="form-control @error('nationality') is-invalid @enderror" name="nationality" required>
                <option value="">Select</option>
                <option value="Indian" {{ old('nationality')=="Indian" ? 'selected' : '' }}>Indian</option>
                <option value="Other" {{ old('nationality')=="Other" ? 'selected' : '' }}>Other</option>
            </select>
            @error('nationality')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Address --}}
        <div class="col-md-10">
            <label>Name & Address (In BLOCK letters)</label>
            <textarea name="address" class="form-control @error('address') is-invalid @enderror" required rows="7">{{ old('address') }}</textarea>
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2">
            <label>PIN Code</label>
            <input type="text" name="pincode" maxlength="6"
                   value="{{ old('pincode') }}"
                   class="form-control @error('pincode') is-invalid @enderror" required>
            @error('pincode')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Educational Qualifications --}}
        <div class="col-12">
            <label><strong>Educational Qualifications</strong></label>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Qualification</th>
                        <th>Year</th>
                        <th>Marks</th>
                        <th>Total</th>
                        <th>%</th>
                        <th>Division</th>
                        <th>Board/University</th>
                        <th>Subjects</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(['10th','10+2','ITI','Diploma','Graduation','Post-Graduation'] as $q)
                        <tr>
                            <td>
                                <input type="text" class="form-control" value="{{ $q }}" readonly>
                            </td>
                            <td>
                                <input type="text" name="edu[{{ $q }}][year]"
                                       value="{{ old('edu.'.$q.'.year') }}" class="form-control">
                                @error('edu.'.$q.'.year')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                            <td>
                                <input type="number" name="edu[{{ $q }}][marks]"
                                       value="{{ old('edu.'.$q.'.marks') }}" class="form-control">
                            </td>
                            <td>
                                <input type="number" name="edu[{{ $q }}][total]"
                                       value="{{ old('edu.'.$q.'.total') }}" class="form-control">
                            </td>
                            <td>
                                <input type="number" name="edu[{{ $q }}][percent]"
                                       value="{{ old('edu.'.$q.'.percent') }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="edu[{{ $q }}][division]"
                                       value="{{ old('edu.'.$q.'.division') }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="edu[{{ $q }}][board]"
                                       value="{{ old('edu.'.$q.'.board') }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="edu[{{ $q }}][subjects]"
                                       value="{{ old('edu.'.$q.'.subjects') }}" class="form-control">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Other Qualification --}}
        <div class="col-md-6">
            <label>Other Higher Qualification</label>
            <input type="text" name="other_qualification"
                   value="{{ old('other_qualification') }}"
                   class="form-control @error('other_qualification') is-invalid @enderror">
            @error('other_qualification')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Experience --}}
        <div class="col-md-6">
            <label>Experience</label>
            <div class="d-flex gap-1">
                <input type="number" name="exp_years" placeholder="Years" min="0"
                       value="{{ old('exp_years') }}" class="form-control @error('exp_years') is-invalid @enderror">
                <input type="number" name="exp_months" placeholder="Months" min="0" max="11"
                       value="{{ old('exp_months') }}" class="form-control">
                <input type="number" name="exp_days" placeholder="Days" min="0" max="31"
                       value="{{ old('exp_days') }}" class="form-control">
            </div>
            @error('exp_years')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Visible Identification Mark --}}
        <div class="col-md-6">
            <label>Visible Identification Mark</label>
            <input type="text" name="visible_mark"
                   value="{{ old('visible_mark') }}"
                   class="form-control @error('visible_mark') is-invalid @enderror">
            @error('visible_mark')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Declaration --}}
        {{-- <div class="col-md-12">
            <label>Declaration</label>
            <textarea name="declaration" class="form-control @error('declaration') is-invalid @enderror" rows="3" required>{{ old('declaration', 'I hereby declare that...') }}</textarea>
            @error('declaration')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}

        {{-- Place & Date --}}
        <div class="col-md-6">
            <label>Place</label>
            <input type="text" name="place" class="form-control @error('place') is-invalid @enderror"
                   value="{{ old('place') }}">
            @error('place')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label>Date</label>
            <input type="date" name="form_date" class="form-control @error('form_date') is-invalid @enderror"
                   value="{{ old('form_date', date('Y-m-d')) }}">
            @error('form_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Submit --}}
        <div class="col-12 mt-3 text-center">
            <button type="submit" class="btn btn-success">Submit Application</button>
        </div>
    </div>
</form>

{{-- JQUERY VALIDATION  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {
    $('#candidateForm').on('submit', function (e) {
        let valid = true;

        // Remove previous validation messages
        $(this).find('.is-invalid').removeClass('is-invalid');
        $(this).find('small.text-danger.jq-error').remove();

        // Required text, textarea, select
        $(this).find('input[required], textarea[required], select[required]').each(function () {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
                if ($(this).next('.jq-error').length == 0) {
                    $(this).after('<small class="text-danger jq-error">This field is required</small>');
                }
                valid = false;
            }
        });

        // DOB: 2 digits for day and month, 4 for year, also check valid date!
        let day    = $('input[name=dob_day]').val();
        let month  = $('input[name=dob_month]').val();
        let year   = $('input[name=dob_year]').val();

        // Check correct format and range
        if (!/^\d{2}$/.test(day) || parseInt(day)<1 || parseInt(day)>31) {
            $('input[name=dob_day]').addClass('is-invalid').after('<small class="text-danger jq-error">Invalid Day</small>');
            valid = false;
        }
        if (!/^\d{2}$/.test(month) || parseInt(month)<1 || parseInt(month)>12) {
            $('input[name=dob_month]').addClass('is-invalid').after('<small class="text-danger jq-error">Invalid Month</small>');
            valid = false;
        }
        if (!/^\d{4}$/.test(year) || parseInt(year)<1900 || parseInt(year) > new Date().getFullYear()) {
            $('input[name=dob_year]').addClass('is-invalid').after('<small class="text-danger jq-error">Invalid Year</small>');
            valid = false;
        }
        // Check if day is valid for given month/year
        if(/^\d{2}$/.test(day) && /^\d{2}$/.test(month) && /^\d{4}$/.test(year)) {
            let d = new Date(year, month-1, day);
            if (!(d.getFullYear()==year && d.getMonth()==month-1 && d.getDate()==parseInt(day))) {
                $('input[name=dob_day],input[name=dob_month],input[name=dob_year]').addClass('is-invalid');
                if($('input[name=dob_year]').next('.jq-error').length==0)
                    $('input[name=dob_year]').after('<small class="text-danger jq-error">Invalid Date</small>');
                valid = false;
            }
        }

        // PIN code 6 digits only
        let pin = $('input[name=pincode]').val();
        if(!/^\d{6}$/.test(pin)) {
            $('input[name=pincode]').addClass('is-invalid').after('<small class="text-danger jq-error">PIN must be 6 digits</small>');
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
            alert('Please correct the errors in the form.');
        }
    });

    // Remove validation error on input
    $('#candidateForm input, #candidateForm textarea, #candidateForm select').on('input change', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid').next('.jq-error').remove();
        }
    });
});
</script>





                </div>
            </div>
        </div>



    </div>
</div>



@endsection
