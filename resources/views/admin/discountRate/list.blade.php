@extends('layouts.admin')
@section('title', 'Discount Type')
@section('nav-title', 'Discount Type')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Discount Type List</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="toolbar text-right">
                                <a href="{{route('admin.discounRate.add')}}" class="btn btn-success">+ Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($discountRates as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->discountType->type ?? "N/A"}}</td>
                                    <td>{{$item->rate ?? "N/A"}}%</td>
                                    <td>
                                        <a href="{{route('admin.discounRate.edit',$item->id)}}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.discounRate.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection