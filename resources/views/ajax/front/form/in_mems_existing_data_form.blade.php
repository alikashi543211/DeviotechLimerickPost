<!-- In Mems Form -->
<div class="card">
    <input type="hidden" name="id" value="{{ $visitor->id }}">
    <div class="loader-overlay">
        <div class="loader-text">Loading...</div>
    </div>

    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-user"></i></span> General (Existing Data) Information</button>
    </div>
    <div id="generalInfo" class="collapse show existing-general-info">
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
            <div class="col-md-6 show-on-exis hidden">
                <label>Name *</label>
                <select name="existing" id="existing">
                    <option selected="" value="">Choose Existing</option>
                    @foreach($mems as $mem)
                        <option value="{{$mem->first_name}}">{{$mem->first_name ?? ''}} {{$mem->surname ?? ''}}</option>
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
                <input type="text" name="New_Ref_no" value="{{ $visitor->New_Ref_no }}" class="valid-control grey_bg" readonly>
                @error('New_Ref_no')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6 show-on-new hidden">
                <label>Opening Cost (€) *</label>
                <input type="text" name="Opening_cost" placeholder="Cost for Opening" value="{{ $setting['opening_cost'] ?? '0'}}" class="valid-control numbers grey_bg" readonly>
                @error('Opening_cost')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Contact name</label>
                <input type="text" name="contact_name" class="valid-control grey_bg" placeholder="Enter Contact Name" value="{{ $visitor->contact_name }}" autocomplete="off" readonly>
                @error('contact_name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Tel no</label>
                <input type="text" name="Tel_no" autocomplete="off" class="valid-control numbers grey_bg" value="{{ $visitor->Tel_no }}" placeholder="Enter Tel No" readonly />
                @error('Tel_no')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6 show-on-new hidden">
                <label>Email address</label>
                <input type="text" name="Email_address" autocomplete="off" placeholder="Enter Email" value="{{ $visitor->Email_address }}" class="grey_bg" readonly />
                @error('Email_address')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Pick Issue Date *</label>
                <input type="text" name="pick_issue_date" placeholder="Enter Date" class="datep pick_issue_date valid-control grey_bg" value="{{ $visitor->pick_issue_date }}" readonly />
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
                <input type="text" name="first_name" placeholder="Enter first_name" class="valid-control grey_bg" value="{{ $visitor->first_name }}" readonly>
                @error('first_name')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label> deceased surname *</label>
                <input type="text" name="surname" placeholder="Enter surname" class="valid-control grey_bg" value="{{ $visitor->surname }}" readonly>
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
                        <option value="{{ $i }}" @if($visitor->aniversary_number == $i) selected @endif>{{ $i }}</option>
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
                <input type="text" name="aniversary_date" class="valid-control datepicker grey_bg" readonly value="{{ $visitor->aniversary_date }}">
                @error('aniversary_date')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Deceased Address 1*</label>
                <input type="text" name="deceased_add1" placeholder="Enter address" value="{{ $visitor->deceased_add1 }}" class="valid-control grey_bg" readonly>
                @error('deceased_add1')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Deceased Address 2*</label>
                <input type="text" name="deceased_add2" class="valid-control grey_bg" placeholder="Enter address" value="{{ $visitor->deceased_add2 }}" readonly>
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
                <input type="checkbox" name="mass_detail_mems" class="mass_detail" @if(!isset($visitor->date_time_mems) && !isset($visitor->chruch_mems)) checked @endif />
            </div>
        </div>
        @if(isset($visitor->date_time_mems) && isset($visitor->chruch_mems))
            <div class="row ignore">
                <div class="col-lg-6 show-on-new hidden">
                    <label>Date And Time</label>
                    <input type="text" name="date_time_mems" class="valid-control datetimepicker grey_bg" value="{{ $visitor->date_time_mems }}" readonly>
                    @error('date_time_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 show-on-new hidden">
                    <label>Church</label>
                    <input list="churches_mems_list" type="text" name="chruch_mems" value="{{ $visitor->chruch_mems }}" autocomplete="off" class="valid-control grey_bg">
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
        @endif
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
                        <input type="text" name="verse_contact_name" autocomplete="off" placeholder="Enter Contact Name" class="valid-control" value="{{ $visitor->verse_contact_name }}">
                        @error('verse_contact_name')
                            <span class="error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Tel no</label>
                        <input type="text" name="verse_tel_no" autocomplete="off" placeholder="Enter Tel No" class="valid-control numbers" value="{{ $visitor->verse_tel_no }}">
                        @error('verse_tel_no')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Email address</label>
                        <input type="text" name="verse_email_address" autocomplete="off" placeholder="Enter Email" value="{{ $visitor->verse_email_address }}">
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
                                <input type="text" name="mem_verse_no_of_words[]" placeholder="New Ref no. " class="numbers mems_pro_no_of_words valid-control">
                                @error('mems_pro_no_of_words')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Cost of <span class="item-count-provided">1</span> verse *</label>
                                <input type="text" class="provided_verse_cost mem_verse_price valid-control" name="mem_verse_price[]" value="" readonly>
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

                    <div class="col-lg-12 text-right pb-0">
                        <button class="btn btn-theme btn-sm add-more-provided" type="button"><i class="fa fa-plus"></i> Add More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="mt-0">
<div class="card item-card d-none">
    <div class="card-header">
        <button class="btn btn-link" type="button"> <span><i class="fa fa-picture-o"></i></span> Images</button>
    </div>
    <div class="collapse show" id="mems_images">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Add Images</label>
                        <select class="Ad_img valid-control change-event" name="add_img">
                            <option value="Yes" @if($visitor->add_img == "Yes") selected  @endif>Yes</option>
                            <option value="No" @if($visitor->add_img == "No") selected  @endif>No</option>
                        </select>
                        @error('add_img')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-yes hidden">
                        <label>2 Inches Image</label>
                        <select class="two_inches valid-control change-event" name="two_inches">
                            <option value="No" @if($visitor->two_inches == "No") selected  @endif>No</option>
                            <option value="Yes" @if($visitor->two_inches == "Yes") selected  @endif>Yes</option>
                        </select>
                        @error('two_inches')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12 show-on-yes2 hidden two_inches_block" id="cart-item2-1">
                        <h3> Image <font class="item-count2 c2">1</font>
                        </h3>
                        @if($visitor->two_inches == "Yes")
                            @foreach($images_data as $image_item)
                                @if(!is_null($image_item->img_type_2))
                                    <div class="row" id="inch_2_mems">
                                        <div class="col-lg-12 text-right mt-0" style="margin-bottom: -50px;">
                                            <a class='rmv_2 hidden btn btn-danger btn-sm text-white '>X</a>
                                        </div>
                                        <div class="col-lg-6  show-on-yes hidden">
                                            <label>Type</label>
                                            <select class="type_img" name="img_type_2[]">
                                                <option value="B_W" @if($image_item->img_type_2 == "B_W" ) selected @endif>Blk & White</option>
                                                <option value="Color" @if($image_item->img_type_2 == "Color" ) selected @endif>Colour</option>
                                            </select>
                                            @error('img_type_2')
                                                <span class="error">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 show-on-yes hidden">
                                            <label>2 Inches Price</label>
                                            <input type="text" name="img_cost_2inch[]" class="img_cost_2inch_mems" value="{{$setting['photo_cost_2inch'] ?? '0'}}" placeholder="Cost for Opening " readonly>
                                            @error('img_cost_2inch')
                                            <span class="error">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
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
                                    <label>2 Inches Price</label>
                                    <input type="text" name="img_cost_2inch[]" class="img_cost_2inch_mems" value="{{$setting['photo_cost_2inch'] ?? '0'}}" placeholder="Cost for Opening " readonly>
                                    @error('img_cost_2inch')
                                    <span class="error">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="col-md-12 p-0" id="cart-items2"></div>
                    <div class="col-lg-6 text-left show-on-yes2 hidden">
                        <label>Number of 2 Inches Images</label>
                        <input type="text" name="total_number_2" class="total_no_of_2_inch" placeholder="" value="1" readonly>
                    </div>
                    <div class="col-lg-6 text-left show-on-yes2 hidden">
                        <label>2 inches images cost *</label>
                        <input type="text" name="total_cost_2" placeholder="" value="{{$setting['photo_cost_2inch'] ?? '0'}}" readonly>
                    </div>
                    <div class="col-lg-12 text-right show-on-yes2  hidden pb-0">
                        <button class="btn btn-theme btn-sm add-more-image-2" id="add_more_2inch_mems" type="button"><i class="fa fa-plus"></i> Add More 2 inches images</button>
                    </div>

                    {{--1 Inch Images dropdown--}}
                    <div class="col-lg-6 show-on-yes hidden">
                        <label>1 Inches Image</label>
                        <select class="one_inches valid-control change-event" name="one_inches">
                            <option value="No" @if($visitor->one_inches == "No") selected @endif>No</option>
                            <option value="Yes" @if($visitor->one_inches == "Yes") selected @endif>Yes</option>
                        </select>
                        @error('one_inches')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-12 yes-show hidden one_inches_block" id="cart-item21-1">
                        <h3> Image <font class="item-count2 c3">1</font>
                        </h3>
                        @if($visitor->one_inches == "Yes")
                            @foreach($images_data as $one_inch_item)
                                @if(!is_null($one_inch_item->img_type_1))
                                    <div class="row" id="inch_1_mems">
                                        <div class="col-lg-12 text-right mt-0" style="margin-bottom: -50px;">
                                            <a class='rmv_1 hidden btn btn-danger btn-sm text-white'>X</a>
                                        </div>
                                        <div class="col-lg-6  show-on-yes hidden">
                                            <label>Type</label>
                                            <select class="type_img" name="img_type_1[]">
                                                <option value="B_W" @if($one_inch_item->img_type_1 == 'B_W') selected @endif>Blk & White</option>
                                                <option value="Color" @if($one_inch_item->img_type_1 == 'Color') selected @endif>Colour</option>
                                            </select>
                                            @error('img_type_1')
                                            <span class="error">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 show-on-yes hidden">
                                            <label>1 Inches Price </label>
                                            <input type="text" name="img_cost_1[]" value="{{$setting['photo_cost_1inch_1st'] ?? ''}}" class="img_cost_1inch_mems" placeholder="Cost for Opening " readonly>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
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
                                    <label>1 Inches Price </label>
                                    <input type="text" name="img_cost_1[]" value="{{$setting['photo_cost_1inch_1st'] ?? ''}}" class="img_cost_1inch_mems" placeholder="Cost for Opening " readonly>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-12 p-0" id="cart-items21"></div>
                    <div class="col-lg-6 text-left yes-show hidden">
                        <label>Number of 1 inches image</label>
                        <input type="text" name="total_number_1" value="1" class="total_no_of_1_inch" readonly>
                    </div>
                    <div class="col-lg-6 text-left yes-show hidden">
                        <label>Total 1 inches image price</label>
                        <input type="text" name="total_cost_1" value="{{$setting['photo_cost_1inch_1st'] ?? '0'}}" readonly>
                    </div>
                    <div class="col-lg-12 text-right yes-show  hidden pb-0">
                        <button class="btn btn-theme btn-sm add-more-image-1" id="add_more_1inch_mems" type="button"><i class="fa fa-plus"></i>Add More 1 inches image</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row cost_total_img d-none"></div>
<hr class="mt-0 d-none">
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
                        <select value="No" class="verses_permit change-event" name="verses_permit">
                            <option value="Yes" @if($visitor->verses_permit == "Yes") selected  @endif>Yes</option>
                            <option value="No" @if($visitor->verses_permit == "No") selected  @endif>No</option>
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
                        <select class="spcl_ins valid-control change-event" name="spcl_ins_permit_mems">
                            <option value="Yes" selected="" @if($visitor->spcl_ins_permit_mems == "Yes") selected  @endif>Yes</option>
                            <option value="No" @if($visitor->spcl_ins_permit_mems == "No") selected  @endif>No</option>
                        </select>
                        @error('spcl_ins_permit_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-permit hidden">
                        <label>Special Instructions</label>
                        <input type="text" name="spcl_ins_free_mems" class="valid-control" value="{{  $visitor->spcl_ins_free_mems }}">
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
                        <input type="text" name="total_words" class="total_words valid-control" value="" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Pictures</label>
                        <input type="text" name="Pictures_total" value="{{ $visitor->Pictures_total }}" class="numbers valid-control" class="picture" readonly>
                    </div>
                    <div class="col-lg-6 opening_cost hidden">
                        <label>Opening Cost</label>
                        <input type="text" class="numbers valid-control" name="opening_cost" value="" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Verse</label>
                        <input type="text" name="verse_total" value="0" class="verse" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Total Cost</label>
                        <input type="text" name="Total_amount_1_mems" class="numbers valid-control Total_amount_1" value="" readonly>
                        @error('Total_amount_1_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label>Discount</label>
                        <select name="discount_mems" id="discount" class="valid-control change-event">
                            <option value="discount_no" @if($visitor->final_cost_mems == 'discount_no') selected @endif>
                                NO
                            </option>
                            <option value="discount_yes" @if($visitor->final_cost_mems == 'discount_yes') selected @endif>
                                Yes
                            </option>
                        </select>
                        @error('discount_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 hidden mems_dis_type">
                        <label>Discount Type</label>
                        <select name="mems_discount_type" class="valid-control change-event" id="mems_dis_type">
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
                        <select name="mems_discount_rate" id="mems_dis_rate" class="valid-control change-event">
                        </select>
                        @error('Insertion_Date_Ack')
                            <span class="error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 hidden mems_dis_amount">
                        <label>Discount Amount</label>
                        <input type="text" name="mems_discount_amount" value="{{ $visitor->discount_amount }}" readonly>
                    </div>
                    <div class="col-lg-6 ">
                        <label>Final Cost</label>
                        <input type="text" name="final_cost_mems" class="valid-control final_cost" value="" readonly>
                        @error('final_cost_mems')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 show-on-new hidden">
                        <label>Method of Payment</label>
                        <select name="payment_method" class="pay_method change-event valid-control">
                            <option value="" selected="">Choose</option>
                            @foreach( $payment_payments as $item)
                                <option value="{{$item->name}}" @if($item->name == $visitor->payment_method) selected @endif>{{$item->name ?? ''}}</option>
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
                            <input type="text" name="Receipt_number" class="valid-control numbers" value="{{ $visitor->Receipt_number }}">
                        </div>
                        <div class="col-lg-6 show-on-new">
                            <label>Taken at the counter by</label>
                            <select name="counter_taken" class="valid-control taker_2">
                                <option value="" selected="">Choose One.</option>
                                @foreach($taken_byes as $item)
                                    <option value="{{$item->taken_by}}" @if($item->taken_by == $visitor->counter_taken) selected @endif>{{$item->taken_by ?? ""}}</option>
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
                                    <option value="1" @if($visitor->machine_no == '1') selected @endif>1</option>
                                    <option value="2" @if($visitor->machine_no == '2') selected @endif>2</option>
                                    <option value="3" @if($visitor->machine_no == '3') selected @endif>3</option>
                                </select>
                                @error('machine_no')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 ">
                                <label>Credit Card Receipt number</label>
                                <input type="text" name="CC_Receipt_number" class="valid-control numbers" value="{{ $visitor->CC_Receipt_number }}">
                                @error('CC_Receipt_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Receipt number</label>
                                <input type="text" name="Receipt_number" class="valid-control numbers" value="{{ $visitor->Receipt_number }}">
                                @error('Receipt_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Booking number</label>
                                <input type="text" class="valid-control numbers" name="Booking_number" value="{{ $visitor->Booking_number }}">
                                @error('Booking_number')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Taken at the counter by</label>
                                <select name="counter_taken" class="valid-control taker_2 change-event">
                                    <option value="" selected="">Choose One.</option>
                                    @foreach($taken_byes as $item)
                                    <option value="{{$item->taken_by}}" @if($item->taken_by == $visitor->counter_taken) selected @endif>{{$item->taken_by ?? ""}}</option>
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