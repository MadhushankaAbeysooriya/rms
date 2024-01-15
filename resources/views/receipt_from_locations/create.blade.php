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

                                <label for="year" class="col-sm-1 col-form-label">Item</label>
                                <label for="year"
                                       class="col-sm-3 col-form-label">{{ $demand_from_location->item->name }}</label>


                            </div>


                            <div class="form-group row">

                                <label for="year" class="col-sm-1 col-form-label">Supplier</label>
                                <label for="year"
                                       class="col-sm-3 col-form-label">{{ $demand_from_location->supplier->name }}</label>

                                <label for="year" class="col-sm-1 col-form-label">Qty</label>
                                <label for="year"
                                       class="col-sm-3 col-form-label">{{ $demand_from_location->qty }} {{ $demand_from_location->item->measurement->name }}</label>

                                <label for="year" class="col-sm-1 col-form-label"></label>
                                <label for="year" class="col-sm-3 col-form-label"></label>

                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="item_id">Item</label>
                                <div class="col-sm-6">
                                    <select name="item_id" id="item_id" class="form-control select2">
                                        <option value="">Please Select</option>
                                        @foreach($items as $item)
                                            <option value="{{ $item->id }}" {{$demand_from_location->item_id == $item->id ? 'selected':''}}>
                                                {{ $item->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('item_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="supplier_id">Supplier</label>
                                <div class="col-sm-6">
                                    <select name="supplier_id" id="supplier_id" class="form-control select2">
                                        <option value="">Please Select</option>
                                        @foreach($suppliers as $item)
                                            <option value="{{ $item->id }}" {{$demand_from_location->supplier_id == $item->id ? 'selected':''}}>
                                                {{ $item->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="display: none;">
                                <label class="col-sm-2 col-form-label" for="receipt_type_id">Receipt Type</label>
                                <div class="col-sm-6">
                                    <select name="receipt_type_id" id="receipt_type_id" class="form-control select2">
                                        <option value="">Please Select</option>
                                        @foreach($receiptTypes as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control @error('qty')
                                        is-invalid @enderror" name="qty" value="{{ $demand_from_location->qty }}"
                                           id="qty" autocomplete="off"
                                           min="{{ date('Y') }}" max="3000">
                                    <span class="text-danger">@error('qty') {{ $message }} @enderror</span>
                                </div>
                                <label for="year"
                                       class="col-sm-2 col-form-label">{{ $demand_from_location->item->measurement->name }}</label>
                            </div>


                            <div class="form-group row">
                                <label for="receipt_date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control @error('receipt_date')
                                        is-invalid @enderror" name="receipt_date" value="{{ old('receipt_date') }}"
                                           id="receipt_date" autocomplete="off"
                                           min="{{ date('YYY-mm-dd') }}" max="3000">
                                    <span class="text-danger">@error('receipt_date') {{ $message }} @enderror</span>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <a href="{{ route('annual_demands.store') }}" class="btn btn-sm bg-info"><i
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

        // $(document).ready(function() {
        //     $('.select2').select2();
        // });

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
