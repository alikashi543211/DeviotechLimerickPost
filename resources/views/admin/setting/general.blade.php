@extends('layouts.admin')
@section('title', 'Setting')

@section('css')
    <style>
        form .form-group select.form-control {
            position: inherit;
            top: 0;
        }
    </style>
@endsection

@section('nav-title', 'Setting')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.setting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">General Settings</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Dropbox Access Token</label>
                                    <input type="text" name="dropbox_access_token" class="form-control" value="{{ $setting['dropbox_access_token'] ?? '' }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-group">
                                    <label for="">Mems Status Day</label>
                                    <select name="mems_status_day" id="" class="form-control @error('discount_types_id') is-invalid @enderror">
                                        <option value="" disabled selected>Select</option>
                                        @foreach(get_days() as $day)
                                            <option value="{{ $day }}" @if(isset($setting['mems_status_day']) && $setting['mems_status_day'] == $day) selected @endif>{{ $day }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
