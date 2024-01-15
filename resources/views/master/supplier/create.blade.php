@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Suppliers</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item ">Master Data</li>
                  <li class="breadcrumb-item ">Suppliers Management</li>
                  <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
          </div>
    </section>
  </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Create New Suppliers</h3>
                            {{-- <div class="card-tools">
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                            </div> --}}
                        </div>

                        <form role="form" method="POST" action="{{route('suppliers.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Supplier Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('name')
                                        is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" autocomplete="off">
                                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="primary_contact" class="col-sm-2 col-form-label">Primary Contact</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('primary_contact')
                                        is-invalid @enderror" name="primary_contact" value="{{ old('primary_contact') }}" id="primary_contact" autocomplete="off">
                                        <span class="text-danger">@error('primary_contact') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="secondary_contact" class="col-sm-2 col-form-label">Secondary Contact</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('secondary_contact')
                                        is-invalid @enderror" name="secondary_contact" value="{{ old('secondary_contact') }}" id="secondary_contact" autocomplete="off">
                                        <span class="text-danger">@error('secondary_contact') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('address')
                                        is-invalid @enderror" name="address" value="{{ old('address') }}" id="address" autocomplete="off">
                                        <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="reg_no" class="col-sm-2 col-form-label">Registration Number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('reg_no')
                                        is-invalid @enderror" name="reg_no" value="{{ old('reg_no') }}" id="reg_no" autocomplete="off">
                                        <span class="text-danger">@error('reg_no') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vat_no" class="col-sm-2 col-form-label">VAT Registration</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('vat_no')
                                        is-invalid @enderror" name="vat_no" value="{{ old('vat_no') }}" id="vat_no" autocomplete="off">
                                        <span class="text-danger">@error('vat_no') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Ration Date</label>
                                    <div class="col-sm-6">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                                <div class="card-footer">
                                    <a href="{{ url()->previous() }}" class="btn btn-sm bg-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
                                        <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-sm btn-success" >Create</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection