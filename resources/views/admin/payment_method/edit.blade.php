@extends('layouts.admin')
@section('title', 'Payment Method')
@section('nav-title', 'Payment Method')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form class="validate-form" action="{{ route('admin.payment_method.update', $payment_method->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">edit</i>
            </div>
            <h5 class="card-title">Edit Payment Method</h5>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="name">Payment Method</label>
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $payment_method->name) }}" autocomplete="off">
                  @error('name')
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