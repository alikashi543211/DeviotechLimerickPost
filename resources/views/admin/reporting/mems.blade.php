@extends('layouts.admin')
@section('title', 'Mems Lists')
@section('nav-title', 'Mems Lists')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Mems List</h5>
                </div>
                <div class="col-md-12">
                    <form method="GET" action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-body">
                                            <div class="form-group ">
                                                <div class="col-md-12">
                                                    <label>Date From</label>
                                                    <input type="text" id="" name="from" value="{{$request->from ?? ''}}" placeholder="Start Date" class="form-control datepicker input-lg" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-body">
                                            <div class="form-group ">
                                                <div class="col-md-12">
                                                    <label>Date To</label>
                                                    <input type="text" id="" name="to" value="{{$request->to ?? ''}}" placeholder="End Date" class="form-control datepicker input-lg" autocomplete="off">
                                                </div>  

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
                                    <th>Contact Name</th>
                                    <th>Email Address</th>
                                    <th>Deceased 1st Name</th>
                                    <th>Deceased last Name</th>
                                    <th>Deceased Address 1</th>
                                    <th>Deceased Address 2</th>
                                    <th>Mass Date and time</th>
                                    <th>Booking Number</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mems as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/y') }}</td>
                                    <td>{{ $item->contact_name ?? "N/A" }}</td>
                                    <td>{{ $item->Email_address ?? "N/A" }}</td>
                                    <td>{{ $item->first_name ?? "N/A" }}</td>
                                    <td>{{ $item->surname ?? '' }}</td>
                                    <td>{{ $item->deceased_add1 ?? "N/A" }}</td>
                                    <td>{{ $item->deceased_add2 ?? "N/A" }}</td>
                                    <td>{{ $item->date_time_mems ?? '' }}</td>
                                    <td>{{ $item->Booking_number ?? '' }}</td>
                                    <td>
                                        @if($item->opening == 'New1')
                                            <span class="badge badge-success">New</span>
                                        @else
                                            <span class="badge badge-primary">Existing</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.reporting.mems.change.status',$item->id)}}" title="Click To Change Status">
                                            @if($item->is_active == '1')
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Disabled</span>
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <a href="{{route('admin.reporting.mems.verses',$item->id)}}" rel="tooltip" class="btn btn-warning btn-round" data-original-title="Verses" title="Verses">
                                            Verses
                                        </a> --}}
                                        <a href="{{route('admin.reporting.get_mems_detail',$item->id)}}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Detail" title="Detail">
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
</script>
@endsection