@extends('super_admin.layouts.header')
@section('super')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">New Payments</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">New Payments</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            @if($new_payment_list->count() > 0)
            @foreach ($new_payment_list as $list)
            <div class="col-xl-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-dark">
                        <h6 class="card-title mb-0 text-white">
                            UTR - {{ $list->payment_utr }}
                        </h6>
                    </div>

                    <div class="card-body text-center">
                        {{-- ✅ Image in full view on click --}}
                        <a href="{{ asset($list->payment_proof) }}" target="_blank">
                            <img class="mb-3 rounded border" src="{{ asset($list->payment_proof) }}" width="200"
                                alt="Payment Proof" />
                        </a>

                        <div class="row text-start">
                            <div class="col-12 col-md-6 mb-2">
                                <p><strong>नाम:</strong> {{ $list->name }}</p>
                                <p><strong>पिता का नाम:</strong> {{ $list->father_name }}</p>

                                <p><strong>लिंग:</strong> {{ $list->sex }}</p>
                            </div>

                            <div class="col-12 col-md-6 mb-2">
                                <p><strong>पता:</strong> {{ $list->address }}</p>

                                <p><strong>शुल्क (Fees):</strong> ₹ 1100/-</p>
                                <p><strong>शुल्क स्थिति:</strong>
                                    @if($list->payment_status == 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($list->payment_status == 'completed')
                                    <span class="badge bg-success">Paid</span>
                                    @else
                                    <span class="badge bg-secondary">Review</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end gap-2">
                        <a href="{{ route('super.membership.update.payment.status', ['id' => $list->id, 'status' => 'failed']) }}"
                            onclick="return confirm('क्या आप वाकई इसे अस्वीकृत करना चाहते हैं?')"
                            class="btn btn-danger btn-sm">
                            <i class="ri-close-line"></i> Failed
                        </a>

                        <a href="{{ route('super.membership.update.payment.status', ['id' => $list->id, 'status' => 'completed']) }}"
                            onclick="return confirm('क्या आप वाकई इसे स्वीकार करना चाहते हैं?')"
                            class="btn btn-success btn-sm">
                            <i class="ri-check-line"></i> Accept
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 text-center py-5">
                <h5 class="text-muted">कोई रिकॉर्ड नहीं मिला।</h5>
            </div>
            @endif


        </div>



    </div>
</div>

@endsection
