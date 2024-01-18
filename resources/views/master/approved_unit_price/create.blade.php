@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Approved Unit Price</h1>
                    </div>
                </div>
        </section>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-teal">
                    <div class="card-header">
                        <h3 class="card-title">Create Approved Unit Price</h3>
                        {{-- <div class="card-tools">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div> --}}
                    </div>

                    <form role="form" method="POST" action="{{route('approved_unit_price.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Year</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('year')
                                        is-invalid @enderror" name="year" value="{{ old('year') }}" id="year"
                                           autocomplete="off">
                                    <span class="text-danger">@error('year') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quarter_id" class="col-sm-2 col-form-label">Quarter</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="quarter_id" id="quarter_id"
                                            autocomplete="off">
                                        <option value="" selected>--Select--</option>
                                        @foreach($quarter as $qtrItem)
                                            <option value="{{$qtrItem->id}}">{{$qtrItem->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('quarter_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="item_id" class="col-sm-2 col-form-label">Item Name</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="item_id" id="item_id"
                                            autocomplete="off">
                                        <option value="" selected>--Select--</option>
                                        @foreach($itemList as $slctItem)
                                            <option value="{{$slctItem->id}}">{{$slctItem->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('item_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brand_id" class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="brand_id" id="brand_id"
                                            autocomplete="off">
                                        <option value="" selected>--Select--</option>
                                        @foreach($brandList as $slctBrand)
                                            <option value="{{$slctBrand->id}}">{{$slctBrand->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('brand_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('price')
                                        is-invalid @enderror" name="price" value="{{ old('price') }}" id="price"
                                           autocomplete="off">
                                    <span class="text-danger">@error('price') {{ $message }} @enderror</span>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <a href="{{ route('approved_unit_price.index') }}" class="btn btn-sm bg-info"><i
                                        class="fa fa-arrow-circle-left"></i> Back</a>
                            <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                            @can('master-item-create')
                                <button type="submit" class="btn btn-sm btn-success">Create</button>
                            @endcan
                        </div>
                </div>

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection

@push('page_scripts')

    <script>

        $(document).ready(function () {
            $('.select2').select2();
        });

    </script>

@endpush
