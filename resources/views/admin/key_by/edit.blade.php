@extends('layouts.admin')
@section('title', 'Edit Keyed By')
@section('nav-title', 'Edit Keyed By')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form submit-form" action="{{ route('admin.by_key.save') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Edit Keyed By</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control valid-control" value="{{ $item->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-4">
                        <button type="button" class="btn btn-primary submit-form-btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection