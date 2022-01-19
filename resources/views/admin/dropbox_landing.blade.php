@extends('layouts.admin')
@section('title', 'Dropbox')
@section('nav-title', 'Dropbox')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="bold">Congratulations!</h1>
            <h5 class="bold">You have successfully connected your dropbox with Limerick</h5>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary bold">Go to Dashboard</a>
        </div>
    </div>
</div>
@endsection
