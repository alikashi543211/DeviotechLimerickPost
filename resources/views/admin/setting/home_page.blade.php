@extends('layouts.admin')
@section('title', 'Setting')
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
                        <h5 class="card-title">Price List</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="photo_cost_1inch_1st">One 1-inch pic (Odd)</label>
                                    <input type="text" name="photo_cost_1inch_1st" id="photo_cost_1inch_1st" class="form-control" value="{{ $setting['photo_cost_1inch_1st'] }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="photo_cost_1    inch_2nd">One 1-inch pic (Even)</label>
                                    <input type="text" name="photo_cost_1inch_2nd" id="photo_cost_1inch_2nd" class="form-control" value="{{ $setting['photo_cost_1inch_2nd'] }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="photo_cost_2inch"> One 2-inch pic</label>
                                    <input type="text" name="photo_cost_2inch" id="photo_cost_2inch" class="form-control" value="{{ $setting['photo_cost_2inch'] }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="cost_per_word_mems">Subsequent verses (per word) - charge for names</label>
                                    <input type="text" name="cost_per_word_mems" id="cost_per_word_mems" class="form-control" value="{{ $setting['cost_per_word_mems'] }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="cost_per_word_acknowlede">First verse(per word) - charge for names</label>
                                    <input type="text" name="cost_per_word_acknowlede" id="cost_per_word_acknowlede" class="form-control" value="{{ $setting['cost_per_word_acknowlede'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="cost_first_80_word_acknowlede">Cost First 80 word (Auro)</label>
                                    <input type="text" name="cost_first_80_word_acknowlede" id="cost_first_80_word_acknowlede" class="form-control" value="{{ $setting['cost_first_80_word_acknowlede']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="vat_rate_build_into_price">VAT Rate built into prices</label>
                                    <input type="text" name="vat_rate_build_into_price" id="vat_rate_build_into_price" class="form-control" value="{{ $setting['vat_rate_build_into_price'] }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="opening_cost">Opening Cost</label>
                                    <input type="text" name="opening_cost" id="opening_cost" class="form-control" value="{{ $setting['opening_cost'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection