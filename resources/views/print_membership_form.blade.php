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

    .page {
        position: relative;
        /* Important */
        min-height: 1000px;
        padding: 20px;
    }

    .watermark {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('{{ asset(' assets/img/logo.png') }}') no-repeat center;

        opacity: 0.09;
        z-index: -1;
        /* Content ke neeche rahe */
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
                <img src="{{ asset($application->image) }}" alt="" style="object-fit: contain;height:100%;width:100%;">
            </div>

            <div class="form-section">
                <p>1. लाभार्थी का नाम: <span>{{ $application->name }}</span></p>
                <p>2. पिता/पति का नाम: <span>{{ $application->father_name }}</span></p>
                <p>3. जन्म तिथि: <span>{{ $application->dob ? \Carbon\Carbon::parse($application->dob)->format('d-m-Y')
                        : ''
                        }}</span></p>
                <p>4. लिंग: <span>{{ $application->sex }}</span></p>
                <p>5. वैवाहिक स्थिति: <span>{{ $application->married_status }}</span></p>
                <p>6. जाति श्रेणी: <span>{{ $application->caste }}</span></p>
                <p>7. शैक्षिक स्तर: <span>{{ $application->study }}</span></p>
                <p>8. ईमेल: <span>{{ $application->email }}</span></p>
                <p>9. संपर्क नंबर: <span>{{ $application->phone }}</span></p>
                <p>10. स्थाई पता: <span>{{ $application->address }}</span></p>
                <p>11. स्थान: <span>{{ $application->place }}</span></p>
                <p>12. राशन कार्ड संख्या: <span>{{ $application->rashan_card_number }}</span></p>
                <p>13. आधार कार्ड संख्या: <span>{{ $application->aadhhar_card_number }}</span></p>
                <p>14. बैंक खाता धारक का नाम: <span>{{ $application->bank_holder_name }}</span></p>
                <p>15. बैंक का नाम व शाखा: <span>{{ $application->bank_name }}</span></p>
                <p>16. खाता संख्या: <span>{{ $application->bank_account_number }}</span></p>
                <p>17. IFSC कोड: <span>{{ $application->bank_ifsc_code }}</span></p>
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
            <p class="mt-2">18. लाभार्थी के परिवार का कोई सदस्य उपरोक्त कार्यालय में पंजीकृत है?: <span>{{
                    $application->family_yes_no }}</span></p>
            @if ($application->family_yes_no == 'Yes')

            <p>19. अन्य सदस्य का नाम: <span>{{ $application->family_name }}</span></p>
            <p>20. पंजीकरण संख्या: <span>{{ $application->family_member_number }}</span></p>

            @endif


        </div>

        <!-- PAGE 2 -->
        <div class="container page page-break">
            <div class="watermark"></div>
     <div class="declaration mt-3">
    <p>मैं प्रमाणित करता/करती हूं कि उपर्युक्त विवरण सही है...</p>
    <div class="row">
        <div class="col-6 text-start">
            <p>
                स्थान: {{ $application->place }} <br>
                दिनांक: {{ date('d-m-Y', strtotime($application->date)) }}
            </p>
        </div>
        <div class="col-6 text-end">
            <p>
                हस्ताक्षर:
                <br>
                <img src="{{ asset($application->sign) }}" width="80">
            </p>
        </div>
    </div>
</div>


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
<div class="declaration mt-3">
    <p>मैं प्रमाणित करता/करती हूं कि उपर्युक्त विवरण सही है...</p>
    <div class="row">
        <div class="col-6 text-start">
            <p>
                स्थान: {{ $application->place }} <br>
                दिनांक: {{ date('d-m-Y', strtotime($application->date)) }}
            </p>
        </div>
        <div class="col-6 text-end">
            <p>
                 हस्ताक्षर:
                 <br>
               <img src="{{ asset($application->sign) }}" width="80">
            </p>
        </div>
    </div>
</div>


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

        #printArea,
        #printArea * {
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
