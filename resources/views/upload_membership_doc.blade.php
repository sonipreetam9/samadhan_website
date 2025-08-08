@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    label {
        color: black;
    }

    a {
        text-decoration: none !important;
    }
</style>

<!-- End Page Title -->
<section class="team-area ptb-100">
    <div class="container">
        <form action="{{ route('upload.membership.doc.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="tag_id" value="{{ $application->tag_id }}" required>
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
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h4 class="text-center fw-bold">{{ $application->tag_id }} Upload Documents</h4>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Possport Size Image</label>
                        <input type="file" name="image" class="form-control file-input" value="{{ old('image') }}"
                            required accept=".jpg,.jpeg,.png">
                        <img class="img-preview d-none mt-2 border"
                            style="width: 100%; height: 120px; object-fit: contain;" />
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Sign</label>
                        <input type="file" name="sign" class="form-control file-input" value="{{ old('sign') }}"
                            required accept=".jpg,.jpeg,.png">
                        <img class="img-preview d-none mt-2 border"
                            style="width: 100%; height: 120px; object-fit: contain;" />
                        @error('sign') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3">

                        @php
                        $docFields = [
                        'aadhar_yes_no' => 'आधार कार्ड',
                        'birth_yes_no' => 'जन्म प्रमाण पत्र',
                        'rashon_card_yes_no' => 'राशन कार्ड',
                        'voter_card__yes_no' => 'मतदाता पहचान पत्र',
                        'dl_yes_no' => 'ड्राइविंग लाइसेंस',
                        'pan_card_yes_no' => 'पैन कार्ड',
                        'school_yes_no' => 'स्कूल प्रमाण पत्र',
                        'passport_yes_no' => 'पासपोर्ट',
                        ];
                        @endphp

                        <div class="row">
                            @foreach ($docFields as $field => $label)
                            @if ($application->$field == 'yes')
                            <div class="col-md-6 mb-3">
                                <label>{{ $label }} Upload</label>
                                <input type="file" name="docs[{{ $field }}]" class="form-control file-input"
                                    accept=".jpg,.jpeg,.png,.webp">
                                <img class="img-preview d-none mt-2 border"
                                    style="width: 100%; height: 120px; object-fit: contain;" />
                                @error("docs.$field") <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            @endif
                            @endforeach
                        </div>

                        @error('documents') <small class="text-danger d-block">{{ $message }}</small> @enderror
                    </div>




                </div>

                <!-- Submit -->
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
        </form>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    $('#phone').on('input', function () {
        let phone = $(this).val();

        // Only allow 10 digits
        if (phone.length > 10) {
            $(this).val(phone.slice(0, 10));
        }
    });

    $('form').on('submit', function (e) {
        let phone = $('#phone').val();

        if (phone.length !== 10) {
            alert('कृपया मोबाइल नंबर सही (10 अंकों का) दर्ज करें।');
            $('#phone').focus();
            e.preventDefault(); // prevent form submission
        }
    });
});
</script>
{{-- File Format & Preview Script --}}
<script>
    $(document).ready(function () {
    $('.file-input').on('change', function () {
        let fileInput = $(this);
        let file = this.files[0];
        let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.webp)$/i;

        if (!allowedExtensions.exec(file.name)) {
            alert('Invalid file type! Only JPG, JPEG, PNG, WEBP allowed.');
            fileInput.val('');
            fileInput.closest('div').find('.img-preview').attr('src', '#').addClass('d-none');
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            fileInput.closest('div').find('.img-preview').attr('src', e.target.result).removeClass('d-none');
        };
        reader.readAsDataURL(file);
    });
});
</script>




@endsection
