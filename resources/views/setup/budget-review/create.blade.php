@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
    <style>
        .over {
            overflow: auto;
            width: 4000px;
        }

        .wid {
            width: 3950px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Budget Review Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Budget Review List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active " id="home" role="tabpanel ">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ms-0">
                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted mt-4">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <form action="{{ route('budget-review.store') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12">
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-3 p-0 d-flex align-items-center">
                                                                                        <h6>Project</h6>
                                                                                    </div>
                                                                                    <div class="col-7">
                                                                                        <x-input-select name="project_id"
                                                                                            :records="$project_id" targetColumn="title" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-3 p-0 d-flex align-items-center">
                                                                                        <h6>Start Date</h6>
                                                                                    </div>
                                                                                    <div class="col-7">
                                                                                        <div class="input-group"
                                                                                            id="datepicker1">
                                                                                            <x-input-text type="date"
                                                                                                name="date"
                                                                                                placeholder="">
                                                                                            </x-input-text>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12">
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-2 p-0 d-flex align-items-center">
                                                                                        <h6>Name</h6>
                                                                                    </div>
                                                                                    <div class="col-7">
                                                                                        <x-input-text name="name"
                                                                                            placeholder="">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-2 p-0 d-flex align-items-center">
                                                                                        <h6>End Date</h6>
                                                                                    </div>
                                                                                    <div class="col-7">
                                                                                        <div class="input-group"
                                                                                            id="datepicker1">
                                                                                            <x-input-text type="date"
                                                                                                name="end_date"
                                                                                                placeholder="">
                                                                                            </x-input-text>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <div class="mb-3 mt-4 d-flex justify-content-end">
                                                                    <div>
                                                                        <h5>Requested Amount</h5>
                                                                    </div>
                                                                    <div><span id="totlRqstdAmnt"
                                                                            class="purchaseInfo ms-2 border p-1">NaN</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="mb-3 mt-4 d-flex justify-content-end">
                                                                    <div>
                                                                        <h5>Reviewed Amount</h5>
                                                                    </div>
                                                                    <div><span id="totlRqstdAmnt"
                                                                            class="purchaseInfo ms-2 border p-1">1</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered mt-5 p-0 dt-responsive w-100">
                                                            <thead>
                                                                <tr class="table-primary">
                                                                    <th>SL</th>
                                                                    <th>Budget Head</th>
                                                                    <th>Account</th>
                                                                    <th>Approved Amount</th>
                                                                    <th>Expense Amount</th>
                                                                    <th>Reserve Amount</th>
                                                                    <th>Remaining Amount</th>
                                                                    <th>Reviewed Amount</th>
                                                                    <th>Note</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="p-0"><input type="number"
                                                                            class="form-control border-0"></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="p-0"><input type="number"
                                                                            class="form-control border-0"></td>
                                                                    <td></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="mb-3 mt-4 ">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-4 p-0 d-flex align-items-center justify-content-center">
                                                                            <div class="mt-2">
                                                                                <h5>Note</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <x-input-text name="note" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3 mt-4 ">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-6 p-0 d-flex align-items-end justify-content-center">
                                                                            <div class="mt-2">
                                                                                <h5>Is Active</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 form-check-danger mt-2">
                                                                            <input name="isactive" class="form-check-input"
                                                                                type="checkbox" id="formCheckcolor5">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-outline-success  waves-light"> Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane mt-4" id="profile" role="tabpanel">
                            <livewire:budget-review-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
