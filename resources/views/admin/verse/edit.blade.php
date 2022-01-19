@extends('layouts.admin')
@section('title', 'Library Verse')
@section('nav-title', 'Library Verse')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form class="validate-form" action="{{ route('admin.library_Verse.update', $library_verse->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">edit</i>
            </div>
            <h5 class="card-title">Edit Library Verse</h5>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="name">Number</label>
                  <input type="text" name="number" id="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number', $library_verse->number) }}" autocomplete="off">
                  @error('number')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="name">Words</label>
                  <input type="number" name="words" id="words" class="form-control @error('words') is-invalid @enderror" value="{{ old('words', $library_verse->words) }}" autocomplete="off">
                  @error('words')
                  <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="number">Price</label>
                  <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $library_verse->price) }}" autocomplete="off">
                  @error('price')
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