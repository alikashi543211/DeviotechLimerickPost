@extends('layouts.admin')
@section('title', 'Staff')
@section('nav-title', 'Staff')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Staff List</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="toolbar text-right">
                                <a href="{{route('admin.visitor_link.add')}}" class="btn btn-success">+ Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th width="60%">Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visitors as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name ?? "N/A"}}</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm link mt-1" value="{{ Request::getSchemeAndHttpHost() }}?name={{ $item->name ?? '' }}" readonly style="border-radius:6px">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-primary btn-round copy-link">Copy</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.visitor_link.edit',$item->id)}}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.visitor_link.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
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
@section('js')
<script type="text/javascript">
    $(document).on("click",".copy-link", function(event) {
        var elm = $(this).closest('td').find('.link');
        $(elm).select();
        document.execCommand("copy");
        $('.copy-link').text('Copy');
        $(this).text('Copied');
    });
</script>
@stop