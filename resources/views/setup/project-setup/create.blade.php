@extends('layouts.master')
@section('title')
    @lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab Panes One -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <form action="{{ route('project.store') }}" method="POST">
                                @csrf
                                <div class="modal-body p-0 ">
                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <div class="row pb-3">
                                                <div class="col-6 d-flex">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Name:</label>
                                                    <div class="col-md-10">
                                                        <x-input-text placeholder="Name" name="title"></x-input-text>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Seq.No:</label>
                                                    <div class="col-md-10">
                                                        <x-input-text placeholder="Seq No" name="order_no" type="number">
                                                        </x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pb-3">
                                                <div class="col-6 d-flex">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">Tier
                                                        No:</label>
                                                    <div class="col-md-10">
                                                        <x-input-text placeholder="Tier No" name="tier_no" type="number">
                                                        </x-input-text>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <label class="col-2 col-form-label"> Parent:</label>
                                                    <div class="col-10">
                                                        <x-input-select name="parent_id" :records="$parent_id"
                                                            targetColumn='title' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pb-3">
                                                <div class="col-12 d-flex">
                                                    <label for="example-date-input"
                                                        class="col-md-1 col-form-label">Description:</label>
                                                    <div class="col-md-11">
                                                        <x-input-textarea name="description"></x-input-textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-outline-success  waves-light">
                                                Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- Tab Panes Two -->
                        <div class="tab-pane" id="profile" role="tabpanel1">
                            <livewire:project-setup-list />
                        </div>
                    </div>
                </div>
            </div>
    </div @endsection
