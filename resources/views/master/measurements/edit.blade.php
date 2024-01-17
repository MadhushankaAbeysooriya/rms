@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Denomination</h1>
            </div>
          </div>
    </section>
  </div>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-teal">
                <div class="card-header">
                    <h3 class="card-title">Update Denomination</h3>
                </div>

                <form role="form" action="{{ route('measurements.update',$measurement->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name Denomination</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control @error('name')
                                is-invalid @enderror" name="name" value="{{ $measurement->name }}" id="name" autocomplete="off">
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            </div>
                        </div>

                    </div>

                        <div class="card-footer">
                            <a href="{{ route('measurements.index') }}" class="btn btn-sm bg-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
                                <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-sm btn-success" >Update</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
  </div>
@endsection
