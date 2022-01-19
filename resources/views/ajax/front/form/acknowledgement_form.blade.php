<!-- Acknowledgment Form -->
<div class="card">
    <div class="card-header">
        <button class="btn btn-link" type="button">
            <span><i class="fa fa-user"></i></span> General Information
        </button>
    </div>
    <div id="generalInfo" class="collapse show">
        <div class="row">
            <div class="col-lg-6 hidden">
                <label> Date</label>
                <input type="text" name="auto_Date" class="date-pick valid-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 form-2">
                <label>Insertion Date *</label>
                <input type="text" name="Insertion_Date_Ack" placeholder="Enter Date" class="datep valid-control" readonly />
                @error('Insertion_Date_Ack')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Deceased name *</label>
                <input type="text" min="1" name="deceased_name" placeholder="Enter Name" class="valid-control">
                @error('deceased_name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label>Deceased Address *</label>
                <input type="text" name="address" placeholder="" class="valid-control" />
                @error('address')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <h3>Booked By:</h3>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Contact Name *</label>
                <input type="text" name="contactName" class="valid-control" placeholder="Contact Name" />
                @error('contactName')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Tel Number *</label>
                <input type="text" name="telNumber" placeholder="" class="valid-control numbers" />
                @error('telNumber')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Email Address *</label>
                <input type="email" name="emailAddress" />
                @error('emailAddress')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Mass Detail *</label>
                Please tick if you want to ignore
                <input type="checkbox" name="mass_detail_ack" value="1" class="mass_detail" />
            </div>
        </div>
        <div class="row ignore">
            <div class="col-lg-6">
                <label>Date And Time</label>
                <input type="text" name="date_time_ack" class="valid-control datetimepicker" readonly>
                @error('date_time_ack')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Church</label>
                <input list="chruch_ack_list" type="text" name="chruch_ack" value="" autocomplete="off" class="valid-control">
                <datalist id="chruch_ack_list">
                    @foreach( $chruches as $item)
                        @if(!isset($item->chruch))
                            @continue
                        @endif
                        <option value="{{$item->chruch}}">
                    @endforeach
                </datalist>
                @error('chruch_ack')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
<hr />
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button">
            <span><i class="fa fa-file-word-o"></i></span> Words
        </button>
    </div>
    <div class="collapse show">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <label>Message *</label>
                        <textarea name="message" rows="3" class="valid-control ack_message"></textarea>
                        @error('message')
                            <span class="error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Word Count *</label>
                        <input type="text" name="wordCount" class="valid-control numbers ack_word_count" readonly />
                        @error('wordCount')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Word Cost *</label>
                        <input type="number" name="wordCost" class="ack_total_cost" value="" readonly />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="mt-0" />
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button">
            <span><i class="fa fa-picture-o"></i></span> Images
        </button>
    </div>
    <div class="collapse show">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label> Add Images ?</label>
                        <select class="Ad_img" name="add_img_ack" class="valid-control">
                            <option value="No" selected>No</option>
                            <option value="Yes">Yes</option>
                        </select>
                        @error('add_img_ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-yes hidden">
                        <label> Select Size </label>
                        <select class="image_size" name="size_ack" class="valid-control">
                            <option value="1">1 Inch</option>
                            <option value="2">2 Inch</option>
                        </select>
                        @error('size_ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12 show-on-yes hidden" id="inch_1">
                        <h3>Image </h3>
                        <div class="row">
                            <div class="col-lg-12" id="cart-items21"></div>
                            <div class="col-lg-12 p-0" id="for_clone">
                                <div class="col-lg-12 text-right mt-0" style="margin-bottom: -50px;">
                                    <a class='rmv btn btn-danger btn-sm text-white hidden'>X</a>
                                </div>
                                <div class="col-lg-6 show-on-yes hidden">
                                    <label>Image Type</label>
                                    <select class="type_img" name="img_type_1_ack[]">
                                        <option value="B_W" selected>Blk & White</option>
                                        <option value="Color" selected>Colour</option>
                                    </select>
                                    @error('img_type_1_ack')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 show-on-yes hidden">
                                    <label>Image Price *</label>
                                    <input type="text" class="img_cost_1_ack" name="img_cost_1_ack[]" value="{{$setting['photo_cost_1inch_1st'] ?? ''}}" placeholder="Cost for Opening"  />
                                    @error('img_cost_1_ack')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>Total Number of 1 Inch</label>
                                <input type="text" class="total_number_1_ack numbers" name="total_number_1_ack" placeholder="Total Number" readonly />
                                @error('total_number_1_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>1 inch images cost *</label>
                                <input type="text" name="images_cost_1_ack" class="ack_total_cost" value="" placeholder="Images Cost" readonly />
                                @error('images_cost_1_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-theme btn-sm add-more-image-1" id="add_more_for_ack" type="button">1 Inch to Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hidden" id="inch_2">
                        <h3>Image </h3>
                        <div class="row">
                            <div class="col-lg-12" id="cart-items21"></div>
                            <div class="col-lg-6 show-on-yes hidden">
                                <label>Image Type</label>
                                <select class="type_img" name="img_type_2_ack[]">
                                    <option value="B_W" selected>Blk & White</option>
                                    <option value="Color" selected>Colour</option>
                                </select>
                                @error('img_type_2_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>2 Inch Price</label>
                                <input type="text" class="img_cost_2_ack" name="img_cost_2_ack[]" value="{{$setting['photo_cost_2inch'] ?? ''}}" placeholder="Cost for Opening" readonly />
                                @error('img_cost_2_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>Total Number of 2 Inch</label>
                                <input type="text" class="total_number_2_ack numbers" name="total_number_2_ack" placeholder="Total Number" readonly />
                                @error('total_number_2_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>Total two inch images price</label>
                                <input type="text" name="images_cost_2_ack" class="ack_total_cost" placeholder="Images Cost" readonly />
                                @error('images_cost_2_ack')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="mt-0" />
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button">
            <span><i class="fa fa-pencil-square-o"></i></span> Special
            Instructions
        </button>
    </div>
    <div class="collapse show">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <label> Special Instructions</label>
                        <select value="No" class="spcl_ins valid-control" name="spcl_ins_permit_ack">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No">No</option>
                        </select>
                        @error('spcl_ins_permit_ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 show-on-permit">
                        <label> Special Instructions </label>
                        <textarea name="spcl_ins_free_ack" rows="3" class="valid-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr />
<div class="card item-card" id="acknowledge">
    <div class="card-header">
        <button class="btn btn-link" type="button">
            <span><i class="fa fa-calculator"></i></span> Overall cost
        </button>
    </div>
    <div class="collapse show">
        <div class="row" id="">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label> Words </label>
                        <input type="text" name="wordsCost" value="0" class="" readonly />
                    </div>
                    <div class="col-lg-6">
                        <label> Pictures </label>
                        <input type="text" name="picCost" value="0" readonly />
                    </div>
                    <div class="col-lg-6 ">
                        <label>Total Cost (€)</label>
                        <input type="text" class="valid-control ack_total_cost_field" name="Total_amount_1_ack" value="0" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label>Discount</label>
                        <select name="discount_ack" id="discount" class="valid-control">
                            <option value="discount_no" selected>NO</option>
                            <option value="discount_yes">Yes</option>
                        </select>
                        @error('discount_ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 dis_type hidden">
                        <label>Discount Type</label>
                        <select name="discount_type" id="discount_type" class="valid-control">
                            <option value="" selected> Choose</option>
                        </select>
                        @error('discount_type')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 dis_rate hidden">
                        <label> Discount Rate </label>
                        <select name="discount_rate" class="valid-control" id="dis_rate">
                            <option value="" selected> Choose</option>
                        </select>
                        @error('discount_rate')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 dis_amount hidden">
                        <label>Discount Amount</label>
                        <input type="text" name="discount_amount" value="0" readonly>
                        @error('discount_amount')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 ">
                        <label>Final Cost</label>
                        <input type="text" name="final_cost_ack" class="valid-control ack_final_cost_field" value="0" readonly>
                        @error('final_cost_ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-new">
                        <label>Method of Payment</label>
                        <select name="ack_payment_method" class="valid-control pay_method">
                            <option value="" selected="">Choose</option>
                            @foreach( $payment_payments as $item)
                            <option value="{{$item->name}}">{{$item->name ?? ''}}</option>
                            @endforeach
                        </select>
                        @error('ack_payment_method')
                            <span class="error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 show_on_card hidden">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Select Machine number</label>
                                <select name="ack_machine_no" class="valid-control">
                                    <option value="" selected>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                @error('ack_machine_no')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 ">
                                <label>Credit Card Receipt number</label>
                                <input type="text" name="ack_CC_receipt_number" class="valid-control numbers">
                                @error('ack_CC_receipt_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 p-0 general_pay_method hidden">
                        <div class="col-lg-6">
                            <label>Cash Receipt number</label>
                            <input type="text" name="ack_cash_receipt_no" class="valid-control numbers">
                                @error('ack_cash_receipt_no')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-lg-6 show-on-new">
                            <label>Taken at the counter by</label>
                            <select name="ack_counter_taken" class="valid-control taker_2">
                                <option value="" selected="">Choose One.</option>
                                @foreach($taken_byes as $item)
                                <option value="{{$item->taken_by}}">{{$item->taken_by ?? ""}}</option>
                                @endforeach
                            </select>
                            @error('ack_counter_taken')
                            <span class="error">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gLink">
    <div class="col-lg-12">
        <button type="button" class="submit_btton btn btn-theme" id="Seek-btn">Submit</button>
    </div>
</div>