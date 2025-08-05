@extends('software.layouts.header')
@section('software')
<style>
    body {
        font-size: 13px;
        background: #f8f8f8;
    }

    .form-container {
        max-width: 880px;
        margin: 30px auto 30px auto;
        position: relative;
        background: #fff;
        padding: 34px 38px 34px 38px;
        box-sizing: border-box;
        box-shadow: 0 4px 14px #ccc5;
    }

    .form-watermark {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        opacity: 0.11;
        z-index: 0;
        background: no-repeat center;
        background-image: url('{{ asset('assets/img/logo.png') }}');
        pointer-events: none;
    }

    .content {
        position: relative;
        z-index: 1;
    }

    .form-heading {
        text-align: center;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .underline {
        border-bottom: 1px solid #222;
        min-width: 120px;
        display: inline-block;
        /* height: 1em; */
    }

    .underline-short {
        min-width: 70px;
    }

    .underline-mid {
        min-width: 150px;
    }

    .underline-long {
        min-width: 300px;
    }

    .photo-box {
        border: 1px solid #000;
        height: 150px;
        width: 100%;
        text-align: center;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.65rem;
        background: #fff;
        overflow: hidden;
    }

    .small-tick {
        margin-left: 6px;
        margin-right: 3px;
    }

    .form-label {
        font-weight: 500;
    }

    .section-title {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    ol.form-ul {
        font-size: 12px;
        margin-bottom: 2px;
    }

    table.form-edu th,
    table.form-edu td {
        border: 1px solid #333;
        padding: 4px 4px !important;
        font-size: 12px;
    }

    .mt-24 {
        margin-top: 24px;
    }

    .mb-20 {
        margin-bottom: 20px;
    }

    @media print {
        .print-btn {
            display: none !important;
        }

        .form-container {
            box-shadow: none !important;
        }
    }
</style>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Already Applyed</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">>Already Applyed</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">

                    <div class="card-body">
                        <div class="form-container">
                            <div class="form-watermark"></div>
                            <div class="content">
                                <button class="btn btn-primary float-end print-btn mb-2" onclick="window.print()">Print
                                    Form</button>

                                <div class="form-heading">APPLICATION FORM</div>

                                <div class="row mb-2">
                                    <div class="col-4">CONTROL NO.</div>
                                    <div class="col-4 text-center">FOR OFFICE USE ONLY<br>ROLL NO.</div>
                                    <div class="col-4 text-end">SCRUTINY BY</div>
                                </div>

                                <div class="row mb-2 align-items-stretch">
                                    <div class="col-9">
                                        <strong>IMPORTANT INSTRUCTIONS</strong>
                                        <ol class="form-ul">
                                            <li>Please read instructions given in advertisement carefully before filling
                                                in each column.</li>
                                            <li>Use only blue/black ball pen to write or tick the box.</li>
                                            <li>Please tick "Yes" as ✓ and "No" as x.</li>
                                            <li>Put on the column which is not applicable.</li>
                                            <li>The candidate ESM/DESEM/OSP/PHC will be required to both the columns:
                                                their Category as well as Caste which they belong.</li>
                                        </ol>
                                    </div>
                                    <div class="col-2 d-flex flex-column align-items-end justify-content-end">
                                        <div class="photo-box mt-1"> <img src="{{ asset($applyed_job->passport_image) }}"
                                                height="150"></div>
                                    </div>
                                </div>

                                <!-- Advertisement/Category/Post Row without table -->
                                <div class="row mb-2" style="font-size:13px;">
                                    <div class="col-4">
                                        Advertisement No.<br>
                                        <span class="underline underline-mid">{{ $applyed_job->advertisement_no
                                            }}</span>
                                    </div>
                                    <div class="col-4">
                                        Category No<br>
                                        <span class="underline underline-mid">{{ $applyed_job->category_no }}</span>
                                    </div>
                                    <div class="col-4">
                                        Name of the Post<br>
                                        <span class="underline underline-mid">{{ $applyed_job->post_name }}</span>
                                    </div>
                                </div>

                                <div class="mt-2"></div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-label">1. CANDIDATE'S NAME in Capital Letters as given in class
                                            X Certificate (in English)</div>
                                        <span class="underline underline-long"> {{ $applyed_job->candidate_name
                                            }}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-label">2. FATHER'S NAME in Capital Letters as given in class X
                                            Certificate (in English)</div>
                                        <span class="underline underline-long">{{ $applyed_job->father_name }}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-label">3. Date of Birth (DD/MM/YYYY)</div>
                                        <span class="underline underline-short">{{ $applyed_job->dob_day }}</span> DD
                                        <span class="underline underline-short">{{ $applyed_job->dob_month }}</span> MM
                                        <span class="underline underline-short">{{ $applyed_job->dob_year }}</span> YYYY
                                    </div>

                                    <div class="col-6">
                                        <div class="form-label">4. Sex</div>
                                        <span class="small-tick">{{ $applyed_job->sex == 'Male' ? '✓' : '☐' }}</span>
                                        Male
                                        <span class="ms-3 small-tick">{{ $applyed_job->sex == 'Female' ? '✓' : '☐'
                                            }}</span> Female
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-label">5. Category</div>
                                        @foreach (['GEN','SC','BCA','BCB','ESM','DESM'] as $cat)
                                        <span class="small-tick">{{ $applyed_job->category === $cat ? '✓' : '☐'
                                            }}</span> {{ $cat }}
                                        @endforeach
                                        @if (!$applyed_job->phc_type == null)
                                        <span class="small-tick"> ✓ {{ $applyed_job->phc_type}} </span>
                                        @endif)
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-label">6. Are you domicile of Haryana?</div>
                                            Yes {{ $applyed_job->domicial_yes_no == 'Yes' ? '✓' : '☐' }}
                                            No {{ $applyed_job->domicial_yes_no == 'No' ? '✓' : '☐' }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12">
                                            Name: <span class="underline underline-mid">{{ $applyed_job->candidate_name
                                                }}</span><br>
                                            Address: <span class="underline underline-long">{{ $applyed_job->address
                                                }}</span><br>
                                            PIN Code: <span class="underline underline-short">{{ $applyed_job->pincode
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="section-title mt-3 mb-1">9. Educational Qualifications:</div>
                                    <table class="form-edu mb-3" style="width:100%;">
                                        <tr style="background:#eee;">
                                            <th>Educational Qualifications</th>
                                            <th>Years of Passing</th>
                                            <th>Marks Obtained</th>
                                            <th>Total Marks</th>
                                            <th>%age</th>
                                            <th>Division</th>
                                            <th>Name of Board/University</th>
                                            <th>Subjects</th>
                                        </tr>


                                        @foreach ($required_doc as $doc)
                                        <tr>
                                            <td>{{ $doc->education_name }}</td>
                                            <td>{{ $doc->year }}</td>
                                            <td>{{ $doc->marks }}</td>
                                            <td>{{ $doc->total }}</td>
                                            <td>{{ $doc->percent }}</td>
                                            <td>{{ $doc->division }}</td>
                                            <td>{{ $doc->board }}</td>
                                            <td>{{ $doc->subjects }}</td>
                                        </tr>
                                        @endforeach

                                    </table>
                                    <div class="mb-2">10. Any other higher qualification specify: <span
                                            class="underline underline-long">{{ $applyed_job->other_qualification
                                            }}</span></div>
                                    <div class="mb-2">11. Experience: Years <span class="underline"
                                            style="min-width:50px;">{{ $applyed_job->exp_years
                                            }}</span>
                                        Months <span class="underline" style="min-width:50px;">{{
                                            $applyed_job->exp_months
                                            }} </span>
                                        Days <span class="underline" style="min-width:50px;">{{ $applyed_job->exp_days
                                            }}</span>
                                    </div>
                                    <div class="mb-2">12. Visible identification mark on the body of candidate: <span
                                            class="underline underline-long">{{ $applyed_job->visible_mark
                                            }}</span></div>
                                    <div class="section-title mt-4 mb-1">13. Declaration</div>
                                    <div style="font-size:13px;">
                                        I hereby declare that:<br>
                                        (i) All statements made in this application form are true, complete and correct
                                        to
                                        the best of my knowledge and belief. In the event of any information being found
                                        false or incorrect, or ineligibility being detected before or after the
                                        interview/appointment/selection, my candidature may be cancelled and action can
                                        be
                                        taken against me.<br>
                                        (ii) I have never been convicted by Criminal Court.
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            PLACE: <span class="underline underline-short">{{ $applyed_job->place
                                                }}</span><br><br>
                                            DATE: <span class="underline underline-short">{{ $applyed_job->form_date
                                                }}</span>
                                        </div>
                                        <div class="col-6 text-end">

                                            <img src="{{ asset($applyed_job->sign) }}" height="50">
                                            <br>
                                            Signature of Candidate
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection
