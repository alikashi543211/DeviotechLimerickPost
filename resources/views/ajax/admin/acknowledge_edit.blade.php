<div class="modal-dialog modal-md">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Edit Acknowledgement</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <form action="{{ route('admin.reporting.acknowledge.update') }}" class="submit-form" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $req->id }}">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="select-label">Keyed By</label>
                            <select class="form-control valid-control form-control-rm-position" name="keyed_by">
                                <option value="">Select Option</option>
                                @foreach($keyed_list as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Booking Number</label>
                            <input type="text" class="form-control valid-control numbers" name="ack_booking_number">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary submit-form-btn">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<script>
    var data = <?php echo json_encode($ack_data) ?>;
    mapDataToFields(data);
</script> 