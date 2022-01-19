@extends('layouts.front')
@section('title', 'Home')

@section('css')
<style>
    .form-control.error {
        border-color: #f44336;
    }
    
    .error {
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #f44336;
    }
    .xdsoft_disabled {
        display: none !important; 
    }
    .alert-danger{
        color: red !important;
        border-color: red !important;
        background: none !important;
    }
    .rmv_2{
        z-index: 1 !important;
    }
    .grey_bg{
        background: #fbfbfd !important;
    }
</style>
@endsection
@section('content')
<div class="header logo">
    <img src="assets/img/logo.png" class="image-fluid ">
</div>
<div class="container">
    <div class="form" id="append_form">
        <form action="{{route('form.store')}}" id="limerick_form" method="post" enctype="multipart/form-data">
            @csrf
            <div id="toastr" class="success">Data saved</div>
            {{-- Header Section --}}
            <div class="accordion header_form" id="formDate">
                
            </div>

            {{-- First From Ack --}}
            <div class="accordion form-2 acknowledgement_form" id="formValues-2">
                <!-- Acknowledgement Form Here -->
            </div>

            {{-- Second form Mems --}}
            <div class="accordion form-1 hidden in_mems_form" id="formValues">
                <!-- In Mems Form Here -->
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="footer"></div>
</div>
@endsection

@section('js')
    @include('front.components.form_script')
    <script>
        load_header_form("{{ route('form.load.header_form') }}?name="+'{{ request()->name }}');
        load_acknowledgement_form("{{ route('form.load.acknowledgement_form') }}");
        initalize_datepickers();
        load_in_mems_form("{{ route('form.load.in_mems_form') }}");
        initalize_datepickers();
    </script>
    
@endsection