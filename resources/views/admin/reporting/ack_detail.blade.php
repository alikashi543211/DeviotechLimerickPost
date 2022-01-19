@extends('layouts.admin')
@section('title', 'Acknowledgement Detail')
@section('css')
    <style>
        .show_message{
            cursor: pointer !important;
        }
    </style>
@endsection
@section('nav-title', 'Acknowledgement Detail')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="toolbar text-right">
                                <a href="javascript:void(0);" class="btn btn-success btn-round edit_ack_btn">Edit</a>
                                <a href="{{ route('admin.reporting.acknowledge') }}" class="btn btn-info btn-round">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Contact </th>
                                    <td>{{ $visitor->contactName ?? 'N / A' }}</td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td>{{ $visitor->emailAddress ?? 'N / A' }}</td>
                                </tr>
                                <tr>
                                    <th>Tel Number</th>
                                    <td>{{$visitor->telNumber ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$visitor->admin_name ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased Name</th>
                                    <td>{{$visitor->deceased_name ?? ""}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased Address</th>
                                    <td>{{$visitor->address ?? ""}}</td>
                                </tr>
                                <tr>
                                    <th>Insertion Date</th>
                                    <td>{{ date('d/m/y', strtotime($visitor->Insertion_Date_Ack)) ?? "N/A"}}</td>
                                </tr>
                                <tr>
                                    <th>Mass Detail Ack ?</th>
                                    <td>
                                        @if($visitor->mass_detail_ack == "0")
                                            N / A
                                        @else
                                            <span class="badge badge-success">Yes</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mass Date and time </th>
                                    <td>
                                        @if($visitor->mass_detail_ack == "0")
                                            {{$visitor->date_time_ack ?? ""}}
                                        @else
                                            N / A
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Church</th>
                                    <td>
                                        @if($visitor->mass_detail_ack == "0")
                                            {{$visitor->chruch_ack ?? 'N / A'}}
                                        @else
                                            N / A
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Images?</th>
                                    <td>
                                        {{ $visitor->add_img_ack }}
                                    </td>
                                </tr>

                                @if($visitor->add_img_ack == 'Yes')
                                    @if($visitor->size_ack == "1")
                                        <tr>
                                            <th>1 inches image?</th>
                                            <td>
                                                Yes
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Number of 1 inches image</th>
                                            <td>{{$visitor->total_number_1_ack ?? '0'}}</td>
                                        </tr>
                                        <tr>
                                            <th>1 inches Image Total cost</th>
                                            <td>{{$visitor->images_cost_1_ack ?? '0'}}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <th>1 inches image?</th>
                                            <td>
                                                No
                                            </td>
                                        </tr>
                                    @endif
                                    @if($visitor->size_ack == "2")
                                        <tr>
                                            <th>2 inches image? </th>
                                            <td>
                                                Yes
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Number of 2 inches image</th>
                                            <td>{{ $visitor->total_number_2_ack ?? '0' }}</td>
                                        </tr>
                                        <tr>
                                            <th>2 inches Image Total cost</th>
                                            <td>{{$visitor->images_cost_2_ack ?? '0'}}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <th>2 inches image?</th>
                                            <td>
                                                No
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                                <tr>
                                    <th>Words cost</th>
                                    <td>{{$visitor->wordsCost ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Pictures cost</th>
                                    <td>{{$visitor->picCost ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Pre discount cost</th>
                                    <td>{{$visitor->Total_amount_1_ack ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Discount yes/ no</th>
                                    @if($visitor->discount_ack == "discount_yes")
                                        <td>
                                            <span class="badge badge-success">Yes</span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge badge-danger">No</span>
                                        </td>
                                    @endif
                                </tr>
                                @if($visitor->discount_ack == "discount_yes")
                                    <tr>
                                        <th>Discount type</th>
                                        <td>{{$visitor->discount_type ?? 'N / A'}}</td>
                                    </tr>
                                    <tr>
                                        <th>Discount rate</th>
                                        <td>{{$visitor->discount_rate ?? 'N / A'}} %</td>
                                    </tr>
                                    <tr>
                                        <th>Discount amount </th>
                                        <td>{{$visitor->discount_amount ?? 'N / A'}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Final cost</th>
                                    <td>{{$visitor->final_cost_ack ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Keyed by</th>
                                    <td>{{$visitor->keyed_by ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>
                                        @if(isset($visitor->message))
                                            <span class="badge badge-primary show_message" data-message="{{ $visitor->message }}" data-title="Message">
                                                Click To Show
                                            </span>
                                        @else
                                            N / A
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Special Instructions</th>
                                    <td>
                                        @if(isset($visitor->spcl_ins_free_ack))
                                            <span class="badge badge-primary show_message" data-message="{{ $visitor->spcl_ins_free_ack }}" data-title="Special Instructions">
                                                Click To Show
                                            </span>
                                        @else
                                            N / A
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment Method</th>
                                    <td>{{$visitor->ack_payment_method ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Receipt Number</th>
                                    <td>{{$visitor->ack_receipt_number ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Booking Number</th>
                                    <td>{{$visitor->ack_booking_number ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Taken By the Counter</th>
                                    <td>{{$visitor->ack_counter_taken ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Machine Number</th>
                                    <td>{{$visitor->ack_machine_no ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>CC Receipt Number</th>
                                    <td>{{$visitor->ack_CC_receipt_number ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>M.C. No</th>
                                    <td>{{$visitor->ack_m_c_no ?? 'N / A'}}</td>
                                </tr>
                                <tr>
                                    <th>Comment</th>
                                    <td>{{$visitor->ack_comment ?? 'N / A'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_ack_modal">

</div>

<!-- Description Modal -->
<div class="modal fade" id="descriptionModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="data-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="description"></p>
                    </div>
                </div>
            </div>
            
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<!-- End Description Modal -->
@endsection

@section('js')
    <script>
        @if(Session::has('old_input'))
            updateKeyedBy();
        @endif
        $(document).on("click", ".edit_ack_btn", function(){
            updateKeyedBy();
        });

        function updateKeyedBy()
        {
            $.get("{{ route('admin.reporting.load.edit.acknowledgement', ['id'=>$id]) }}", function(response){
                $(document).ready(function() {
                    $('.select2').select2({
                        width: '100%'
                    });
                });
                $("#edit_ack_modal").html(response);
                $("#edit_ack_modal").modal("show");
            }); 
        }
        
        // Show Description Modal
        $(document).on("click", ".show_message", function(){
            description = $(this).attr("data-message");
            data_title = $(this).attr("data-title");
            $("#description").html(description);
            $("#data-title").html(data_title);
            $("#descriptionModal").modal("show");
        });
    </script>
@endsection