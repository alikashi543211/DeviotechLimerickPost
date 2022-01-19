@extends('layouts.front')
@section('title', 'Home')
@section('css')
<style>
    .text-heading {
        color: #8898aa !important;
    }

    .card-color {
        background-color: #f9f9f9 !important;
        box-shadow: 0px 0px 20px #ccc;
        border-radius: 20px;
    }

    .button-color {
        border-color: #cb302b !important;
        background-color: #cb302b !important;
    }
</style>
@endsection
@section('content')
<div class="header logo">
    {{--<img src="assets/img/logo.png" class="image-fluid">--}}
</div>
<div class="container">
    <div class="form" style="width: 80%;margin-left:auto;margin-right: auto;">
        <div class="text-center text-muted mb-4">
            <h1 class="text-heading mb-0">Thank you!</h1>
            <p class="text-heading ">Your response has been saved.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="footer"></div>
</div>
@endsection

@section('js')
@endsection