<script>

    var mems_total_word_cost = 0;
    var mems_total_one_inch_picture_cost = 0;
    var mems_total_two_inch_picture_cost = 0;
    var mems_total_picture_cost = 0;
    var mems_total_verse_cost = 1;
    var mems_opening_cost = 0;
    var mems_final_cost = 0;
    var mems_total_cost = 0;

    function addZero(val) 
    {
        return val < 10 ? ('0' + val) : val;
    }
    var d = new Date();
    var code;
    code = addZero(d.getDate()) + '' + addZero(d.getMonth() + 1) + '' + d.getFullYear() + '' + addZero(d.getHours()) + '' + addZero(d.getMinutes());


    $(document).on('change', '#existing', function() {
        var visitor = $("#existing option:selected").val();
        load_in_mems_existing_data_form("{{ route('form.load.in_mems_existing_data_form') }}?name="+visitor);
    });

    var discount_rates = <?php echo json_encode($discountRates); ?>;
    var discount_types = <?php echo json_encode($discountTypes); ?>;
    var library_verses = <?php echo json_encode($libraryVerses); ?>;

    discount_types_options();
    library_verses_options();

    function discount_types_options()
    {
        for (var i = 0; i < discount_types.length; i++) {
            if (discount_types[i] != "") {
                $('body').find('[name="discount_type"]').append(
                    '<option value="' + discount_types[i]['type'] + '"  data-type_id="' + discount_types[i]['id'] + '" >' + discount_types[i]['type'] + "</option>"
                    );
                $('body').find('[name="mems_discount_type"]').append(
                    '<option value="' + discount_types[i]['type'] + '" data-type_id="' + discount_types[i]['id'] + '">' + discount_types[i]['type'] + "</option>"
                    );
            }
        }  
    }
    
    function library_verses_options()
    {
        for (var i = 0; i < library_verses.length; i++) {
            if (library_verses[i] != "") {
                $('body').find('[name="lib_no[]"]').append(
                    '<option value="' + library_verses[i]['number'] + '">' + library_verses[i]['number'] + "</option>"
                    );
            }
        }
    }

    $(document).on('change', '.lib_no', function() {
        var selected_value = $(this).val();
        for (var i = 0; i < library_verses.length; i++) {
            if (library_verses[i]['number'] == selected_value) {
                $(this).closest('.row').find('[name="No_of_words[]"]').val(library_verses[i]['words']);
                $(this).closest('.row').find('[name="library_verse_price[]"]').val(library_verses[i]['price']);
            }
        }
        calculate_mem_verse_words();
        summary();
        calculate_verse_price();
    });

    $(document).on("change", "#acknowledge #discount_type", function(){
        var selected_value = $('#discount_type option:selected').data('type_id');
        $('#acknowledge').find('#dis_rate').empty();
        $('[name="discount_rate"]').append(
            '<option value="' + "" + '">' + "Choose Rate" + "</option>"
            );
        for (var i = 0; i < discount_rates.length; i++) {
            if (discount_rates[i] != "") {
                if (discount_rates[i]['discount_types_id'] == selected_value) {
                    $('[name="discount_rate"]').append(
                        '<option value="' + discount_rates[i]['rate'] + '">' + discount_rates[i]['rate'] + "%" + "</option>"
                        );
                }
            }
        }
    });

    $(document).on('change', '#mems_overal_cost #mems_dis_type', function(){
        var selected_value = $('#mems_dis_type option:selected').data('type_id');
        $("body").find('#mems_overal_cost').find('#mems_dis_rate').empty();
        $('[name="mems_discount_rate"]').append(
            '<option value="' + "" + '">' + "Choose Rate" + "</option>"
            );
        for (var i = 0; i < discount_rates.length; i++) {
            if (discount_rates[i] != "") {
                if (discount_rates[i]['discount_types_id'] == selected_value) {
                    $('[name="mems_discount_rate"]').append(
                        '<option value="' + discount_rates[i]['rate'] + '">' + discount_rates[i]['rate'] + "%" + "</option>"
                        );
                }
            }
        }
    });


    var lib_no;
    var image_2in;
    var image_1in;
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $(document).on('click', '#toggleDropify', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        });
    });
    var items = 1;
    var items_provided = 1;
    var count_1 = 0;
    var count_provided = 0;
    var items_image = 1;
    var count_2 = 0;
    var items_image_1 = 1;
    var count_3 = 0;

    function copyLink() {
        var copyText = document.getElementById('link');
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function toastr(msg, type) {
        $('#toastr').text(msg);
        $('#toastr').removeClass('success');
        $('#toastr').removeClass('error');
        $('#toastr').addClass(type).fadeIn();

        setTimeout(function() {
            $('#toastr').fadeOut();
        }, 4000);
    }

    function alignment(className) {
        var align2 = 1;
        $(document).find('.' + className).each(function() {
            $(this).text(align2);
            align2++;
        });
    }

    function total_number_img_2() {
        var index = 0;
        var total = 0;
        $('[name="img_cost_2[]"]').each(function() {
            $(this).val(image_2in[index]);
            total += parseFloat(image_2in[index]);
            index++;
        });
        summary();
    }

    function total_number_img_1() {
        var total = 0;
        var index = 0;
        summary();
    }

    $(document).on('change', 'input, select', function() { 
        summary();
    });

    function calculate_mem_verse_words()
    {
        $("body").find('.mem_verse_price').each(function(index, value){
            mems_total_word_cost = parseFloat(total_word_cost) + parseFloat($(this).val());
            $("body").find("#mems_overal_cost").find('.total_words').val(mems_total_word_cost);
        });   
    }

    function calculate_mem_verse_words()
    {
        var total = 0;
        var count = 0;
        $(".mems_block").find('.library_verse_price').each(function() {
            count++;
            console.log($(this).val());
            total = total + parseInt($(this).val());
        });
        if(isNaN(parseFloat(total)))
        {
           total = 0; 
        }
        $("body").find("#mems_overal_cost").find('.total_words').val(total);
    }

    function calculate_library_verse_count()
    {
        total_verse = $(".mems_block").find(".row").length;
        if(isNaN(parseFloat(total_verse)))
        {
            total_verse = 0;
        }
        $("body").find("#mems_overal_cost").find('.verse').val(total_verse);
    }

    function calculate_provided_verse_count()
    {
        total_verse = $(".provided_block").find(".row").length;
        if(isNaN(parseFloat(total_verse)))
        {
            total_verse = 0;
        }
        $("body").find("#mems_overal_cost").find('.verse').val(total_verse);
    }

    $(document).on("keyup", '.mems_pro_no_of_words', function() {
        var count = $(this).val();
        var cost = 0;
        if (count !== "") {
            cost = count * 0.3;
            cost = cost.toFixed(2);
            $(this).closest('.row').find('.provided_verse_cost').val(cost);
            // calculate_verse_count();
            calculate_provided_verse_count();
            calculate_verse_price();
            //$("body").find("#mems_overal_cost").find('.total_words').val(cost);
        }
    });

    function summary() {
        var opening = 0;
        if ($('[name="Opening_cost"]').val() !== "")
            opening = parseFloat($('[name="Opening_cost"]').val()).toFixed(2);
        var verse_cost = 0;
        var pic_cost = 0;
        var total_amount = 0;
        var img_1 = 0;
        var img_2 = 0;
        if ($('body').find('[name="pro_lib"]').val() == "Provided") {
            if ($('[name="mems_pro_no_of_words"]').val() !== "")
                verse_cost = $('[name="mems_pro_no_of_words"]').val() * 0.3;
                calculate_mem_verse_words();
        } else if ($('body').find('[name="pro_lib"]').val() == "Library") {
            var total = 0;
            verse_cost = total;
            calculate_mem_verse_words();
        }
        if ($('body').find('[name="one_inches"]').val() == "Yes") {
            img_1 = parseFloat($('[name="total_cost_1"]').val());
            set_pictures_cost();
        }
        if ($('body').find('[name="two_inches"]').val() == "Yes") {
            img_2 = parseFloat($('[name="total_cost_2"]').val());
            set_pictures_cost();
        }
        var total_img = img_1 + img_2;
    }
    // Add More Provided
    $(document).on('click', '.add-more-provided', function() {
        if (count_provided < 40) {
            var content = $('#provided-item-1').html();
            $('.provided_block').append('<div class="row" id="provided-item-' + (items_provided + 1) + '">' + content + '</div>');
            $('#provided-item-' + (items_provided + 1)).find('input').val("");
            $('#provided-item-' + (items_provided + 1)).find('select').val("").change();
            $('#provided-item-' + (items_provided + 1)).find('.item-count-provided').text(items_provided + 1);
            $('body').find('[name="verse_total"]').val(items_provided + 1);
            $('#provided-item-' + (items_provided + 1)).find('.verse_numbering_provided').text(items_provided + 1);
            $('#provided-item-' + (items_provided + 1)).find('h3').append('<button type="button" class="remove-provided-item btn btn-sm btn-danger pull-right"><i class="fa fa-times"></i></button>');
            items_provided++;
            count_provided++;

            var align2 = 1;
            set_verse_cost();
            set_mems_words_cost();
            alignment('c1-provided');
            if (items_provided == 40)
                $(this).fadeOut();
            else
                $(this).fadeIn();

        }
    });
    //Now these are not used
    $(document).on('click', '.add-more', function() {
        if (count_1 < 40) {
            var content = $('#cart-item-1').html();
            $('.mems_block').append('<div class="row" id="cart-item-' + (items + 1) + '">' + content + '</div>');
            $('#cart-item-' + (items + 1)).find('input').val("");
            $('#cart-item-' + (items + 1)).find('select').val("").change();
            $('#cart-item-' + (items + 1)).find('.item-count').text(items + 1);
            $('#cart-item-' + (items + 1)).find('h3').append('<button type="button" class="remove-item btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
            items++;
            count_1++;
            var align2 = 1;
            alignment('c1');
            if (items == 40)
                $(this).fadeOut();
            else
                $(this).fadeIn();

        }
    });
    //Not used Now
    
    function initalize_datepickers()
    {
        $("body").find(".date").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy'
        });

        $("body").find(".datep").datepicker({
            daysOfWeekDisabled: [0, 1, 2, 3, 4, 5],
            autoclose: true,
            format: 'dd MM yy'
        });
        $("body").find(".datepicker").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-MM'
        });
        $("body").find('.datetimepicker').datetimepicker({
            autoclose: true,
            format: 'd/m/Y H:i a',
            minTime:'08:00',
            maxTime: '21:15',
            step:15,
        });

        // $(".date-pick").datepicker('setDate', new Date());
        $("body").find(".date-pick").datepicker({dateFormat: 'dd-MM-yy'});
        now_date = "{{ date('d-M-y') }}";
        $("body").find(".date-pick").val(now_date);
    }
    $(document).ready(function() {
        initalize_datepickers();

        // $(".date").datepicker({
        //     autoclose: true,
        //     todayHighlight: true,
        //     format: 'dd/mm/yyyy'
        // });

        // $(".datep").datepicker({
        //     daysOfWeekDisabled: [0, 1, 2, 3, 4, 5],
        //     autoclose: true,
        //     format: 'dd MM yy'
        // });
        // $(".datepicker").datepicker({
        //     autoclose: true,
        //     todayHighlight: true,
        //     format: 'dd-MM'
        // });
        // $('.datetimepicker').datetimepicker({
        //     autoclose: true,
        //     format: 'd/m/Y H:i a',
        //     minTime:'08:00',
        //     maxTime: '21:15',
        //     step:15,
        // });

        // // $(".date-pick").datepicker('setDate', new Date());
        // $(".date-pick").datepicker({dateFormat: 'dd-MM-yy'});
        // now_date = "{{ date('d-M-y') }}";
        // $(".date-pick").val(now_date);

        
        //$('.po-number').val(addZero(d.getDate()) + '' + addZero(d.getMonth()+1) + '' + d.getFullYear()+''+addZero(d.getHours())+''+addZero(d.getMinutes()));
        $('[name="Date"]').val(
            addZero(d.getDate()) + '/' + addZero(d.getMonth() + 1) + '/' + d.getFullYear()
            );
        $('[name="New_Ref_no"]').val(code);
        $(document).on('click', '.remove-item-2', function() {
            $(this).closest('.item-card').remove();
            alignment('c2');
            if (count_2 < 3)
                $('.add-more-image-2').fadeIn();
            count_2--;
            total_number_img_2();
        })
        $(document).on('click', '.remove-item-1', function() {
            $(this).closest('.item-card').remove();
            alignment('c3');
            if (count_3 < 7)
                $('.add-more-image-1').fadeIn();
            count_3--;
            total_number_img_1();

        })

        $(document).on('click', '.remove-item', function() {
            $(this).closest('.row').remove();
            alignment('c1');
            if (count_1 < 40)
                $('.add-more').fadeIn();
            count_1--;

        });

        $(document).on('click', '.remove-provided-item', function() {
            $(this).closest('.row').remove();
            set_verse_cost();
            alignment('c1-provided');
            if (count_provided < 40)
                $('.add-more').fadeIn();
            count_provided--;

        });

        $(document).on('change', '.mass_detail', function() {

            if ($(this).is(":checked")) {
                $('.ignore').addClass('hidden');
            } else {
                $('.ignore').removeClass('hidden');
            }
        });
    });
