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
        <form action="{{ route('membership.form.post') }}" method="POST" id="registrationForm">
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
                    <h4 class="text-center fw-bold">पंजीकरण हेतु आवेदन प्रपत्र</h4>
                </div>

                <div class="col-md-4 mb-3">
                    <label>1. Referance Number</label>
                    <select name="refer_number" class="form-control" required>
                        <option>चुनें</option>
                        @foreach ($members as $mem)
                        <option value="{{ $mem->tag_id }}" {{ old('refer_number')==$mem->tag_id ? 'selected' : '' }}>{{
                            $mem->tag_id ." ". $mem->name }}</option>
                        @endforeach
                    </select>
                    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                </div>


                <!-- 1. Applicant Name -->
                <div class="col-md-4 mb-3">
                    <label>2. आवेदक का नाम</label>
                    <input type="text" name="applicant_name" class="form-control" value="{{ old('applicant_name') }}">
                    @error('applicant_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 2. Father/Husband Name -->
                <div class="col-md-4 mb-3">
                    <label>3. पिता/पति का नाम</label>
                    <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}">
                    @error('father_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 3. Address -->
                <div class="col-md-12 mb-3">
                    <label>4. स्थायी पता</label>
                    <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 4. Contact Number -->
                <div class="col-md-6 mb-3">
                    <label>5. संपर्क नंबर</label>
                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                    @error('contact') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 5. Caste -->
                <div class="col-md-6 mb-3">
                    <label>6. जातिवर्ग (GEN/SC/BC/OBC)</label>
                    <input type="text" name="caste" class="form-control" value="{{ old('caste') }}">
                    @error('caste') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 6. Gender -->
                <div class="col-md-6 mb-3">
                    <label>7. लिंग (पुरुष/महिला)</label>
                    <select name="gender" class="form-control">
                        <option value="">चुनें</option>
                        <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>पुरुष</option>
                        <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>महिला</option>
                    </select>
                    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 7. Educational Qualification -->
                <div class="col-md-6 mb-3">
                    <label>8. शैक्षणिक स्तर</label>
                    <input type="text" name="education" class="form-control" value="{{ old('education') }}">
                    @error('education') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 8. Marital Status -->
                <div class="col-md-6 mb-3">
                    <label>9. वैवाहिक स्थिति</label>
                    <select name="marital_status" class="form-control">
                        <option value="">चुनें</option>
                        <option value="अविवाहित" {{ old('marital_status')=='अविवाहित' ? 'selected' : '' }}>अविवाहित
                        </option>
                        <option value="विवाहित" {{ old('marital_status')=='विवाहित' ? 'selected' : '' }}>विवाहित
                        </option>
                        <option value="विधवा" {{ old('marital_status')=='विधवा' ? 'selected' : '' }}>विधवा</option>
                        <option value="विधुर" {{ old('marital_status')=='विधुर' ? 'selected' : '' }}>विधुर</option>
                        <option value="तलाकशुदा" {{ old('marital_status')=='तलाकशुदा' ? 'selected' : '' }}>तलाकशुदा
                        </option>
                    </select>
                    @error('marital_status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>




                <!-- 10. Ration Card Number -->
                <div class="col-md-6 mb-3">
                    <label>10. राशन कार्ड नंबर</label>
                    <input type="number" name="ration_card" class="form-control" value="{{ old('ration_card') }}">
                    @error('ration_card') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 11. Aadhar Number -->
                <div class="col-md-6 mb-3">
                    <label>11. आधार नंबर</label>
                    <input type="number" name="aadhar" class="form-control" value="{{ old('aadhar') }}">
                    @error('aadhar') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 12. Bank Details -->
                <div class="col-md-6 mb-3">
                    <label>12. बैंक का नाम एवं शाखा</label>
                    <input type="text" name="bank_branch" class="form-control" value="{{ old('bank_branch') }}">
                    @error('bank_branch') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>13. बैंक खाता संख्या</label>
                    <input type="number" name="bank_account_number" class="form-control"
                        value="{{ old('bank_account_number') }}">
                    @error('bank_account_number') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 13. IFSC Code -->
                <div class="col-md-6 mb-3">
                    <label>14. IFSC कोड</label>
                    <input type="text" name="ifsc_code" class="form-control" value="{{ old('ifsc_code') }}">
                    @error('ifsc_code') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Family Members Table -->

                <!-- ✅ Existing Family Member Section + Add Row -->
                <div class="col-md-12 mb-3">
                    <h5 class="mb-3"> 15. परिवार के सदस्यों का विवरण</h5>
                    <table class="table table-bordered" id="familyTable">
                        <thead>
                            <tr>
                                <th>क्रम संख्या</th>
                                <th>परिवार के सदस्य का नाम</th>
                                <th>लाभार्थी से संबंध</th>
                                <th>आयु</th>
                                <th>आधार कार्ड नंबर</th>
                                <th>शिक्षा का स्तर</th>
                                <th>यदि पढ़ रहा/रही है तो स्कूल का नाम व पता</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="member_name[]" class="form-control"></td>
                                <td><input type="text" name="relation[]" class="form-control"></td>
                                <td><input type="number" name="age[]" class="form-control"></td>
                                <td><input type="number" name="member_aadhar[]" class="form-control"></td>
                                <td><input type="text" name="education_level[]" class="form-control"></td>
                                <td><input type="text" name="school_info[]" class="form-control"></td>
                                <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success btn-md" id="addFamilyRow">➕ सदस्य जोड़े</button>
                </div>
                <!-- Q14: अन्य योजना में पंजीकृत -->
                <div class="col-md-6 mb-3">
                    <label>
                        16. लाभार्थी के परिवार का कोई अन्य सदस्य उपरोक्त कार्यालय में पंजीकृत है, यदि हाँ तो विवरण दीजिए
                    </label>
                    <select name="family_registered_yes_no" class="form-control" id="family_registered_select">
                        <option value="No" {{ old('family_registered_yes_no')=='No' ? 'selected' : '' }}>No</option>
                        <option value="Yes" {{ old('family_registered_yes_no')=='Yes' ? 'selected' : '' }}>Yes</option>
                    </select>
                    @error('family_registered_yes_no') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Dependent Input Fields (Initially Hidden) -->
                <div class="col-md-3 mb-3 family_yes_no d-none">
                    <label>नाम</label>
                    <input type="text" name="family_member_name" class="form-control"
                        value="{{ old('family_member_name') }}">
                    @error('family_member_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-3 mb-3 family_yes_no d-none">
                    <label>पंजीकरण संख्या</label>
                    <input type="text" name="family_registration_number" class="form-control"
                        value="{{ old('family_registration_number') }}">
                    @error('family_registration_number') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>




            <!-- Q15: दस्तावेज़ अपलोड -->
            <div class="col-md-12 mb-3">
                <label>17. आयु प्रमाणिकरण के लिए निम्नलिखित दस्तावेजों की फोटोकॉपी संलग्न की जाती है। :</label><br>
                @php
                $docs = ['aadhar_card' => 'आधार कार्ड', 'id_card' => 'पहचान पत्र', 'ration_card' => 'राशन कार्ड',
                'voter_card' => 'मतदाता पहचान पत्र', 'pan_card' => 'पैन कार्ड', 'school_id' => 'स्कूल प्रमाण-पत्र',
                'passport' => 'पासपोर्ट'];
                @endphp
                @foreach ($docs as $key => $label)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="documents[]" value="{{ $label }}"
                        id="doc_{{ $key }}">
                    <label class="form-check-label" for="doc_{{ $key }}">{{ $label }}</label>
                </div>
                @endforeach
                <small class="text-success d-block">(उपरोक्त में से कोई दो अनिवार्य हैं)</small>
                @error('documents') <small class="text-danger d-block">{{ $message }}</small> @enderror
            </div>



            <!-- Signature Fields -->
            <div class="col-md-6 mb-3">
                <label>18. स्थान</label>
                <input type="text" name="place" class="form-control" value="{{ old('place') }}">
                @error('place') <small class="text-danger">{{ $message }}</small> @enderror
            </div>


            <!-- ✅ Nominee Section -->
            <div class="col-md-12 mb-3">
                <h5 class="mb-3">19. नामांकित प्रार्थी</h5>
                <table class="table table-bordered" id="nomineeTable">
                    <thead>
                        <tr>
                            <th>क्रम संख्या</th>
                            <th>नामांकित व्यक्ति का नाम व पता</th>
                            <th>लाभार्थी से संबंध</th>
                            <th>नामांकित की उम्र</th>
                            <th>प्रत्येक नामांकित व्यक्ति को दी जाने वाली राशि</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><input type="text" name="nominee_name[]" class="form-control"></td>
                            <td><input type="text" name="nominee_relation[]" class="form-control"></td>
                            <td><input type="number" name="nominee_age[]" class="form-control"></td>
                            <td><input type="number" name="nominee_amount[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-md" id="addNomineeRow">➕ नामांकित जोड़े</button>
            </div>


            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>20. ईमेल</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>21. पासवर्ड</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>22. जन्म तिथि</label>
                    <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" required>
                    @error('dob')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


            </div>

            <!-- Submit -->
            <div class="col-md-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">सबमिट करें</button>
            </div>
        </form>
    </div>

</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        let valid = true;

        $(this).find('input, select, textarea').each(function () {
            if ($(this).val().trim() === '') {
                $(this).addClass('is-invalid');
                valid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });


    });
});
</script>

