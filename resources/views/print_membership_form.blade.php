@extends('layouts.header')
@section('content')

<style>
    th {
        font-weight: 700;
        color: #000;
    }
    td {
        color: #000;
    }
    .watermark {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        opacity: 0.08;
        z-index: 0;
        background: no-repeat center;
        background-image: url('{{ asset('assets/img/logo.png') }}');
        pointer-events: none;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        border-bottom: 2px solid #000;
        padding-bottom: 10px;
    }

    .header img {
       width: 100%;
    }

    .header-center {
        flex: 1;
    }

    h1 {
        font-size: 18px;
        margin: 0;
        color: #003366;
    }

    .title {
        color: red;
        text-align: center;
        font-weight: bold;
        margin: 10px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    td,
    th {
        border: 1px solid #000;
        padding: 4px;
        vertical-align: top;
    }

    th {
        font-weight: 700;
        text-align: center;
    }

    td {
        text-align: center;
    }

    .photo-box {
        border: 1px solid #000;
        width: 120px;
        height: 150px;
        text-align: center;
        float: right;
        font-size: 12px;
    }

    .form-section {
        margin-top: 20px;
    }

    .signature-box {
        margin-top: 40px;
    }

    .declaration,
    .office-use,
    .nominee-section {
        margin-top: 20px;
    }

    p {
        color: black;
    }

    .page {
        position: relative;
        min-height: 1000px;
        padding: 20px;
    }

    /* Page break for print */
    .page-break {
        page-break-before: always;
    }

    @media print {
        .noprint {
            display: none;
        }

        .container {
            border: none;
        }
    }
</style>

<section class="team-area ptb-100">
    <!-- PRINT BUTTON -->
    <div class="text-end mb-3 noprint">
        <button onclick="window.print()" class="btn btn-primary">Print Form</button>
    </div>
<div id="printArea">
    <!-- PAGE 1 -->
    <div class="container page">
        <div class="watermark"></div>

        <div class="header">
            <img src="{{ asset('assets/img/membership_logo.png') }}" alt="Logo" style="object-fit: contain;">
        </div>

        <div class="title">पंजीकरण हेतु आवेदन प्रपत्र</div>
        <div class="photo-box">
            <img src="{{ asset($application->sign) }}" alt="" style="object-fit: contain;height:100%;width:100%;">
        </div>

        <div class="form-section">
            <p>1. लाभार्थी का नाम: <span>{{ $application->name }}</span></p>
            <p>2. पिता/पति का नाम: <span>{{ $application->father_name }}</span></p>
            <p>3. स्थाई पता: <span>{{ $application->address }}</span></p>
            <p>4. संपर्क नं.: <span>{{ $application->phone }}</span></p>
            <p>5. शैक्षिक स्तर: <span>{{ $application->study }}</span> &nbsp;&nbsp;
                6. लिंग: <span>{{ $application->sex }}</span></p>
            <p>7. जाति श्रेणी: <span>{{ $application->caste }}</span></p>
            <p>8. राशन कार्ड संख्या: <span>{{ $application->rashan_card_number }}</span> &nbsp;&nbsp;
                9. आधार कार्ड संख्या: <span>{{ $application->aadhhar_card_number }}</span></p>
            <p>10. बैंक का नाम व शाखा: <span>{{ $application->bank_name }}</span> &nbsp;&nbsp;
                11. IFSC CODE: <span>{{ $application->bank_ifsc_code }}</span></p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>क्रम संख्या</th>
                    <th>परिवार के सदस्य का नाम</th>
                    <th>लाभार्थी से संबंध</th>
                    <th>आयु</th>
                    <th>आधार कार्ड नं:</th>
                    <th>शिक्षा का स्तर</th>
                    <th>यदि पढ़ रहा है तो स्कूल/कॉलेज का नाम व पता</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($familyMembers as $index=> $mem)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $mem->name }}</td>
                    <td>{{ $mem->realtion }}</td>
                    <td>{{ $mem->age }}</td>
                    <td>{{ $mem->aadhhar_card_number }}</td>
                    <td>{{ $mem->study_level }}</td>
                    <td>{{ $mem->school_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if ($application->family_yes_no == 'Yes')
        <p class="mt-3">12. परिवार का अन्य सदस्य: {{ $application->family_name }} | पंजीकरण संख्या: {{
            $application->family_member_number }}</p>
        @endif

        <div class="declaration">
            <p>मैं प्रमाणित करता/करती हूं कि उपर्युक्त विवरण सही है...</p>
            <p>स्थान: {{ $application->place }} <br>
                दिनांक: {{ date('d-m-Y', strtotime($application->date)) }} <br>
                हस्ताक्षर: <img src="{{ asset($application->sign) }}" width="80">
            </p>
        </div>
    </div>

    <!-- PAGE 2 -->
    <div class="container page page-break">
        <div class="watermark"></div>

        <div class="nominee-section">
            <h3 class="title">नामांकन प्रपत्र</h3>
            <table>
                <thead>
                    <tr>
                        <th>क्रम संख्या</th>
                        <th>नामांकित व्यक्तियों का नाम व पता</th>
                        <th>लाभार्थी के साथ संबंध</th>
                        <th>नामांकित की उम्र</th>
                        <th>प्रत्येक को दी जाने वाली राशि</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nomineeMembers as $index=> $nomem)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $nomem->name }}</td>
                        <td>{{ $nomem->nominee_relation }}</td>
                        <td>{{ $nomem->nominee_age }}</td>
                        <td>{{ $nomem->nominee_amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <p class="mt-3">स्थान: {{ $application->place }} <br>
                दिनांक: {{ date('d-m-Y', strtotime($application->date)) }} <br>
                हस्ताक्षर: <img src="{{ asset($application->sign) }}" width="80">
            </p>
        </div>

        <div class="office-use">
            <h3 class="title">केवल कार्यालय प्रयोग हेतु</h3>
            <p>रेट सब्सिडी कोड नं.: __________________________</p>
            <p>जिला कोड नं.: __________________________</p>
            <p>पंजीकरण संख्या: __________________________</p>
            <p>पंजीकरण तिथि: __________________________</p>
            <p>प्राधिकृत हस्ताक्षर<br>परियोजना अधिकारी...</p>
        </div>
    </div>

    </div>

<script>
function printPage() {
    window.print();
}
</script>
</section>
<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #printArea, #printArea * {
            visibility: visible;
        }
        #printArea {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }
</style>
@endsection
