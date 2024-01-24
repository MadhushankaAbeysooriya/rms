@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Receipt for - {{ $demand_from_location->demand_ref }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Reciept from Locations</li>
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
                        <h3 class="card-title">Create New Reciept</h3>
                    </div>

                    <form role="form" method="POST"
                          action="{{route('receipt_from_locations.store',$demand_from_location->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="year" class="col-sm-1 col-form-label">Year</label>
                                <label for="year"
                                       class="col-sm-3 col-form-label">{{ $demand_from_location->year }}</label>

                                <label for="year" class="col-sm-1 col-form-label">Date</label>
                                <label for="year"
                                       class="col-sm-3 col-form-label">{{ \Carbon\Carbon::parse($demand_from_location->request_date)->format('Y-m-d') }}</label>

                                <label for="year" class="col-sm-1 col-form-label">Supplier</label>
                                <label for="year"
                                              class="col-sm-3 col-form-label">{{ $demand_from_location->supplier->name }}</label>

                            </div>

                            @foreach ($demand_from_location->demandfromlocationitems as $demandfromlocationitem)
                            <div class="form-group row mt-4">
                                <label class="col-sm-1 col-form-label" for="item_id[]">Item</label>
                                <div class="col-sm-3">
                                    <select name="item_id[]" id="item_id" class="form-control select2">
                                        <option value="">Please Select</option>
                                        @foreach($items as $item)
                                            <option value="{{ $item->id }}" {{ $demandfromlocationitem->item_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('item_id.*')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <label for="qty" class="col-sm-1 col-form-label">Qty</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control @error('qty.*') is-invalid @enderror" name="qty[]" value="{{ $demandfromlocationitem->qty }}" id="qty" autocomplete="off" min="{{ date('Y') }}" max="3000">
                                    <span class="text-danger">@error('qty.*') {{ $message }} @enderror</span>
                                </div>

                                <label class="col-sm-1 col-form-label" for="brand_id">Brand</label>
                                <div class="col-sm-3">
                                    <select name="brand_id[]" id="brand_id" class="form-control select2">
                                        <option value="">Please Select</option>
                                        @foreach($brands as $item)
                                            <option value="{{ $item->id }}" {{ $demandfromlocationitem->brand_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('brand_id.*')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group row" style="display: none;">
                                    <label class="col-sm-2 col-form-label" for="receipt_type_id">Receipt Type</label>
                                    <div class="col-sm-6">
                                        <select name="receipt_type_id[]" id="receipt_type_id" class="form-control select2">
                                            <option value="">Please Select</option>
                                            @foreach($receiptTypes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('receipt_type_id.*')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        @endforeach

                        </div>

                        <div class="card-footer">
                            <a href="{{ route('demand_from_locations.index') }}" class="btn btn-sm bg-info"><i
                                        class="fa fa-arrow-circle-left"></i> Back</a>
                            <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-sm btn-success">Create</button>
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

            // Store the initial values
            var initialItemId = $('#item_id').val();
            var initialQty = $('#qty').val();
            console.log('ïnitial' + initialItemId);
            $('#receipt_type_id').val(2).trigger('change');

            // Add an event listener to the item_id and qty inputs
            $('#item_id, #qty').on('change', function () {
                // Get the current values
                var currentItemId = $('#item_id').val();
                var currentQty = $('#qty').val();
                console.log(currentItemId);

                // Check if values have changed
                if (currentItemId !== initialItemId || currentQty !== initialQty) {
                    // Handle the update demand logic here
                    $('#receipt_type_id').val(1).trigger('change');
                } else {
                    $('#receipt_type_id').val(2).trigger('change');
                }
            });
        });


    </script>

@endpush