<script>
    $(document).ready(function () {
        let famIndex = 2;
        let nomIndex = 2;

        function updateFamilyIndexes() {
            famIndex = 1;
            $('#familyTable tbody tr').each(function () {
                $(this).find('td:first').text(famIndex++);
            });
        }

        function updateNomineeIndexes() {
            nomIndex = 1;
            $('#nomineeTable tbody tr').each(function () {
                $(this).find('td:first').text(nomIndex++);
            });
        }

        $('#addFamilyRow').click(function () {
            $('#familyTable tbody').append(`
                <tr>
                    <td>${famIndex}</td>
                    <td><input type="text" name="member_name[]" class="form-control"></td>
                    <td><input type="text" name="relation[]" class="form-control"></td>
                    <td><input type="text" name="age[]" class="form-control"></td>
                    <td><input type="text" name="member_aadhar[]" class="form-control"></td>
                    <td><input type="text" name="education_level[]" class="form-control"></td>
                    <td><input type="text" name="school_info[]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                </tr>
            `);
            famIndex++;
        });

        $('#addNomineeRow').click(function () {
            $('#nomineeTable tbody').append(`
                <tr>
                    <td>${nomIndex}</td>
                    <td><input type="text" name="nominee_name[]" class="form-control"></td>
                    <td><input type="text" name="nominee_relation[]" class="form-control"></td>
                    <td><input type="text" name="nominee_age[]" class="form-control"></td>
                    <td><input type="text" name="nominee_amount[]" class="form-control"></td>
                    <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                </tr>
            `);
            nomIndex++;
        });

        // 🧹 Remove row and update serial numbers
        $(document).on('click', '.removeRow', function () {
            const $table = $(this).closest('table').attr('id');
            $(this).closest('tr').remove();

            if ($table === 'familyTable') {
                updateFamilyIndexes();
            } else if ($table === 'nomineeTable') {
                updateNomineeIndexes();
            }
        });



     function toggleFamilyFields() {
    const isYes = $('#family_registered_select').val() === 'Yes';

    $('.family_yes_no').each(function () {
        if (isYes) {
            $(this).removeClass('d-none');
            $(this).find('input').attr('required', true); // Make input required
        } else {
            $(this).addClass('d-none');
            $(this).find('input').removeAttr('required'); // Remove required
        }
    });
}

// Initial check on page load (for old() values)
toggleFamilyFields();

// On change
$('#family_registered_select').on('change', function () {
    toggleFamilyFields();
});

    });
</script>


@endsection
