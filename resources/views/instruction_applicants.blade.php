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
                        <span class="sub-title">{{ $page_title }}</span>/
                        <h4>आवेदकों के लिए निर्देश</h4>
                    </div>

                    <div class="col-md-12">
                        <h5 class="">विशेष निर्देश</h5>
                        <p>
                            निर्धारित आवश्यक योग्यता केवल साक्षात्कार के लिए बुलाए जाने की पात्रता नहीं देती।
                            संगठन लिखित परीक्षा आयोजित करके या किसी अन्य उचित मानदंड के आधार पर उम्मीदवारों की
                            शॉर्टलिस्टिंग कर सकता है।
                            आवेदन की स्वीकृति या अस्वीकृति, उम्मीदवार की पात्रता/उपयुक्तता, चयन की प्रक्रिया और मानदंड
                            आदि से संबंधित सभी मामलों में
                            संगठन का निर्णय अंतिम और बाध्यकारी होगा। इस संबंध में कोई भी पूछताछ या पत्राचार स्वीकार नहीं
                            किया जाएगा।
                        </p>

                        <h5 class="mt-4">सामान्य निर्देश</h5>
                        <p>
                            कोई भी उम्मीदवार, चाहे वह सामान्य वर्ग का हो या आरक्षित वर्ग जैसे SC, BC, ESM/DESM से
                            संबंधित हो, किसी एक पद के लिए
                            केवल एक ही आवेदन कर सकता है। पूर्ण रूप से भरा हुआ और सभी आवश्यक विवरणों से युक्त आवेदन पत्र
                            ही वैध माने जाएंगे।
                        </p>
                        <p>
                            उम्मीदवार को मैट्रिकुलेशन या इसके समकक्ष से लेकर अब तक की सभी परीक्षाओं का विवरण देना होगा
                            तथा प्रत्येक परीक्षा में प्राप्त कुल अंक, प्रतिशत और अधिकतम अंक स्पष्ट रूप से अंकित करने
                            होंगे।
                            उम्मीदवारों को केवल आवश्यक योग्यता की प्रमाणपत्रों/डिप्लोमा/डिग्री की फोटो कॉपी संलग्न करनी
                            चाहिए,
                            DESM श्रेणी के लिए पात्रता प्रमाणपत्र, विशिष्ट खिलाड़ी श्रेणी के लिए खेल ग्रेडेशन प्रमाणपत्र
                            और विकलांग उम्मीदवारों के लिए सक्षम प्राधिकारी से प्राप्त PHC प्रमाणपत्र भी आवेदन पत्र के
                            साथ संलग्न करना आवश्यक है।
                        </p>
                        <p>
                            वे उम्मीदवार, जिन्होंने अपनी डिग्री/डिप्लोमा/प्रमाणपत्र ऐसे संस्थानों से प्राप्त किए हैं
                            जिन्हें विश्वविद्यालय अनुदान आयोग (UGC) द्वारा फर्जी घोषित किया गया है, वे इस विज्ञापित पद
                            हेतु पात्र नहीं माने जाएंगे।
                        </p>
                    </div>
                </div>
                <div class="about-content">
                    <div class="section-title">
                        {{-- <span class="sub-title">{{ $page_title }}</span> --}}
                        <h4>Instruction of Applicants</h4>
                    </div>

                    <div class="col-md-12">
                        <h5 class="">Special Instructions</h5>
                        <p>
                            The prescribed essential qualification does not entitle a candidate to be called for
                            interview.
                            The Organisation may shortlist the candidates for interview by holding a written examination
                            or on the basis of a rationale criterion to be adopted by the Organisation.
                            The decision of the Organisation in all matters relating to acceptance or rejection of an
                            application,
                            eligibility/suitability of the candidates, mode of, and criteria for selection etc.
                            will be final and binding on the candidates. No inquiry or correspondence will be
                            entertained in this regard.
                        </p>

                        <h5 class="mt-4">General Instructions</h5>
                        <p>
                            A candidate whether he belongs to general category or reserved categories viz. SC, BC,
                            ESM/DESM
                            can submit only one application for particular category of post. Application form complete
                            in
                            all respects duly filled in are only valid.
                        </p>
                        <p>
                            The candidate should give details of all the examinations passed from Matriculation or its
                            equivalent onwards
                            and mention total and percentage of marks obtained and maximum marks in each examination.
                            The candidates are advised to attach photocopy only of essential qualification
                            certificates/diploma/degree
                            with the application form along with Eligibility Certificate in case of DESM and Sports
                            Gradation Certificate
                            in case of Outstanding Sports Person category and PHC Certificate from the Competent
                            Authority.
                        </p>
                        <p>
                            The candidates, who have obtained degrees or Diplomas or Certificates for the various
                            courses from any
                            institution declared fake by the University Grants Commission, shall not be eligible for
                            being considered
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
