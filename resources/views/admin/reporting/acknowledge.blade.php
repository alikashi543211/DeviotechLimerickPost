@extends('layouts.admin')
@section('title', 'Acknowledgement Lists')
@section('nav-title', 'Acknowledgement Lists')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Acknowledgement List</h5>
                </div>
                <div class="col-md-12">
                        <form method="GET" action="#">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <label>Date From</label>
                                                <input type="text" id="" name="from" value="{{$request->from ?? ''}}" placeholder="Start Date" class="form-control date_picker input-lg" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <label>Date To</label>
                                                <input type="text" id="" name="to" value="{{$request->to ?? ''}}" placeholder="End Date" class="form-control date_picker input-lg" autocomplete="off">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4" style="margin-top: 16px">
                                        <div class="btn-group mt-3" role="group" aria-label="Basic example">
                                            <button type="submit" class="btn btn-success">Filter</button>
                                            <button type="button" class="btn btn-info reset">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <div class="card-body">
                    <div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Tel Number</th>
                                    <th>Name</th>
                                    <th>Deceased Name</th>
                                    <th>Insertion Date</th>
                                    <th>Final Cost</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acknowledges as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/y') }}</td>
                                    <td>{{$item->contactName ?? "N/A"}}</td>
                                    <td>{{$item->emailAddress ?? "N/A"}}</td>
                                    <td>{{$item->telNumber ?? "N/A"}}</td>
                                    <td>{{$item->admin_name ?? "N/A"}}</td>
                                    <td>{{$item->deceased_name ?? "N/A"}}</td>
                                    <td>{{ date('d/m/y', strtotime($item->Insertion_Date_Ack)) ?? "N/A"}}</td>
                                    <td>{{ round($item->final_cost_ack, 2) ?? "N/A"}}</td>
                                    <td>
                                        @if(is_null($item->keyed_by))
                                            <span class="badge badge-warning"><small>To Key</small></span>
                                        @else
                                            <span class="badge badge-success"><small>Keyed</small></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.reporting.get_ack_detail',$item->id)}}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Detail" title="Detail">
                                            Detail
                                        </a>
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
@section('js')
<script>
  $('.reset').click(function() {
    var uri = window.location.toString();
    if (uri.indexOf("?") > 0) {
      var clean_uri = uri.substring(0, uri.indexOf("?"));
      window.history.replaceState({}, document.title, clean_uri);
      location.reload();
  }
});

$( function() {
    $( ".date_picker" ).datepicker({ dateFormat: 'dd/mm/y' }).val();
} );
</script>
@endsection