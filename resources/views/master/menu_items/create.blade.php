@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Menu for Items</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item ">Master Data</li>
                  <li class="breadcrumb-item ">Menu for Items Management</li>
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
                            <h3 class="card-title">Create New Menu for Items</h3>
                            {{-- <div class="card-tools">
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                            </div> --}}
                        </div>

                        <form role="form" method="POST" action="{{route('menu_items.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Menu Name</label>
                                    <div class="col-sm-6">
                                        <select name="menu_id" id="menu_id" class="form-control">
                                            @foreach($menu as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('menu_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Item Name</label>
                                    <div class="col-sm-6">
                                        <select name="item_id" id="item_id" class="form-control">
                                            {{-- @foreach($rationType as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name}}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                        @error('item_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="per_qty" class="col-sm-2 col-form-label">Quantity for Person (g/ml)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control @error('per_qty')
                                        is-invalid @enderror" name="per_qty" value="{{ old('per_qty') }}" id="per_qty" autocomplete="off">
                                        <span class="text-danger">@error('per_qty') {{ $message }} @enderror</span>
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
