@extends('layouts.header')

@section('content')

    @include('layouts.breadcrumb')

    <!-- About -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">{{ $page_title }}</span>
                            <h2>Instruction of Applicants</h2>
                        </div>

                        <div class="col-md-12">
                            <h2 class="">Special Instructions</h2>
                            <p>
                                The prescribed essential qualification does not entitle a candidate to be called for interview.
                                The Organisation may shortlist the candidates for interview by holding a written examination
                                or on the basis of a rationale criterion to be adopted by the Organisation.
                                The decision of the Organisation in all matters relating to acceptance or rejection of an application,
                                eligibility/suitability of the candidates, mode of, and criteria for selection etc.
                                will be final and binding on the candidates. No inquiry or correspondence will be entertained in this regard.
                            </p>

                            <h2 class="mt-4">General Instructions</h2>
                            <p>
                                A candidate whether he belongs to general category or reserved categories viz. SC, BC, ESM/DESM
                                can submit only one application for particular category of post. Application form complete in
                                all respects duly filled in are only valid.
                            </p>
                            <p>
                                The candidate should give details of all the examinations passed from Matriculation or its equivalent onwards
                                and mention total and percentage of marks obtained and maximum marks in each examination.
                                The candidates are advised to attach photocopy only of essential qualification certificates/diploma/degree
                                with the application form along with Eligibility Certificate in case of DESM and Sports Gradation Certificate
                                in case of Outstanding Sports Person category and PHC Certificate from the Competent Authority.
                            </p>
                            <p>
                                The candidates, who have obtained degrees or Diplomas or Certificates for the various courses from any
                                institution declared fake by the University Grants Commission, shall not be eligible for being considered
                                for recruitment to the posts advertised.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

@endsection
