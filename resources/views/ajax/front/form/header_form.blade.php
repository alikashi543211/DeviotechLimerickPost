<div class="card">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-user"></i></span> Date </button>
    </div>
    <div id="generalInfo" class="collapse show col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <label> Date</label>
                <input type="text" name="auto_Date_ack" class="date-pick" readonly="" disabled="" value="{{ \Carbon\Carbon::now()->format('d-M-y') }}" />
            </div>
            <div class="col-lg-4">
                <label>Admin name *</label>
                <input type="text" name="admin_name" class="valid-control" value="{{ request()->name }}" readonly>
                @error('admin_name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-4">
                <label>Type *</label>
                <select name="type_1" class="type-1 post_type valid-control">
                    <option value="Acknowledgement" selected="">Acknowledgement</option>
                    <option value="In mems">In mems</option>
                </select>
                @error('type_1')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
</div>