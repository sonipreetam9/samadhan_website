@extends('software.layouts.header')
@section('title', 'Apply Job - Upload Documents')

@section('software')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Uploads Documents</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Uploads Documents</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upload Documents Card -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <h4 class="mb-0 flex-grow-1 text-white">Uploads Documents</h4>
                    </div>

                    <form method="POST" action="{{ route('user.apply.job.post') }}" enctype="multipart/form-data" id="candidateForm" class="card-body">
                        @csrf

                        <div class="row gy-3">
                            {{-- Aadhar Card Front --}}
                            <div class="col-12 col-md-3">
                                <label>Aadhar Card Front</label>
                                <input type="file" name="aadhar_card_front" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_aadhar_card_front" class="img-fluid mt-1 d-none border rounded" />
                                @error('aadhar_card_front')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Aadhar Card Back --}}
                            <div class="col-12 col-md-3">
                                <label>Aadhar Card Back</label>
                                <input type="file" name="aadhar_card_back" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_aadhar_card_back" class="img-fluid mt-1 d-none border rounded" />
                                @error('aadhar_card_back')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- PAN Card --}}
                            <div class="col-12 col-md-3">
                                <label>PAN Card</label>
                                <input type="file" name="pan_card" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_pan_card" class="img-fluid mt-1 d-none border rounded" />
                                @error('pan_card')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Caste Certificate --}}
                            <div class="col-12 col-md-3">
                                <label>Caste Certificate</label>
                                <input type="file" name="caste" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_caste" class="img-fluid mt-1 d-none border rounded" />
                                @error('caste')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Passport Size Photo --}}
                            <div class="col-12 col-md-3">
                                <label>Passport Size Photo</label>
                                <input type="file" name="passport_image" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_passport_image" class="img-fluid mt-1 d-none border rounded" />
                                @error('passport_image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
@if
                            {{-- Domicile Certificate --}}
                            <div class="col-12 col-md-3">
                                <label>Domicile Certificate</label>
                                <input type="file" name="domicial" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_domicial" class="img-fluid mt-1 d-none border rounded" />
                                @error('domicial')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Eligibility Document 1 --}}
                            <div class="col-12 col-md-3">
                                <label>Eligibility Document 1</label>
                                <input type="file" name="eligibility_1" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp">
                                <img id="preview_eligibility_1" class="img-fluid mt-1 d-none border rounded" />
                                @error('eligibility_1')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Eligibility Document 2 --}}
                            <div class="col-12 col-md-3">
                                <label>Eligibility Document 2</label>
                                <input type="file" name="eligibility_2" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp">
                                <img id="preview_eligibility_2" class="img-fluid mt-1 d-none border rounded" />
                                @error('eligibility_2')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Signature Image --}}
                            <div class="col-12 col-md-3">
                                <label>Signature Image</label>
                                <input type="file" name="sign" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_sign" class="img-fluid mt-1 d-none border rounded" />
                                @error('sign')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            @foreach ($required_doc as $doc)


                            {{-- $doc->education_name --}}
                            <div class="col-12 col-md-3">
                                <label>{{  $doc->education_name }} (File)</label>
                                <input type="file" name="sign" class="form-control file-input" accept=".jpg,.jpeg,.png,.webp" required>
                                <img id="preview_sign" class="img-fluid mt-1 d-none border rounded" />
                                @error('sign')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            @endforeach

                            {{-- Submit --}}
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- File Format & Preview Script --}}
<script>
    $(document).ready(function () {
        $('.file-input').on('change', function () {
            let fileInput = $(this);
            let file = this.files[0];
            let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.webp)$/i;
            let filePath = fileInput.val();

            // File type check
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type! Only JPG, JPEG, PNG, WEBP files are allowed.');
                fileInput.val('');
                fileInput.closest('div').find('img').addClass('d-none').attr('src', '#');
                return false;
            }

            // Preview display
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = fileInput.closest('div').find('img');
                    img.attr('src', e.target.result).removeClass('d-none').css({
                        'height': '100px',
                        'object-fit': 'contain'
                    });
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endsection
