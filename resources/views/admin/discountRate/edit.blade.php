@extends('layouts.admin')
@section('title', 'Discount Rate')
@section('nav-title', 'Discount Rate')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form class="validate-form" action="{{ route('admin.discounRate.update', $discountRates->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">edit</i>
            </div>
            <h5 class="card-title">Edit Discount Rate</h5>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-md-6 mt-2">
                <div class="">
                  <label for="internal_maintainer_id">Discount Type</label>
                  <select name="discount_types_id" class="form-control @error('discount_types_id') is-invalid @enderror">
                    <option value="" disabled selected>Select</option>
                    @foreach($discountTypes as $type)
                    <option value="{{$type->id}}" {{ $discountRates->discount_types_id == $type->id ? 'selected' : '' }}>{{$type->type ?? ''}}</option>
                    @endforeach
                  </select>
                  @error('discount_types_id')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="name">Rate (%)</label>
                  <input type="text" name="rate" id="" class="form-control @error('rate') is-invalid @enderror" value="{{ old('rate', $discountRates->rate) }}" autocomplete="off">
                  @error('rate')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer mt-4">
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('js')
@endsection