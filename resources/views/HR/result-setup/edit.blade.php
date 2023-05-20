@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{Route('result.store')}}" method="POST">
                            @csrf
                            <div class="modal-body p-0">
                                <div class="container">
                                    
                                    <div class="row d-flex">
                                        <div class="col-12 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package Title:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="package_title" type="text"
                                                placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-12 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-2 col-form-label  pe-2"> Description:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="package_des" type="text"
                                                placeholder="">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-4 d-flex">
                                    <a href="{{ route('result.create') }}"
                                        class="btn btn-outline-danger me-3">Go back</a>
                                    <button type="submit" class="btn btn-outline-success  waves-light">
                                        Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
