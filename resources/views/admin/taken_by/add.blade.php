@extends('layouts.admin')
@section('title', 'Taken By')
@section('nav-title', 'Taken By')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form class="validate-form" action="{{ route('admin.taken_by.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">add</i>
            </div>
            <h5 class="card-title">Add Taken By</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="name">Taken By</label>
                  <input type="text" name="taken_by" id="taken_by" class="form-control @error('taken_by') is-invalid @enderror" value="{{ old('taken_by') }}" autocomplete="off">
                  @error('taken_by')
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