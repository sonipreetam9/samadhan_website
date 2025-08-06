@extends('layouts.header')

@section('content')

@include('layouts.breadcrumb')

<style>
    label {
        color: black;
    }
</style>

<!-- End Page Title -->
<section class="team-area ptb-100">
    <div class="container">
        <form action="{{ route('membership.form.post') }}" method="POST" id="registrationForm">
            @csrf

            <div class="row">
                <div class="col-md-12 mb-3">
                    <h4 class="text-center fw-bold">पंजीकरण हेतु आवेदन प्रपत्र</h4>
                </div>

                <!-- 1. Applicant Name -->
                <div class="col-md-6 mb-3">
                    <label>1. आवेदक का नाम</label>
                    <input type="text" name="applicant_name" class="form-control" value="{{ old('applicant_name') }}">
                    @error('applicant_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 2. Father/Husband Name -->
                <div class="col-md-6 mb-3">
                    <label>2. पिता/पति का नाम</label>
                    <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}">
                    @error('father_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 3. Address -->
                <div class="col-md-12 mb-3">
                    <label>3. स्थायी पता</label>
                    <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 4. Contact Number -->
                <div class="col-md-6 mb-3">
                    <label>4. संपर्क नंबर</label>
                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                    @error('contact') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 5. Caste -->
                <div class="col-md-6 mb-3">
                    <label>5. जातिवर्ग (GEN/SC/BC/OBC)</label>
                    <input type="text" name="caste" class="form-control" value="{{ old('caste') }}">
                    @error('caste') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 6. Gender -->
                <div class="col-md-6 mb-3">
                    <label>6. लिंग (पुरुष/महिला)</label>
                    <select name="gender" class="form-control">
                        <option value="">चुनें</option>
                        <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>पुरुष</option>
                        <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>महिला</option>
                    </select>
                    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 7. Educational Qualification -->
                <div class="col-md-6 mb-3">
                    <label>7. शैक्षणिक स्तर</label>
                    <input type="text" name="education" class="form-control" value="{{ old('education') }}">
                    @error('education') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 8. Marital Status -->
                <div class="col-md-6 mb-3">
                    <label>8. वैवाहिक स्थिति</label>
                    <input type="text" name="marital_status" class="form-control" value="{{ old('marital_status') }}">
                    @error('marital_status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>



                <!-- 10. Ration Card Number -->
                <div class="col-md-6 mb-3">
                    <label>10. राशन कार्ड नंबर</label>
                    <input type="text" name="ration_card" class="form-control" value="{{ old('ration_card') }}">
                    @error('ration_card') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 11. Aadhar Number -->
                <div class="col-md-6 mb-3">
                    <label>11. आधार नंबर</label>
                    <input type="text" name="aadhar" class="form-control" value="{{ old('aadhar') }}">
                    @error('aadhar') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 12. Bank Details -->
                <div class="col-md-6 mb-3">
                    <label>12. बैंक का नाम एवं शाखा</label>
                    <input type="text" name="bank_branch" class="form-control" value="{{ old('bank_branch') }}">
                    @error('bank_branch') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- 13. IFSC Code -->
                <div class="col-md-6 mb-3">
                    <label>13. IFSC कोड</label>
                    <input type="text" name="ifsc_code" class="form-control" value="{{ old('ifsc_code') }}">
                    @error('ifsc_code') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Family Members Table -->

                <!-- ✅ Existing Family Member Section + Add Row -->
                <div class="col-md-12 mb-3">
                    <h5 class="mb-3">परिवार के सदस्यों का विवरण</h5>
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
                                <td><input type="text" name="age[]" class="form-control"></td>
                                <td><input type="text" name="member_aadhar[]" class="form-control"></td>
                                <td><input type="text" name="education_level[]" class="form-control"></td>
                                <td><input type="text" name="school_info[]" class="form-control"></td>
                                <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success btn-sm" id="addFamilyRow">➕ सदस्य जोड़े</button>
                </div>
                <!-- Q14: अन्य योजना में पंजीकृत -->
                <div class="col-md-12 mb-3">
                    <label>14. लाभार्थी के परिवार का कोई अन्य सदस्य उपरोक्त कार्यालय में पंजीकृत है, यदि हाँ तो विवरण
                        दीजिए</label>
                    <input type="text" name="family_registered_details" class="form-control"
                        value="{{ old('family_registered_details') }}">
                    @error('family_registered_details') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Q15: दस्तावेज़ अपलोड -->
                <div class="col-md-12 mb-3">
                    <label>15. लाभार्थी के लिए निम्नलिखित दस्तावेजों की फोटोकॉपी संलग्न की जाती है:</label><br>
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
                    @error('documents') <small class="text-danger d-block">{{ $message }}</small> @enderror
                </div>



                <!-- Signature Fields -->
                <div class="col-md-6 mb-3">
                    <label>स्थान</label>
                    <input type="text" name="place" class="form-control" value="{{ old('place') }}">
                    @error('place') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>दिनांक</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- ✅ Nominee Section -->
                <div class="col-md-12 mb-3">
                    <h5 class="mb-3">नामांकित प्रार्थी</h5>
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
                                <td><input type="text" name="nominee_age[]" class="form-control"></td>
                                <td><input type="text" name="nominee_amount[]" class="form-control"></td>
                                <td><button type="button" class="btn btn-danger btn-sm removeRow">X</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success btn-sm" id="addNomineeRow">➕ नामांकित जोड़े</button>
                </div>

                <!-- Submit -->
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary">सबमिट करें</button>
                </div>
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

        if (!valid) {
            e.preventDefault();
            alert("सभी फ़ील्ड भरें (Fill all fields)");
        }

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
    });
</script>


@endsection
