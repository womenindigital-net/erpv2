@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-pane active" id="home" role="tabpanel">
                    <section>
                        <form action="{{ route('supplier.update', $record->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="card-body">
                                                    <div class="mb-2 row">
                                                        <label for="example-text-input"
                                                            class="col-md-4 col-form-label text-end">Name</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->name }}" name="name"
                                                                placeholder="Enter your supplier name">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-5 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end">Contact
                                                            Person</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->contact_person }}"
                                                                name="contact_person" type="search"
                                                                placeholder="Contact Person Name Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="example-email-input"
                                                            class="col-md-4 col-form-label text-end">Address</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->address }}" name="address"
                                                                placeholder="Enter Address Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="example-email-input"
                                                            class="col-md-4 col-form-label text-end">City</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->city }}" name="city"
                                                                placeholder="City Name Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-5 row">
                                                        <label for="example-url-input"
                                                            class="col-md-4 col-form-label text-end">State</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->state }}" name="state"
                                                                placeholder="State Name Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="example-text-input"
                                                            class="col-md-4 col-form-label text-end">Phone</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->phone }}" name="phone"
                                                                placeholder="Phone One Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end">Fax</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->fax }}" name="fax"
                                                                placeholder="Enter Fax Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-body">
                                                    <div class="mb-2  row">
                                                        <label class="col-md-4 col-form-label text-end">Type</label>
                                                        <div class="col-md-8">
                                                            <x-input-select name="supplier_type_id"
                                                                :records="$supplierType"
                                                                :selected="$record->supplier_type_id" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="example-text-input"
                                                            class="col-md-4 col-form-label text-end">Designation</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->designation }}"
                                                                name="designation" placeholder="Enter designation here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    {{-- Address --}}
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end">Address Two</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->address_two }}"
                                                                name="address" placeholder="Enter  Address two Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    {{-- Zip Code --}}
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end ">Zip
                                                            Code</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->zip }}" name="zip"
                                                                type="number" placeholder="Enter Zip code here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    {{-- Country --}}
                                                    <div class="mb-5 row">
                                                        <label for="example-search-input text-end"
                                                            class="col-md-4 col-form-label text-end">Country</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->country }}" name="country"
                                                                placeholder="Country Name Here"></x-input-text>
                                                        </div>
                                                    </div>
                                                    {{-- Phone2 --}}
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end">Phone Two</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->phone_two }}"
                                                                name="phone_two" type="number"
                                                                placeholder="Phone Two Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-4 col-form-label text-end">Email</label>
                                                        <div class="col-md-8">
                                                            <x-input-text value="{{ $record->email }}" name="email"
                                                                placeholder="Email Address Here">
                                                            </x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- note --}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input"
                                                            class="col-md-2 col-form-label text-end ps-5">Note</label>
                                                        <div class="col-md-6">
                                                            <x-input-text value="{{ $record->note }}" name="note">
                                                            </x-input-text>
                                                        </div>
                                                        <div class="form-check col-md-3 ms-5">
                                                            <label class="form-check-label ms-3" for="formCheck2">
                                                                Is Active
                                                            </label>
                                                            <input class="form-check-input" type="checkbox"
                                                                name="is_active" @if ($record->is_active)
                                                            checked
                                                            @endif>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- note end --}}
                                            <div class="d-flex justify-content-end ">
                                                <div class="me-2">
                                                    {{-- <button class="btn btn-outline-danger waves-effect waves-light"
                                                        type="submit">RESET</button> --}}
                                                </div>
                                                <div class="ms-2">
                                                    <button class="btn btn-outline-success waves-effect waves-light"
                                                        type="submit">UPDATE</button>
                                                </div>
                                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection