@extends('layouts.admin')
@section('title', 'Mems Detail')
@section('nav-title', 'Mems Detail')
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
                                <a href="{{ route('admin.reporting.mems') }}" class="btn btn-info btn-round">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Edition </th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Contact Name</th>
                                    <td>{{$visitor->contact_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <td>{{$visitor->Email_address ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased 1st Name</th>
                                    <td>{{$visitor->first_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased last Name</th>
                                    <td>{{$visitor->surname ?? ""}}</td>
                                </tr>
                                <tr>
                                    <th>Anniversary Number</th>
                                    <td>{{ $visitor->aniversary_number ?? ""}}</td>
                                </tr>
                                <tr>
                                    <th>Date of Anniversary</th>
                                    <td>{{$visitor->aniversary_date ?? ""}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased Address 1</th>
                                    <td>{{$visitor->deceased_add1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Deceased Address 2</th>
                                    <td>{{$visitor->deceased_add2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Mass Date and time</th>
                                    <td>{{$visitor->date_time_mems ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Church</th>
                                    <td>{{$visitor->chruch_mems ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Number of 1in images</th>
                                    <td>{{$visitor->total_number_1 ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>1in Total cost</th>
                                    <td>{{$visitor->total_cost_1 ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>Number of 2in images</th>
                                    <td>{{$visitor->total_number_2 ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>2in Total Cost</th>
                                    <td>{{$visitor->total_cost_2 ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>Name of person leaving verse Number</th>
                                    <td>{{$visitor->verse_contact_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Number of person leaving the verse</th>
                                    <td>{{$visitor->verse_tel_no ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>Email of person leaving the verse</th>
                                    <td>{{$visitor->verse_email_address ?? ''}}</td>
                                </tr>

                                <tr>
                                    <th>First verse</th>
                                    <td>{{$visitor->pro_lib ?? ''}}</td>
                                </tr>
                                @if($visitor->pro_lib == "Provided")
                                <tr>
                                    <th>Number of Words</th>
                                    <td>{{$visitor->first_verse_words ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>Cost of Words</th>
                                    <td>{{$visitor->provided_verse_cost ?? '0'}}</td>
                                </tr>
                                <tr>
                                    <th>Message Type</th>
                                    <td>{{$visitor->message_type_single ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Name of Person Leaving Verse</th>
                                    <td>{{$visitor->leaving_verse_person ?? ''}}</td>
                                </tr>
                                @else
                                @foreach($visitor->verses as $verse)
                                <tr>
                                    <th colspan="2" style="text-align: center;font-weight: bold;"><span class="badge badge-info"> {{$loop->iteration}} Verse</span></th>
                                </tr>
                                <tr>
                                    <th>Library No</th>
                                    <td>{{$verse->lib_no ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>No of Words</th>
                                    <td>{{$verse->No_of_words ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Verse Price</th>
                                    <td>{{$verse->library_verse_price ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Message Type</th>
                                    <td>{{$verse->message_type ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Leaving Verse Person</th>
                                    <td>{{$verse->leaving_verse_person ?? ''}}</td>
                                </tr>
                                @endforeach
                                @endif
                                <tr>
                                    <th>Permission for others to add verses</th>
                                    <td>{{$visitor->verses_permit ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Special instructions</th>
                                    <td>{{$visitor->spcl_ins_free_mems ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Words Cost</th>
                                    <td>{{$visitor->total_words ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Pictures Cost</th>
                                    <td>{{$visitor->Pictures_total ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Pre discount Cost</th>
                                    <td>{{$visitor->Total_amount_1_mems ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Discount yes/ no</th>
                                    @if($visitor->discount_mems == "discount_yes")
                                    <td>
                                        <span class="badge badge-success">Yes</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-info">No</span>
                                    </td>
                                    @endif
                                </tr>
                                @if($visitor->discount_mems == "discount_yes")
                                    <tr>
                                        <th>Discount Type</th>
                                        <td>{{$visitor->mems_discount_type ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Discount Rate</th>
                                        <td>{{$visitor->mems_discount_rate ?? ''}} %</td>
                                    </tr>
                                    <tr>
                                        <th>Discount Amount</th>
                                        <td>{{$visitor->mems_discount_amount ?? ''}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Final Cost</th>
                                    <td>{{$visitor->final_cost_mems ?? ''}}</td>
                                </tr>

                                <tr>
                                    <th>Till receipt Number</th>
                                    <td>{{$visitor->Receipt_number ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Booking Number</th>
                                    <td>{{ $visitor->Booking_number ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>
                                        @if($visitor->opening == 'New1')
                                            <span class="badge badge-success">New</span>
                                        @else
                                            <span class="badge badge-primary">Existing</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Taken at the Counter by</th>
                                    <td>{{$visitor->counter_taken ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Keyed by</th>
                                    <td>{{$visitor->keyed_by ?? 'N / A'}}</td>
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
@endsection

@section('js')
    <script>
        $(document).on("click", ".edit_ack_btn", function(){
            $.get("{{ route('admin.reporting.load.edit.mems', ['id'=>$id]) }}", function(response){
                $("#edit_ack_modal").html(response);
                $(document).ready(function() {
                    $('.select2').select2({
                        width: '100%'
                    });
                });
                $("#edit_ack_modal").modal("show");
            }); 
        });
        
    </script>
@endsection