</script>
<script>
    $(document).on('change', '.valid-control', function(){
        $(this).closest("div").find(".alert-danger").remove();
    });

    $(document).on('keyup', '.valid-control', function(){
        $(this).closest("div").find(".alert-danger").remove();
    });

    $(document).on('change', '.opening1', function() {
        if ($(this).val() == "New1") {

            load_in_mems_new_form("{{ route('form.load.in_mems_new_form') }}");

        } else if ($(this).val() == "Existing Opening") {
            load_in_mems_existing_form("{{ route('form.load.in_mems_existing_form') }}");

        } else if ($(this).val() == "Expected Opening") {

        }
        calculate_mems_total_cost();
    });

    $(document).on('change', '.pro_lib', function() {
        if ($(this).val() == "Provided") {
            $("body").find("#mems_overal_cost").find('.total_words').val('');
            $("body").find("#mems_overal_cost").find('.picture').val('');
            $(this).closest('.row').find('.show-on-provided').removeClass('hidden');
            $(this).closest('.row').find('.show-on-library').addClass('hidden');
            $('.show-on-library-btn').addClass('hidden');
            calculate_provided_verse_count();
        } else if ($(this).val() == "Library") {
            $("body").find("#mems_overal_cost").find('.total_words').val('');
            $("body").find("#mems_overal_cost").find('.picture').val('');
            $(this).closest('.row').find('.show-on-provided').addClass('hidden');
            $(this).closest('.row').find('.show-on-library').removeClass('hidden');

            $('.show-on-library-btn').removeClass('hidden');
            calculate_library_verse_count();
        }
        calculate_verse_price();
        calculate_mems_pic_price();
    });
    $(document).on('change', '.type-1', function() {
        $('[name="type_1"]').val($(this).val());
        if ($(this).val() == "Acknowledgement") {
            load_acknowledgement_form("{{ route('form.load.acknowledgement_form') }}");
            $('.form-1').addClass('hidden');
            $('.form-2').removeClass('hidden');
        } else if ($(this).val() == "In mems") {
            load_in_mems_form("{{ route('form.load.in_mems_form') }}");
            $('.form-2').addClass('hidden');
            $('.form-1').removeClass('hidden');
            $('.opening1').find('.new-o').removeClass('hidden');
        } else if ($(this).val() == "In mems add on") {
            /*$('.form-2').addClass('hidden');
            $('.form-1').removeClass('hidden');
            $('.opening1').find('.new-o').addClass('hidden');*/
        }
    });

    function length_of_Inch_1() {
        var total_1_inch_cost = 0;
        odd_value = "{{ $setting['photo_cost_1inch_1st'] ?? 0 }}";
        even_value = "{{ $setting['photo_cost_1inch_2nd'] ?? 0 }}";
        odd_value = parseFloat(odd_value).toFixed(2);
        even_value = parseFloat(even_value).toFixed(2);
        var index_key = 0;
        $(".img_cost_1_ack").each(function(key, value){
            var one_inch_image = $(value);
            index_key = key + 1;
            if( index_key % 2 == 0 )
            {
                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(even_value);
                one_inch_image.val(even_value);
            }else
            {

                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(odd_value);
                one_inch_image.val(odd_value);
            }
            
        });
        if (index_key <= 1) {
            $("#inch_1").find('.rmv').addClass('hidden');
        }

        $("#inch_1").find('input[name="total_number_1_ack"]').val(index_key);
        $("#inch_1").find('input[name="images_cost_1_ack"]').val(total_1_inch_cost.toFixed(2));
        $("#acknowledge").find('input[name="picCost"]').val(total_1_inch_cost.toFixed(2));

        var total_word = $("#acknowledge").find('input[name="wordsCost"]').val();
        var total_cost = parseFloat(total_1_inch_cost) + parseFloat(total_word);
        $("#acknowledge").find('input[name="Total_amount_1_ack"]').val(total_cost.toFixed(2));
        var discounts_amount = $("#acknowledge").find('input[name="discount_amount"]').val();
        var final_cost = total_cost - discounts_amount;
        $("#acknowledge").find('input[name="final_cost_ack"]').val(final_cost.toFixed(2));
    }

    function length_of_Inch_2() {
        var count = 0;
        $("#inch_2").find('.img_cost_2_ack').each(function() {
            count++;
        });
        $("#inch_2").find('input[name="total_number_2_ack"]').val(count);
        var Inch_2 = "{{$setting['photo_cost_2inch'] ?? ''}}";
        var total = count * Inch_2;
        $("#inch_2").find('input[name="images_cost_2_ack"]').val(total);

        $("#acknowledge").find('input[name="picCost"]').val(total.toFixed(2));

        var total_word = $("#acknowledge").find('input[name="wordsCost"]').val();
        var total_cost = parseInt(total) + parseFloat(total_word);
        $("#acknowledge").find('input[name="Total_amount_1_ack"]').val(total_cost.toFixed(2));
        var discounts_amount = $("#acknowledge").find('input[name="discount_amount"]').val();
        var final_cost = total_cost - parseFloat(discounts_amount);
        $("#acknowledge").find('input[name="final_cost_ack"]').val(final_cost.toFixed(3));
    }

    function length_of_Inch_2_mems() {
        var count = 0;
        $("body").find("#mems_images").find('.img_cost_2inch_mems').each(function() {
            count++;
        });
        if (count <= 1) {
            $("body").find("#mems_images").find('.rmv_2').addClass('hidden');
        }
        $("body").find("#mems_images").find('input[name="total_number_2"]').val(count);

        var Inch_2 = "{{$setting['photo_cost_2inch'] ?? ''}}";
        var total = count * Inch_2;
        $("body").find("#mems_images").find('input[name="total_cost_2"]').val(total.toFixed(2));
        calculate_mems_total_cost();

    }
    function dynamic_prices_of_images()
    {
        var total_1_inch_cost = 0;
        odd_value = "{{ $setting['photo_cost_1inch_1st'] ?? 0 }}";
        even_value = "{{ $setting['photo_cost_1inch_2nd'] ?? 0 }}";
        odd_value = parseFloat(odd_value).toFixed(2);
        even_value = parseFloat(even_value).toFixed(2);
        $(".img_cost_1inch_mems").each(function(key, value){
            var one_inch_image = $(value);
            index_key = key + 1;
            if( index_key % 2 == 0 )
            {
                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(even_value);
                one_inch_image.val(even_value);
            }else
            {

                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(odd_value);
                one_inch_image.val(odd_value);
            }
            
        });
    }
    function length_of_Inch_1_mems() {
        var total_1_inch_cost = 0;
        odd_value = "{{ $setting['photo_cost_1inch_1st'] ?? 0 }}";
        even_value = "{{ $setting['photo_cost_1inch_2nd'] ?? 0 }}";
        odd_value = parseFloat(odd_value).toFixed(2);
        even_value = parseFloat(even_value).toFixed(2);
        $(".img_cost_1inch_mems").each(function(key, value){
            var one_inch_image = $(value);
            index_key = key + 1;
            if( index_key % 2 == 0 )
            {
                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(even_value);
                one_inch_image.val(even_value);
            }else
            {

                total_1_inch_cost = parseFloat(total_1_inch_cost) + parseFloat(odd_value);
                one_inch_image.val(odd_value);
            }
            
        });
        var inch_1_price = $("#mems_images").find('input[name="total_cost_1"]:visible').val(total_1_inch_cost.toFixed(2));
        if (index_key <= 1) {
            $("#mems_images").find('.rmv_1').addClass('hidden');
        }
        $("#mems_images").find('input[name="total_number_1"]').val(index_key);
        calculate_mems_total_cost();
    }

    function calculate_mems_pic_price() {

        length_of_Inch_2_mems();
        length_of_Inch_1_mems();

        var inch_2_price = $('body').find("#mems_images").find('input[name="total_cost_2"]:visible').val();
        var inch_1_price = $('body').find("#mems_images").find('input[name="total_cost_1"]:visible').val();

        if (typeof inch_2_price == "undefined") {
            inch_2_price = 0
        }
        if (typeof inch_1_price == "undefined") {
            inch_1_price = 0
        }

        var total_pic_price = parseFloat(inch_2_price) + parseFloat(inch_1_price);

        if(isNaN(parseFloat(total_pic_price)))
        {
            total_pic_price = 0;
        }
        $("body").find("#mems_overal_cost").find('.picture').val(total_pic_price.toFixed(2));
        calculate_mems_total_cost();
    }

    function calculate_verse_price() {
        var value = $('select.pro_lib option:selected').val();
        var count = 0;
        var total = 0;
        if (value == "Provided") {
            $(".provided_block").find('.provided_verse_cost').each(function() {
                count++;
                console.log($(this).val());
                total = total + parseFloat($(this).val());
            });
        }
        if (value == "Library") {
            $(".mems_verse").find('.library_verse_price').each(function(index) {
                count++;
                total = total + parseFloat($(this).val());
                console.log("Total word price = " + total);
            }); 
        }
        total = parseFloat(total);
        if(isNaN(total))
        {
            total = 0;
        }
        // console.log("Total Provided = "+ total);
        $(".hidden_total_verse_cost").val(total);
        calculate_mems_total_cost();
    }

    function calculate_mems_total_cost() {
        var words_price = $("body").find("#mems_overal_cost").find('.total_words').val();
        var picture_price = $("body").find("#mems_overal_cost").find('.picture').val();
        var opening_cost = $("body").find("#mems_overal_cost").find('input[name="opening_cost"]:visible').val();
        var verse_price = $(".hidden_total_verse_cost").val();


        if (typeof words_price == "undefined" || words_price == "") {
            words_price = 0
        }
        if (typeof picture_price == "undefined" || picture_price == "") {
            picture_price = 0
        }
        if (typeof opening_cost == "undefined" || opening_cost == "") {
            opening_cost = 0
        }
        if (typeof verse_price == "undefined" || verse_price == "") {
            verse_price = 0
        }
        var total_cost = parseFloat(words_price) + parseFloat(picture_price) + parseFloat(opening_cost) + parseFloat(verse_price);
        total_cost = parseFloat(total_cost);
        if(isNaN(total_cost))
        {
            total_cost = 0;
        }
        $("body").find("#mems_overal_cost").find('.Total_amount_1').val(total_cost.toFixed(2));
        $("body").find("#mems_overal_cost").find('.final_cost').val(total_cost.toFixed(2));
    }

    $(document).on('change', '#mems_overal_cost #mems_dis_rate', function(){
        var cost = $("body").find('#mems_overal_cost').find('.Total_amount_1').val();
        if (cost) {
            var discount_rate = parseInt($(this).val());
            var discount_val = discount_rate / 100;
            var discount = cost * discount_val;
            $("body").find('#mems_overal_cost').find('input[name="mems_discount_amount"]').val(discount.toFixed(3));
            var final_cost = parseFloat(cost) - parseFloat(discount);
            if(isNaN(parseInt(final_cost)))
            {
                final_cost = 0;
                $("body").find("#mems_overal_cost").find('.final_cost').val(final_cost);
            }else{
                $("body").find("#mems_overal_cost").find('.final_cost').val(final_cost.toFixed(2));
            }
            
        }
    });

    $(document).on("change", "#mems_overal_cost .pay_method", function(){
        var selected_value = $(this).val();
        if (selected_value == "Cash") {
            $("body").find("#mems_overal_cost").find('.show_on_cash').removeClass('hidden');
            $("body").find("#mems_overal_cost").find('.show_on_card').addClass('hidden');
        }
        if (selected_value == "Card") {
            $("body").find("#mems_overal_cost").find('.show_on_card').removeClass('hidden');
            $("body").find("#mems_overal_cost").find('.show_on_cash').addClass('hidden');
        }
    });

    $(document).on("change", "#acknowledge .pay_method", function(){
        var selected_value = $(this).val();
        if (selected_value == "Cash") {
            $("#acknowledge").find('.show_on_card').addClass('hidden');
            $("#acknowledge").find('.general_pay_method').removeClass('hidden');
        }
        if (selected_value == "Card") {
            $("#acknowledge").find('.show_on_card').removeClass('hidden');
            $("#acknowledge").find('.general_pay_method').removeClass('hidden');
        }
    });
    


    $(document).on('click', '#add_more_for_ack', function() {
        $('.rmv').removeClass('hidden');
        add_z_index_on_cross();
        var $clone = $("#for_clone").clone().insertAfter("#for_clone");
        length_of_Inch_1();
    });
    $(document).on('click', '.rmv', function() {
        $(this).closest("#for_clone").remove();
        length_of_Inch_1();
    });

    //for mems 2 inch images
    $(document).on('click', '#add_more_2inch_mems', function() {
        twoInchesAddMore();
        set_pictures_cost();
        set_mems_total_cost();
    });
    $(document).on('click', '.rmv_2', function() {
        $(this).closest("#inch_2_mems").remove();
        length_of_Inch_2_mems();
        calculate_mems_pic_price();
    });

    //for mems 1inch images
    $(document).on('click', '#add_more_1inch_mems', function() {
        oneInchesAddMore();
        set_pictures_cost();
        set_mems_total_cost();
    });
    $(document).on('click', '.rmv_1', function() {
        $(this).closest("#inch_1_mems").remove();
        length_of_Inch_1_mems();
        calculate_mems_pic_price();
    });

    $(document).on('change', '#acknowledge #discount', function(){
        if ($(this).val() == "discount_yes") {
            $('.dis_rate').removeClass('hidden');
            $('.dis_amount').removeClass('hidden');
            $('.dis_type').removeClass('hidden');
        } else if ($(this).val() == "discount_no") {
            $('.dis_rate').addClass('hidden');
            $('.dis_amount').addClass('hidden');
            $('.dis_type').addClass('hidden');
        } else {}
    });

    //For mems Discount
    $(document).on('change', '#mems_overal_cost #discount', function(){
        if ($(this).val() == "discount_yes") {
            $('.mems_dis_rate').removeClass('hidden');
            $('.mems_dis_amount').removeClass('hidden');
            $('.mems_dis_type').removeClass('hidden');
        } else if ($(this).val() == "discount_no") {
            $('.mems_dis_rate').addClass('hidden');
            $('.mems_dis_amount').addClass('hidden');
            $('.mems_dis_type').addClass('hidden');
        } else {}
    });

    $(document).on('change', '#acknowledge #dis_rate', function(){
        var cost = $('body').find('#acknowledge').find('input[name="Total_amount_1_ack"]').val();
        if (cost) {
            var discount_rate = parseInt($(this).val());
            var discount_val = discount_rate / 100;
            var discount = cost * discount_val;
            $('#acknowledge').find('input[name="discount_amount"]').val(discount.toFixed(3));
            var sl_value = $('.image_size :selected').val();
            if (sl_value == "1") {
                length_of_Inch_1();
            } else if (sl_value == "2") {
                length_of_Inch_2();
            } else {}
        }
    });

    $(document).on('change', '.Ad_img', function(){
        if ($(this).val() == "Yes") {
            length_of_Inch_1();
            $(this).closest('.row').find('.show-on-yes').removeClass('hidden');
            $('.img-btn').find('.show-on-yes').removeClass('hidden');
        } else if ($(this).val() == "No") {
            $(this).closest('.row').find('.show-on-yes').addClass('hidden');
            $('.img-btn').find('.show-on-yes').addClass('hidden');
        } else {
            $(this).closest('.row').find('.show-on-yes').addClass('hidden');
            $('.img-btn').find('.show-on-yes').addClass('hidden');
        }
    });

    $(document).on('change', '.image_size', function(){
        var sl_value = $('.image_size :selected').val();
        if (sl_value == "1") {
            length_of_Inch_1();
            $('#inch_1').removeClass('hidden');
            $('#inch_2').addClass('hidden');
        } else if (sl_value == "2") {
            length_of_Inch_2();
            $('#inch_1').addClass('hidden');
            $('#inch_2').removeClass('hidden');
        } else {

        }
    });

    $(document).on('change', '.two_inches', function() {
        if ($(this).val() == "Yes") {
            $('.cost_total_img').find('.show-on-yes3').removeClass('hidden');
            $(this).closest('.row').find('.show-on-yes2').removeClass('hidden');
        } else if ($(this).val() == "No") {
            $('.cost_total_img').find('.show-on-yes3').addClass('hidden');
            $(this).closest('.row').find('.show-on-yes2').addClass('hidden');           
        }
        calculate_mems_pic_price(); 
        set_pictures_cost();
        set_mems_total_cost();
    });

    $(document).on('change', '.one_inches', function() {
        if ($(this).val() == "Yes") {
            $('.cost_total_img').find('.show-on-yes2').removeClass('hidden');
            $(this).closest('.row').find('.yes-show').removeClass('hidden');
            calculate_mems_pic_price();
        } else if ($(this).val() == "No") {
            $('.cost_total_img').find('.show-on-yes2').addClass('hidden');
            $(this).closest('.row').find('.yes-show').addClass('hidden');
            calculate_mems_pic_price();
            
        }
        set_pictures_cost();
        set_mems_total_cost();
    });

    $(document).on('change', '.needed_img', function() {
        if ($(this).val() == "2 Inch") {
            $(this).closest('.row').find('.show-on-yes3').addClass('hidden');
            $('.cost_total_img').find('.show-on-yes2').addClass('hidden');
            $('.cost_total_img').find('.show-on-yes3').removeClass('hidden');
            $(this).closest('.row').find('.show-on-yes2').removeClass('hidden');
        }
        if ($(this).val() == "1 Inch") {
            $(this).closest('.row').find('.show-on-yes2').addClass('hidden');
            $('.cost_total_img').find('.show-on-yes2').removeClass('hidden');
            $('.cost_total_img').find('.show-on-yes3').addClass('hidden');
            $(this).closest('.row').find('.show-on-yes3').removeClass('hidden');
        }
    });

    $(document).on('change', '.spcl_ins', function() {
        if ($(this).val() == "Yes") {
            $(this).closest('.row').find('.show-on-permit').removeClass('hidden');
        }
        if ($(this).val() == "No") {
            $(this).closest('.row').find('.show-on-permit').addClass('hidden');
        }
    });

    $(document).on("change", ".dropify", function() {
        var file = this.files[0];
        var action = $(this).closest(".imgDiv").find(".img");
        var fr = new FileReader();
        fr.fileName = file.name;
        fr.onload = function(e) {
            e.target.result;
            action.find(".file_data").val(e.target.result.replace(/^.*,/, ""));
            action.find(".file_type").val(e.target.result.match(/^.*(?=;)/)[0]);
            action.find(".file_name").val(e.target.fileName);
        };
        fr.readAsDataURL(file);
    });

    function add_z_index_on_cross()
    {
        $('body').find(".rmv").closest(".col-lg-12").css('z-index', 1);
        $('body').find(".rmv_2").closest(".col-lg-12").css('z-index', 1);
        $('body').find(".rmv_1").closest(".col-lg-12").css('z-index', 1);
    }

    $(document).on('keyup', '[type="text"]', function(){
        $(this).closest(".col-md-6").find(".error").addClass("d-none");
    });

    $(document).on("click", "#Seek-btn, #Hide-btn", function(){
        // console.log("Form Submitting...");
        if(validate())
        {
            console.log("Everything is Fine..");
            $("#limerick_form").submit();
        }else{
            console.log("Not Fine");
        }

    });

    function load_header_form(url)
    {
        $.get(url, function(data){
            $(".header_form").html(data);
        });
    }

    function load_acknowledgement_form(url)
    {
        $.get(url, function(data){
            $(".acknowledgement_form").html(data);
            library_verses_options();
            discount_types_options();
            initalize_datepickers();
        });
    }

    function load_in_mems_form(url)
    {
        $.get(url, function(data){
            $(".in_mems_form").html(data);
            library_verses_options();
            discount_types_options();
            initalize_datepickers();
        });
    }

    function load_in_mems_new_form(url)
    {
        $.get(url, function(data){
            $(".in_mems_form").html(data);

            // jquery on new html
            library_verses_options();
            discount_types_options();

            initalize_datepickers();
            $(".in_mems_form").find('[name="New_Ref_no"]').val(code);
            $(".opening1").closest('.row').find('.show-on-exis').addClass('hidden');
            $('.show-on-new').removeClass('hidden');
            $(".in_mems_form").find("#mems_overal_cost").find('.opening_cost').removeClass('hidden');
        });
    }

    function load_in_mems_existing_form(url)
    {
        $.get(url, function(data){
            $(".in_mems_form").html(data);

            // jquery on new html
            library_verses_options();
            discount_types_options();

            initalize_datepickers();
            
            $(".in_mems_form").find('.show-on-new').addClass("hidden");
            $(".in_mems_form").find('.show-on-exis').removeClass("hidden");
            $(".in_mems_form").find('#mems_overal_cost').find('.opening_cost').addClass('hidden');
        });
    }

    function load_in_mems_existing_data_form(url)
    {
        $.get(url, function(data){
            $(".in_mems_form").html(data.html);

            // add more work

            $('body').find('[name="pro_lib"]').change();
            $('body').find('.change-event').change();
            library_verses_options();
            discount_types_options();

            // if(data.library_verse)
            // {
            //     library_data = data.library_data;
            //     map_library_verse_data(library_data);
            // }
            console.log(data);
            // console.log(mem_verse);
            if(data.mem_verse)
            {
                mem_verse_data = data.mem_verse_data;
                console.log(mem_verse_data);
                // map_provided_verse_data(mem_verse_data);

            }
            remove_first_cross();
            add_z_index_on_cross();
            console.log(data.images_data);
            // map_one_inches_data(data.images_data);
            // map_two_inches_data(data.images_data);

            // jquery on new html
            initalize_datepickers();
            $(".opening1").closest('.row').find('.show-on-exis').addClass('hidden');
            $('.show-on-new').removeClass('hidden');
            $(".in_mems_form").find("#mems_overal_cost").find('.opening_cost').removeClass('hidden');
            $('[name="pro_lib"]').change();

            // show_new_in_memes_form
        });
    }

    function mapDataToFields(data)
    {
        $.map(data, function(value, index){
            var input = $('[name="'+index+'"]');
            if($(input).length && $(input).attr('type') !== 'file')
            {
              if(($(input).attr('type') == 'radio' || $(input).attr('type') == 'checkbox') && value == $(input).val())
              {
                $(input).prop('checked', true);
              }else
              {
                $(input).val(value).change();
              }
            }
        });
    }

    function providedVerseAddMore()
    {
        pointer = get_provided_verse_length();
        content = $('#provided-item-1').html();
        $('.provided_block').append('<div class="row" id="provided-item-' + (items_provided + 1) + '">' + content + '</div>');
        $('#provided-item-' + (items_provided + 1)).find('input').val("");
        $('#provided-item-' + (items_provided + 1)).find('select').val("").change();
        $('#provided-item-' + (items_provided + 1)).find('.item-count-provided').text(items_provided + 1);
        $('body').find('[name="verse_total"]').val(items_provided + 1);
        $('#provided-item-' + (items_provided + 1)).find('.verse_numbering_provided').text(items_provided + 1);
        $('#provided-item-' + (items_provided + 1)).find('h3').append('<button type="button" class="remove-provided-item btn btn-sm btn-danger pull-right"><i class="fa fa-times"></i></button>');
        items_provided++;
        var align2 = 1;
        set_verse_cost();
        set_mems_total_cost();
        alignment('c1-provided');
        if (items_provided == 40)
            $(this).fadeOut();
        else
            $(this).fadeIn();
    }

    function libraryVerseAddMore()
    {
        pointer = get_library_verse_length();
        var content = $('#cart-item-1').html();
        $('.mems_block').append('<div class="row" id="cart-item-' + (items + 1) + '">' + content + '</div>');
        $('#cart-item-' + (items + 1)).find('input').val("");
        $('#cart-item-' + (items + 1)).find('select').val("").change();
        $('#cart-item-' + (items + 1)).find('.item-count').text(items + 1);
        $('#cart-item-' + (items + 1)).find('h3').append('<button type="button" class="remove-item btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
        items++;
        var align2 = 1;
        alignment('c1');
        if (items == 40)
            $(this).fadeOut();
        else
            $(this).fadeIn();
    }

    function oneInchesAddMore()
    {
        var $clone = $("#inch_1_mems").clone().insertAfter("#inch_1_mems");
        remove_first_cross();
        add_z_index_on_cross();
        length_of_Inch_1_mems();
        calculate_mems_pic_price();
    }

    function twoInchesAddMore()
    {
        
        add_z_index_on_cross();
        var $clone = $("#inch_2_mems").clone().insertAfter("#inch_2_mems");
        remove_first_cross();
        length_of_Inch_2_mems();
        calculate_mems_pic_price();
    }

    function remove_first_cross()
    {
        $('body').find(".rmv_2").each(function(index, value){
            console.log(index);
            if(index !== 0)
            {
                $(this).removeClass('hidden');
            }
        });

        $('body').find(".rmv_1").each(function(index, value){
            if(index !== 0)
            {
               $(this).removeClass('hidden');
            }
        });
    }

    function map_provided_verse_data(blind)
    {
        if(blind.length > 0)
        {
            console.log(blind.length)
            for(var i = 0; i < blind.length; i++)
            {
                // console.log(i);
                console.log(blind[i]);
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_type[]"]').val(blind[i]['mem_verse_type']).change();
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_library_no[]"]').val(blind[i]['mem_verse_library_no']);//.change();
                // console.log(blind[i]['mem_verse_no_of_words']);
                // console.log($('#provided-item-'+(i + 1)).find('[name="mem_verse_no_of_words[]"]').val());
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_no_of_words[]"]').val(blind[i]['mem_verse_no_of_words']);//.change();

                console.log($('#provided-item-'+(i + 1)).find('[name="mem_verse_no_of_words[]"]').val());
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_price[]"]').val(blind[i]['mem_verse_price']);//.change();
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_person_leaving_comment[]"]').val(blind[i]['mem_verse_person_leaving_comment']);//.change();
                $('#provided-item-'+(i + 1)).find('[name="mem_verse_message[]"]').val(blind[i]['mem_verse_message']);//.change();

                if(i !== blind.length - 1)
                    providedVerseAddMore();
            }
        }
    }

    function map_library_verse_data(blind)
    {
        if(blind.length > 0)
        {
            for(var i = 0; i < blind.length; i++)
            {
                // console.log(i);
                $('#cart-item-'+(i + 1)).find('[name="lib_no[]"]').val(blind[i]['lib_no']).change();
                $('#cart-item-'+(i + 1)).find('[name="No_of_words[]"]').val(blind[i]['No_of_words']).change();
                $('#cart-item-'+(i + 1)).find('[name="library_verse_price[]"]').val(blind[i]['library_verse_price']).change();
                $('#cart-item-'+(i + 1)).find('[name="message_type[]"]').val(blind[i]['message_type']).change();
                $('#cart-item-'+(i + 1)).find('[name="leaving_verse_person[]"]').val(blind[i]['leaving_verse_person']).change();

                if(i !== blind.length - 1)
                    libraryVerseAddMore();
            }
        }
    }

    function map_one_inches_data(blind)
    {
        var x = 1;
        var y = 1;
        if(blind.length > 0)
        {
            for(var i = 0; i < blind.length; i++)
            {
                //console.log("Image Type = " + blind[i]['img_type_1']);
                console.log(i);
                if(blind[i]['img_type_1'] !== null)
                {
                    console.log("Iteration Of One Inche " + y);
                    y++;
                    console.log('#cart-item21-'+x);
                    $('#cart-item21-'+(x)).find('[name="img_type_1[]"]').val(blind[i]['img_type_1']).change();
                    $('#cart-item21-'+(x)).find('[name="img_cost_1[]"]').val(blind[i]['img_cost_1']).change();
                    $('#cart-item21-'+(x)).find('[name="total_number_1[]"]').val(blind[i]['total_number_1']).change();
                    $('#cart-item21-'+(x)).find('[name="total_cost_1[]"]').val(blind[i]['total_cost_1']).change();
                    x++;
                    if(i !== blind.length - 1)
                        oneInchesAddMore();
                }
                
            }
        }
    }

    function map_two_inches_data(blind)
    {
        x=1;
        console.log("Two Inches Length  " + blind);
        if(blind.length > 0)
        {
            for(var i = 0; i < blind.length; i++)
            {
                // console.log(i);
                if(blind[i]['img_type_2'] !== null)
                {
                    $('#cart-item2-'+(x)).find('[name="img_type_2[]"]').val(blind[i]['img_type_2']).change();
                    $('#cart-item2-'+(x)).find('[name="img_cost_2inch[]"]').val(blind[i]['img_cost_2inch']).change();
                    x++;

                    if(i !== blind.length - 1)
                        twoInchesAddMore(); 
                }
                
            }
        }
    }

    function get_provided_verse_length()
    {
        return $("body").find(".provided_block").find(".row").length;
    }

    function get_library_verse_length()
    {
        return $("body").find(".mems_block .row").length;
    }

    function get_one_inches_length()
    {
        return $("body").find(".one_inches_block").length;
    }

    function get_two_inches_length()
    {
        return $("body").find(".two_inches_block").length;
    }

    function callAddMore()
    {
        var equipment_data = <?php echo json_encode("eng_form->engineer_equipments->toArray()"); ?>;
        map_equipments_data(equipment_data);
    }

    $(document).on("change", ".mem_verse_type", function(){
        $mem_verse_type = $(this).val();
        if( $mem_verse_type === "1" )
        {
            $(this).closest(".row").find(".mem_verse_library_no_backup").hide();
            $(this).closest(".row").find(".mem_verse_library_no").show();
            $(this).closest(".row").find('[name="mem_verse_no_of_words[]"]').prop('readonly', true);

        }else
        {
            $(this).closest(".row").find(".mem_verse_library_no_backup").show();
            $(this).closest(".row").find(".mem_verse_library_no").hide();
            $(this).closest(".row").find('[name="mem_verse_no_of_words[]"]').prop('readonly', false);
        }
    });

    $(document).on("change", '[name="mem_verse_no_of_words[]"]', function(){
        // alert("Calling...");
        set_mems_words_cost();
        set_verse_cost();
        set_mems_total_cost();
    });

    $(document).on("change", '[name="mem_verse_library_no[]"]', function(){
        lib_id = $(this).val();
        this_lib = $(this);
        if (lib_id!=="") {
            load_library_words_and_cost("{{ route('form.load.library.words.cost') }}?id="+lib_id, this_lib);
        }
    });

    

    function load_library_words_and_cost(url, this_lib)
    {
        $.get(url, function(response){
            this_lib.closest(".row").find('[name="mem_verse_no_of_words[]"]').val(response.words);
            this_lib.closest(".row").find('[name="mem_verse_price[]"]').val(response.price);
            set_mems_words_cost();
            set_verse_cost();
            set_mems_total_cost();
        });
    }

    function set_verse_cost()
    {
        mems_total_verse_cost = $('body').find('.provided_block .row').length;
        $("body").find(['name="verse_total"']).val(mems_total_verse_cost);
    }

    function set_pictures_cost()
    {
        mems_total_picture_cost = 0;
        if($("body").find('[name="total_cost_1"]:visible').length > 0)
        {
            mems_total_one_inch_picture_cost = $("body").find('[name="total_cost_1"]:visible').val();
        }
        if($("body").find('[name="total_cost_2"]:visible').length > 0)
        {
            mems_total_two_inch_picture_cost = $("body").find('[name="total_cost_2"]:visible').val();

        }
        mems_total_picture_cost = parseFloat(mems_total_one_inch_picture_cost) + parseFloat(mems_total_two_inch_picture_cost);
        mems_total_picture_cost = parseFloat(mems_total_picture_cost).toFixed(2);
        $("body").find("#mems_overal_cost").find('[name="Pictures_total"]').val(mems_total_picture_cost);
    }

    function set_mems_words_cost()
    {
        mems_total_word_cost = 0;
        $("body").find('[name="mem_verse_price[]"]').each(function(index, value){
            if($(this).val() !== '')
            {
                mems_total_word_cost = parseFloat(mems_total_word_cost) + parseFloat($(this).val());
                mems_total_word_cost = mems_total_word_cost.toFixed(2);
            }
        });
        $("body").find("#mems_overal_cost").find('[name="total_words"]').val(mems_total_word_cost);
    }

    function set_mems_total_cost()
    {
        mems_final_cost = 0;
        mems_total_cost = 0;
        // var total_cost = parseFloat(words_price) + parseFloat(picture_price) + parseFloat(opening_cost) + parseFloat(verse_price);
        mems_opening_cost = parseFloat($('[name="opening_cost"]').val()).toFixed(2);
        mems_total_cost = parseFloat(mems_total_word_cost) + parseFloat(mems_total_picture_cost) + parseFloat(mems_opening_cost);
        mems_total_cost = parseFloat(mems_total_cost).toFixed(2);
        mems_final_cost = mems_total_cost;
        if(isNaN(mems_total_cost))
        {
            mems_total_cost = 0;
            mems_final_cost = 0;
        }
        $('body').find('[name="Total_amount_1_mems"]').val(mems_total_cost);
        $('body').find('[name="final_cost_mems"]').val(mems_final_cost);
    }

    $(document).on("keyup", "body .ack_message", function()
    {
        limerick_word_count($(this));
        
    });

    function limerick_word_count(this_elm)
    {
        if(this_elm.val())
        {
            console.log("Value_Word_count = "+ this_elm.val());
            // alert("Value");
            var s = this_elm.val().replace(/(^\s*)|(\s*$)/gi, "").replace(/[ ]{2,}/gi, " ").replace(/\n /, "\n");
            var wordCount = s.split(" ").length;
            $("body").find(".ack_word_count").val(wordCount).keyup();
        }else{
            // alert("Empty");
            $("body").find(".ack_word_count").val(0).keyup();
            $("body").find('[name="wordCost"]').val(0);
        }
        
    }

   $(document).on('keyup', '[name="wordCount"]', function () {
      var count = $(this).val();
      if (count !== "") {
        if (count > 80) cost = parseFloat('{{setting()["cost_first_80_word_acknowlede"]}}') + ((count - 80) * '{{setting()["cost_per_word_acknowlede"]}}' );
        else {
          cost = '{{setting()["cost_first_80_word_acknowlede"]}}';
        }
        $('[name="wordCost"]').val(cost);
        $('[name="wordsCost"]').val(cost);
        set_total_ack_cost();
      }  
    });
        function set_total_ack_cost()
        {
            ack_total_cost = 0;
            $("body").find(".ack_total_cost").each(function(index, value){
                cost = $(this).val();
                if(isNaN(parseInt(cost)))
                {
                    cost = 0;
                }
                ack_total_cost = parseFloat(ack_total_cost) + parseFloat(cost);
                if(isNaN(parseInt(ack_total_cost)))
                {
                    ack_total_cost = 0;
                }
                $("body").find(".ack_total_cost_field").val(ack_total_cost.toFixed(1));
                $("body").find(".ack_final_cost_field").val(ack_total_cost.toFixed(1));
            });
        }
</script>