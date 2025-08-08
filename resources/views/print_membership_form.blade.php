@extends('layouts.header')
@section('content')


<style>
    .watermark {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.1;
        z-index: 0;
        background: url('logo-path.png') no-repeat center;
        background-size: 300px;
        width: 100%;
        height: 100%;
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
        height: 60px;
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

    p{
        color: black;
    }
    th{
        color: black;
        font-weight: 700;
        text-align: center;

    }
    td{
        color: black;
        text-align: center;
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


    <div class="container" >
        <div class="watermark"></div>
        <div class="header">


                <img src="{{ asset('assets/img/membership_logo.png') }}" alt="Logo" width="100%" style="object-fit: contain;">


        </div>

        <div class="title">पंजीकरण हेतु आवेदन प्रपत्र</div>
        <div class="photo-box">पासपोर्ट आकार फोटो लगाएं</div>

        <div class="form-section">
            <p>1. लाभार्थी का नाम: &nbsp;  <span>{{ $application->name }}</span></p>
            <p>2. पिता/पति का नाम: &nbsp; <span>{{ $application->father_name }}</span></p>
            <p>3. स्थाई पता: &nbsp;  <span>{{ $application->address }}</p>
            <p>4. संपर्क नं.: &nbsp;  <span>{{ $application->phone }}</p>


            <p>7. शैक्षिक स्तर: &nbsp;  <span>{{ $application->study }}  &nbsp;  &nbsp; 6. लिंग (पुरुष/महिला) :  &nbsp;  <span>{{ $application->sex }}</p>
            {{-- <p>8. व्यवसायिक स्तर: __________________9. जाति श्रेणी: __________________</p> --}}
            <p>9. जाति श्रेणी: &nbsp;  <span>{{ $application->caste }}</p>
            <p></p>
            <p>10. राशन कार्ड संख्या: &nbsp;  <span>{{ $application->rashan_card_number }} &nbsp;  &nbsp; 11. आधार कार्ड संख्या: &nbsp;  <span>{{ $application->aadhhar_card_number }}</p>
            <p></p>
            <p>12. बैंक का नाम व शाखा:&nbsp;  <span>{{ $application->bank_name }} &nbsp;  &nbsp; IFSC CODE: &nbsp;  <span>{{ $application->bank_ifsc_code }}</p>
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
    </div>

    <!-- Page 2 -->
    <div class="container">
        <div class="form-section">
            @if ($application->family_yes_no == 'Yes')
                <p>14. लाभार्थी के परिवार का कोई अन्य सदस्य उपरोक्त कार्यालय में पंजीकृत है, यदि हाँ तो विवरण दीजिए:</p>
            <p>नाम: &nbsp;  <span>{{ $application->family_name }} पंजीकरण संख्या: &nbsp;  <span>{{ $application->family_member_number }}</p>
            @endif

            {{-- <p>15. आय प्रमाणपत्र के लिए निम्नलिखित दस्तावेजों की फोटोप्रति संलग्न की जाती है:</p>
            <ul>
                <li>आधार कार्ड</li>
                <li>आय प्रमाण पत्र</li>
                <li>राशन कार्ड</li>
                <li>नरेगा जॉब कार्ड</li>
                <li>मूल निवास प्रमाण पत्र</li>
                <li>पैन कार्ड</li>
                <li>जाति प्रमाण पत्र</li>
                <li>पासपोर्ट</li>
            </ul> --}}
        </div>

        <div class="declaration">
            <p>
                मैं प्रमाणित करता/करती हूं कि उपर्युक्त विवरण मेरे संज्ञान और विश्वास के अनुसार सही है। यदि कोई
                जानकारी गलत पाई जाती है,
                तो कार्यालय को मेरा पंजीकरण रद्द करने का अधिकार होगा।
            </p>
            <p>
                स्थान: ______________________ <br>
                दिनांक: ______________________ <br>
                लाभार्थी के हस्ताक्षर / अंगूठे का निशान:
            </p>
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
                        <th>प्रत्येक नामांकित व्यक्ति को दी जाने वाली राशि</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>
                स्थान: ______________________ <br>
                दिनांक: ______________________ <br>
                लाभार्थी के हस्ताक्षर / अंगूठे का निशान:
            </p>
        </div>

        <div class="office-use">
            <h3 class="title">केवल कार्यालय प्रयोग हेतु</h3>
            <p>रेट सब्सिडी कोड नं.: __________________________</p>
            <p>जिला कोड नं.: __________________________</p>
            <p>पंजीकरण संख्या: __________________________</p>
            <p>पंजीकरण तिथि: __________________________</p>
            <p>
                प्राधिकृत हस्ताक्षर<br>
                परियोजना अधिकारी-संविदा-मुख्य कार्यालय<br>
                समाधान ग्रामीण वेलफेयर एंड इम्प्लॉयमेंट सर्विसेज लिमिटेड<br>
                रेंट ऑफिस मंगलगढ़, भारत सरकार
            </p>
        </div>
    </div>
</section>



@endsection
