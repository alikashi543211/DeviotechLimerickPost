<!-- In Mems Form -->
<div class="card">
    <div class="loader-overlay">
        <div class="loader-text">Loading...</div>
    </div>

    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-user"></i></span> General (Existing) Information</button>
    </div>
    <div id="generalInfo" class="collapse show">
        <div class="row">
            <div class="col-lg-6">
                <label>Opening *</label>
                <select class="opening1 valid-control" name="opening">
                    <option value="">Choose One..</option>
                    <option value="New1" class="new-o">New</option>
                    <option value="Existing Opening" selected>Existing</option>
                </select>
                @error('opening')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6 show-on-exis choose_existing hidden">
                <label>Name *</label>
                <select name="existing" id="existing">
                    <option selected="" value="">Choose Existing</option>
                    @foreach($mems as $mem)
                        <option value="{{$mem->first_name}}" @if($mem->is_active == '0') disabled  @endif>{{$mem->first_name ?? ''}} {{$mem->surname ?? ''}}</option>
                    @endforeach
                </select>
                @error('existing')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6 show-on-new hidden">
                <label>Ref No. *</label>
                <input type="text" name="New_Ref_no" value="" class="valid-control" readonly>
                @error('New_Ref_no')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6 show-on-new hidden">
                <label>Opening Cost (€) *</label>
                <input type="text" name="Opening_cost" placeholder="Cost for Opening" value="{{ $setting['opening_cost'] ?? '0'}}" class="valid-control numbers">
                @error('Opening_cost')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Contact name</label>
                <input type="text" name="contact_name" class="valid-control" placeholder="Enter Contact Name" autocomplete="off">
                @error('contact_name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Tel no</label>
                <input type="text" name="Tel_no" autocomplete="off" class="valid-control numbers" placeholder="Enter Tel No">
                @error('Tel_no')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Email address</label>
                <input type="text" name="Email_address" autocomplete="off" placeholder="Enter Email">
                @error('Email_address')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Pick Issue Date *</label>
                <input type="text" name="pick_issue_date" placeholder="Enter Date" class="datep pick_issue_date valid-control" readonly />
                @error('pick_issue_date')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 hidden">
                <label> Date</label>
                <input type="text" name="auto_Date" class="valid-control date-pick" />
            </div>
            {{-- <div class="col-lg-6">
                <label>Insertion Date *</label>
                <input type="text" name="insertion_Date_Mems" placeholder="Enter Date" class="datep" readonly />
                @error('insertion_Date_Mems')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
            <div class="col-lg-6">
                <label> Deceased first name *</label>
                <input type="text" name="first_name" value="" placeholder="Enter first_name" class="valid-control">
                @error('first_name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label> deceased surname *</label>
                <input type="text" min="1" name="surname" placeholder="Enter surname" class="valid-control">
                @error('surname')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Aniversary Number *</label>
                <select name="aniversary_number" class="valid-control">
                    <option value="" selected>Choose One..</option>
                    
                    @for($i=0; $i<=50; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor

                    {{--
                        @foreach( $aniversaries as $item)
                            <option value="{{$item->aniversary_no}}">{{$item->aniversary_no ?? ''}}</option>
                        @endforeach
                    --}}
                </select>
                @error('aniversary_number')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Date of Aniversary*</label>
                <input type="text" name="aniversary_date" class="valid-control datepicker" readonly>
                @error('aniversary_date')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Deceased Address 1*</label>
                <input type="text" name="deceased_add1" class="valid-control" placeholder="Enter address">
                @error('deceased_add1')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Deceased Address 2*</label>
                <input type="text" name="deceased_add2" class="valid-control" placeholder="Enter address">
                @error('deceased_add2')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 show-on-new hidden">
                <label>Mass Detail *</label>
                Please tick if you want to ignore
                <input type="checkbox" value="0" name="mass_detail_mems" class="mass_detail" />
            </div>
        </div>
        <div class="row ignore">
            <div class="col-lg-6 show-on-new hidden">
                <label>Date And Time</label>
                <input type="text" name="date_time_mems" class="valid-control datetimepicker" readonly>
                @error('date_time_mems')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Church</label>
                <input list="churches_mems_list" type="text" name="chruch_mems" value="" autocomplete="off" class="valid-control">
                <datalist id="churches_mems_list">
                    @foreach( $chruches as $item)
                        @if(!isset($item->chruch))
                            @continue
                        @endif
                        <option value="{{$item->chruch}}">
                    @endforeach
                </datalist>
                @error('chruch_mems')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-cart-plus"></i></span> Verses</button>
    </div>
    <div class="collapse show">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Contact name</label>
                        <input type="text" name="verse_contact_name" autocomplete="off" placeholder="Enter Contact Name" class="valid-control">
                        @error('verse_contact_name')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Tel no</label>
                        <input type="text" name="verse_tel_no" autocomplete="off" placeholder="Enter Tel No" class="valid-control numbers">
                        @error('verse_tel_no')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Email address</label>
                        <input type="text" name="verse_email_address" autocomplete="off" placeholder="Enter Email">
                        @error('verse_email_address')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row" id="">
                    <input type="hidden" class="hidden_total_verse_cost" name="hidden_total_verse_cost" value="">
                    <div class="col-md-12 provided_block">
                        <div class="row" id="provided-item-1">
                            <div class="col-md-12">
                                <h3 class=""> Verse <font class="item-count-provided c1-provided">1</font></h3>
                            </div>
                            <div class="col-lg-6">
                                <label>Provided or Library ?</label>
                                <select class="pro_lib mem_verse_type valid-control" name="mem_verse_type[]">
                                    <option value="">Choose</option>
                                    <option value="1">Library</option>
                                    <option value="2">Provided</option>
                                </select>
                                @error('pro_lib')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mem_verse_library_no_backup">
                                
                            </div>
                            <div class="col-md-6 mem_verse_library_no" style="display: none;">
                                <label>Library No. *</label>
                                <select name="mem_verse_library_no[]" class="valid-control">
                                    <option selected="" value="">Select Library No</option>
                                    @foreach(get_library_verses() as $item)
                                        <option value="{{ $item->id }}">{{ $item->number }}</option>
                                    @endforeach
                                </select>
                                @error('lib_no')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Verse <span class="item-count-provided">1</span> Number of words *</label>
                                <input type="text" name="mem_verse_no_of_words[]" placeholder="New Ref no. " class="numbers mems_pro_no_of_words mem_verse_no_of_words valid-control">
                                @error('mems_pro_no_of_words')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Cost of <span class="item-count-provided">1</span> verse *</label>
                                <input type="text" class="mem_verse_price provided_verse_cost valid-control" name="mem_verse_price[]" value="" readonly>
                                @error('mems_pro_cost_of_verse')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <small><strong>Sadly missed by ( Name of who the Anniversary is form )*</strong></small>
                            </div>
                            <div class="col-md-6">
                                <label>Name of Person leaving comment</label>
                                <textarea name="mem_verse_person_leaving_comment[]" class="valid-control" rows="3" style="resize: none;"></textarea>
                                @error('mems_pro_person_leaving_verse')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                            <div class="col-md-6">
                                <label>Message type comment</label>
                                <textarea name="mem_verse_message[]" class="valid-control" rows="3" style="resize: none;"></textarea>
                                @error('mems_pro_message_type_comment')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-md-12" id="provided-items"></div>
                    </div>

                    <div class="col-lg-12 text-right pb-0 show-on-provided hidden">
                        <button class="btn btn-theme show-on-provided btn-sm add-more-provided" type="button"><i class="fa fa-plus"></i> Add More</button>
                    </div>
                    <div class="col-md-12 show-on-library hidden mems_verse mems_block">
                        <div class="row" id="cart-item-1">
                            <div class="col-md-12">
                                <h3> Verse <font class="item-count c1 library-item-count">1</font>
                                </h3>
                            </div>
                            <div class="col-md-4">
                                <label>Library No. *</label>
                                <select name="lib_no[]" class="lib_no valid-control">
                                    <option selected="" value="">Select Library No</option>
                                </select>
                                @error('lib_no')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 ">
                                <label>Number of Words *</label>
                                <input type="text" name="No_of_words[]" class="valid-control" readonly>
                            </div>
                            <div class="col-md-4 ">
                                <label>Verse library price </label>
                                <input type="text" name="library_verse_price[]" class="library_verse_price valid-control" value="" readonly>
                            </div>
                            <div class="col-md-12">
                                <small><strong>Sadly missed by ( Name of who the Anniversary is form )*</strong></small>
                            </div>
                            <div class="col-md-6">
                                <label>Message type comment</label>
                                <input list="message_type" type="text" name="message_type[]" value="" autocomplete="off" class="valid-control">
                                <datalist id="message_type">
                                    @foreach( $message_types as $item )
                                        <option value="{{ $item->msg_type }}">{{ $item->msg_type ?? '' }}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-md-6">
                                <label>Name of Person leaving verse</label>
                                <textarea name="leaving_verse_person[]" class="valid-control" rows="3" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12" id="cart-items"></div>
                    </div>
                    <div class="col-lg-12 text-right pb-0 show-on-library hidden">
                        <button class="btn btn-theme btn-sm add-more" type="button"><i class="fa fa-plus"></i> Add More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="mt-0">
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-picture-o"></i></span> Images</button>
    </div>
    <div class="collapse show" id="mems_images">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Add Images</label>
                        <select class="Ad_img valid-control" name="add_img">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No" selected="">No</option>
                        </select>
                        @error('add_img')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-yes hidden">
                        <label>2 Inch Image</label>
                        <select class="two_inches valid-control" name="two_inches">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                        @error('two_inches')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12 show-on-yes2 hidden" id="cart-item2-1">
                        <h3> Image <font class="item-count2 c2">1</font>
                        </h3>
                        <div class="row" id="inch_2_mems">
                            <div class="col-lg-12 text-right mt-0" style="margin-bottom: -50px;">
                                <a class='rmv_2 btn btn-danger btn-sm text-white hidden'>X</a>
                            </div>
                            <div class="col-lg-6  show-on-yes hidden">
                                <label>Type</label>
                                <select class="type_img" name="img_type_2[]">
                                    <option value="B_W" selected="">Blk & White</option>
                                    <option value="Color" selected="">Colour</option>
                                </select>
                                @error('img_type_2')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>2 Inch Price</label>
                                <input type="text" name="img_cost_2inch[]" class="img_cost_2inch_mems" value="{{$setting['photo_cost_2inch'] ?? '0'}}" placeholder="Cost for Opening " readonly>
                                @error('img_cost_2inch')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="cart-items2"></div>
                    <div class="col-lg-6 text-left show-on-yes2 hidden">
                        <label>Number of 2 Inch Images</label>
                        <input type="text" name="total_number_2" class="total_no_of_2_inch" placeholder="" value="1" readonly>
                    </div>
                    <div class="col-lg-6 text-left show-on-yes2 hidden">
                        <label>2 inch images cost *</label>
                        <input type="text" name="total_cost_2" placeholder="" value="{{$setting['photo_cost_2inch'] ?? '0'}}" readonly>
                    </div>
                    <div class="col-lg-12 text-right show-on-yes2  hidden pb-0">
                        <button class="btn btn-theme btn-sm add-more-image-2" id="add_more_2inch_mems" type="button"><i class="fa fa-plus"></i> Add More 2 inch images</button>
                    </div>

                    {{--1 Inch Images dropdown--}}
                    <div class="col-lg-6 show-on-yes hidden">
                        <label>1 Inch Image</label>
                        <select class="one_inches valid-control" name="one_inches">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                        @error('one_inches')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12 yes-show hidden" id="cart-item21-1">
                        <h3> Image <font class="item-count2 c3">1</font>
                        </h3>
                        <div class="row" id="inch_1_mems">
                            <div class="col-lg-12 text-right mt-0" style="margin-bottom: -50px;">
                                <a class='rmv_1 btn btn-danger btn-sm text-white hidden'>X</a>
                            </div>
                            <div class="col-lg-6  show-on-yes hidden">
                                <label>Type</label>
                                <select class="type_img" name="img_type_1[]">
                                    <option value="B_W" selected="">Blk & White</option>
                                    <option value="Color" selected="">Colour</option>
                                </select>
                                @error('img_type_1')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 show-on-yes hidden">
                                <label>1 Inch Price </label>
                                <input type="text" name="img_cost_1[]" value="{{$setting['photo_cost_1inch_1st'] ?? ''}}" class="img_cost_1inch_mems" placeholder="Cost for Opening " readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="cart-items21"></div>
                    <div class="col-lg-6 text-left yes-show hidden">
                        <label>Number of 1 inch images</label>
                        <input type="text" name="total_number_1" value="1" class="total_no_of_1_inch" readonly>
                    </div>
                    <div class="col-lg-6 text-left yes-show hidden">
                        <label>Total 1 inch images price</label>
                        <input type="text" name="total_cost_1" value="{{$setting['photo_cost_1inch_1st'] ?? '0'}}" readonly>
                    </div>
                    <div class="col-lg-12 text-right yes-show  hidden pb-0">
                        <button class="btn btn-theme btn-sm add-more-image-1" id="add_more_1inch_mems" type="button"><i class="fa fa-plus"></i>Add More 1 inch images</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row cost_total_img "></div>
<hr class="mt-0">
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-pencil-square-o"></i></span> Special Instructions</button>
    </div>
    <div class="collapse show">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Permission for others to add verses</label>
                        <select value="No" class="verses_permit" name="verses_permit">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No" selected="">No</option>
                        </select>
                        @error('verses_permit')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <label>Special Instructions</label>
                        <select value="No" class="spcl_ins valid-control" name="spcl_ins_permit_mems">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No" selected="">No</option>
                        </select>
                        @error('spcl_ins_permit_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-permit hidden">
                        <label>Special Instructions</label>
                        <input type="text" name="spcl_ins_free_mems" class="valid-control">
                        @error('spcl_ins_free_mems')
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
<hr>
<div class="card item-card">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-calculator"></i></span> Overall Cost</button>
    </div>
    <div class="collapse show" id="mems_overal_cost">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Words</label>
                        <input type="text" name="total_words" class="total_words valid-control" value="0" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Pictures</label>
                        <input type="text" name="Pictures_total" value="0" class="numbers valid-control" class="picture" readonly>
                    </div>
                    <div class="col-lg-6 opening_cost hidden">
                        <label>Opening Cost</label>
                        <input type="text" class="numbers valid-control" name="opening_cost" value="{{ $setting['opening_cost'] ?? '0'}}" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Verse</label>
                        <input type="text" name="verse_total" value="1" class="verse" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Total Cost</label>
                        <input type="text" name="Total_amount_1_mems" class="numbers valid-control Total_amount_1" value="0" readonly>
                        @error('Total_amount_1_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Discount</label>
                        <select name="discount_mems" id="discount" class="valid-control">
                            <option value="discount_no" selected>NO</option>
                            <option value="discount_yes">Yes</option>
                        </select>
                        @error('discount_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 hidden mems_dis_type">
                        <label>Discount Type</label>
                        <select name="mems_discount_type" class="valid-control" id="mems_dis_type">
                            <option value="" selected> Choose </option>
                        </select>
                        @error('mems_discount_type')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 hidden mems_dis_rate">
                        <label>Discount Rate</label>
                        <select name="mems_discount_rate" id="mems_dis_rate" class="valid-control">
                        </select>
                        @error('Insertion_Date_Ack')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 hidden mems_dis_amount">
                        <label>Discount Amount</label>
                        <input type="text" name="mems_discount_amount" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Final Cost</label>
                        <input type="text" name="final_cost_mems" class="valid-control final_cost" readonly>
                        @error('final_cost_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-new hidden">
                        <label>Method of Payment</label>
                        <select name="payment_method" class="pay_method valid-control">
                            <option value="" selected="">Choose</option>
                            @foreach( $payment_payments as $item)
                                <option value="{{$item->name}}">{{$item->name ?? ''}}</option>
                            @endforeach
                        </select>
                        @error('payment_method')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 p-0 show_on_cash hidden">
                        <div class="col-lg-6 show-on-new">
                            <label>Receipt number</label>
                            <input type="text" name="Receipt_number" class="valid-control numbers">
                        </div>
                        <div class="col-lg-6 show-on-new">
                            <label>Taken at the counter by</label>
                            <select name="counter_taken" class="valid-control taker_2">
                                <option value="" selected="">Choose One.</option>
                                @foreach($taken_byes as $item)
                                <option value="{{$item->taken_by}}">{{$item->taken_by ?? ""}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 show_on_card hidden">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Select Machine number</label>
                                <select name="machine_no">
                                    <option value="" selected>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                @error('machine_no')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 ">
                                <label>Credit Card Receipt number</label>
                                <input type="text" name="CC_Receipt_number" class="valid-control numbers">
                                @error('CC_Receipt_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Receipt number</label>
                                <input type="text" name="Receipt_number" class="valid-control numbers">
                                @error('Receipt_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Booking number</label>
                                <input type="text" class="valid-control numbers" name="Booking_number">
                                @error('Booking_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <labelw>Taken at the counter by</label>
                                <select name="counter_taken" class="valid-control taker_2">
                                    <option value="" selected="">Choose One.</option>
                                    @foreach($taken_byes as $item)
                                    <option value="{{$item->taken_by}}">{{$item->taken_by ?? ""}}</option>
                                    @endforeach
                                </select>
                                @error('counter_taken')
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
<div class="row gLink">
    <div class="col-lg-12">
        <button type="button" class="submit_btton btn btn-theme" id="Hide-btn">Submit</button>
    </div>
</div>