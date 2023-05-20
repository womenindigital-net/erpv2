{{-- @extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Starter Page @endslot
@endcomponent

@endsection --}}

@extends('layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboard @endslot
@endcomponent
<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>WID Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                                alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                        <p class="text-muted mb-0 text-truncate">Admin</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">1245</h5>
                                    <p class="text-muted mb-0">Employee</p>
                                </div>
                            </div>
                            {{-- <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earning</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted">This month</p>
                        <h3>&#2547;34,252</h3>
                        <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i>
                            </span> From previous period</p>

                        <div class="mt-4">
                            <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i
                                    class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-4 mt-sm-0">
                            <div id="radialBar-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Income</p>
                                <h4 class="mb-0">&#2547;1,235</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Purchase</p>
                                <h4 class="mb-0">&#2547;35, 723</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Pending Requisition</p>
                                <h4 class="mb-0">16</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Vocational Trade Production/ Sales And Stock Status</h4>
                    <div class="ms-auto">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Action Requests</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list" style="cursor: pointer">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list" style="cursor: pointer">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a
                                        href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Activity</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a
                                        href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">15 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Joined the group “Boardsmanship Forum”
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">12 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “In-Kind Opportunity”
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center mt-4"><a href="javascript: void(0);"
                        class="btn btn-primary waves-effect waves-light btn-sm">View More <i
                            class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Notices</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list" style="cursor: pointer">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list" style="cursor: pointer">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i
                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a
                                        href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16 align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Order ID</th>
                                <th class="align-middle">Billing Name</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    &#2547;400
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    &#2547;380
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    &#2547;384
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    &#2547;412
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                        <label class="form-check-label" for="transactionCheck06"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    &#2547;404
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                        <label class="form-check-label" for="transactionCheck07"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    &#2547;392
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- Transaction Modal -->
{{-- <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
    aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/product/img-7.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">&#2547; 225 x 1</p>
                                    </div>
                                </td>
                                <td>&#2547; 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/product/img-4.png') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">&#2547; 145 x 1</p>
                                    </div>
                                </td>
                                <td>&#2547; 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    &#2547; 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    &#2547; 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}
<!-- end modal -->

<!-- subscribeModal -->
{{-- <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                            <i class="mdi mdi-email-open"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text-primary">Subscribe !</h4>
                            <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay
                                update.</p>

                            <div class="input-group bg-light rounded">
                                <input type="email" class="form-control bg-transparent border-0"
                                    placeholder="Enter Email address" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">

                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="bx bxs-paper-plane"></i>
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end modal -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection