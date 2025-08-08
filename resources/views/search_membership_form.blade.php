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
        <form action="{{ route('search.member.form.post') }}" method="POST">
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
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h4 class="text-center fw-bold">आवेदन प्रपत्र</h4>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Application Number</label>
                        <input type="text" name="tag_id" class="form-control" value="{{ old('tag_id') }}" required>
                        @error('tag_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Mobile Number</label>
                        <input type="number" name="phone" class="form-control" id="phone" required>
                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Search</button>
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



@endsection
