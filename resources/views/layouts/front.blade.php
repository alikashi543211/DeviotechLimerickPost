<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Limerick</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.datetimepicker.css" />

    <style type="text/css">
        body {
            font-family: 'Quicksand';
        }

        #toastr {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 30px;
            border-radius: 8px;
            display: none;
            margin-top: 10px;
            margin-bottom: 25px;
        }

        #toastr.success {
            background-color: rgba(40, 167, 69, .8);
        }

        #toastr.error {
            background-color: rgba(220, 53, 69, .8);
        }

        .loader-overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, .8);
            display: table;
            z-index: -1;
            text-align: center;
            visibility: hidden;
            opacity: 0;
            padding-top: 4%;
        }

        .plf-15 {
            padding-left: 0;
        }

        .loader-text {
            display: table-cell;
            vertical-align: top;
            font-size: 24px;
            font-style: italic;
            color: #0085c5;
            font-weight: bold;
        }

        .loader-overlay.show {
            visibility: visible;
            opacity: 1;
            z-index: 1;
        }

        .error {
            padding: 2px 5px;
            font-size: 12px;
            margin-top: -22px;
            margin-bottom: 10px;
        }

        .mt-2 {
            margin-top: 2%;
        }

        .mt-2 {
            margin-bottom: 2%;
        }

        label {
            font-weight: bold;
            font-size: 0.8rem !important;
        }

        .form {
            box-shadow: 0px 0px 15px #aaa;
        }

        .form input[type="email"],
        .form input[type="number"],
        .form input[type="password"],
        .form input[type="text"],
        .form select,
        .form textarea {
            height: 38px;
            /*margin-bottom: 0px;*/
        }

        .form input {
            padding-right: 16px !important;
        }

        .table input,
        .table select {
            margin-bottom: 0px !important
        }

        .hidden {
            display: none;
        }

        .bg-gray {
            background: #eee;
        }

        .table td,
        .table th {
            font-size: 14px;
        }

        td input {
            margin-bottom: 3px !important;
        }

        .error {
            margin-top: 0px;
        }

        label.error {
            padding: 2px 5px;
            font-size: 11px !important;
            margin-top: -24px;
            color: red !important;
        }

        .header {
            background: #0085c5;
            height: 350px;
        }

        .header h1 {
            padding-top: 90px;
            color: #4e6329;
        }

        .form .accordion {
            margin-top: 0px;
        }

        .btn-theme {
            background-image: linear-gradient(-180deg, #4ab2e2 20%, #0085c5 100%);
            margin-bottom: 20px;
            color: #fff;
            font-weight: bold;
        }

        .btn-theme:hover,
        .btn-theme:active,
        .btn-theme:focus {
            background-image: linear-gradient(360deg, #4ab2e2 20%, #0085c5 100%);
            color: #fff;
        }

        .form textarea {
            height: auto !important;
        }

        .form .accordion .card .collapse.show {
            padding: 0 30px !important;
        }

        .form h3 {
            display: inline;
            padding-top: 0px;
        }

        .form hr {
            margin-bottom: 14px;
            margin-top: 14px;
        }

        .remove-item {
            position: revert;
            right: 30px;
            top: 24px;
            float: right;
        }

        .remove-item-1 {
            position: revert;
            right: 30px;
            top: 24px;
            float: right;
        }

        .remove-item-2 {
            position: revert;
            right: 30px;
            top: 24px;
            float: right;
        }

        .form .accordion .card-header {
            padding: 20px 30px !important
        }
        @media(max-width: 768px) {

            input,
            select,
            textarea {
                margin-bottom: 10px !important;
            }

            #generalInfo,
            .item-card {
                padding-bottom: 10px !important;
            }

            .header {
                height: 160px;
            }
        }
    </style>
    @yield('css')
</head>

<body>

    <div>
        @yield('content')
    </div>

    <script src="{{asset('assets')}}/js/jquery-3.4.1.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('assets')}}/js/dropify.min.js"></script>
    <script>
        $word_80 = "{{ $setting['cost_first_80_word_acknowlede'] ?? ''}}";
        $per_word = "{{ $setting['cost_per_word_acknowlede'] ?? ''}}";
        $1Inch_cost = "{{$setting['photo_cost_1inch_1st'] ?? ''}}";
    </script>
    <script src="{{asset('assets')}}/js/form2.js"> </script>
    <script src="{{asset('assets')}}/js/jquery.datetimepicker.js"></script>
    <script>
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @elseif(session('error'))
        toastr.error("{{ session('error') }}");
        @endif
    </script>
    <script type="text/javascript">

        function mapDataToFields(data) {
            $.map(data, function(value, index) {
                var input = $('[name="' + index + '"]');
                if ($(input).length && $(input).attr('type') !== 'file') {
                    if (($(input).attr('type') == 'radio' || $(input).attr('type') == 'checkbox')) {
                        $(input).each(function() {
                            if ($(this).val() == value)
                                $(this).prop('checked', true).change();
                        })
                    } else
                    $(input).val(value).change();
                }
            });
        }
        
        $(document).ready(function() {
            var data = <?php echo json_encode(session()->getOldInput()) ?>;
            mapDataToFields(data);
        });

        $(document).on("keyup", ".numbers", function () { 
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });

        $(document).on('keypress', '.whole-number', function() {
            return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57;
        });

        function validate() {
            var valid = true;
            $("form").find('.alert-warning').remove();
            $(".valid-control:visible").each(function () {
                if ($(this).val() == "") {
                    $(this).closest("div").find(".alert-danger").remove();
                    $(this)
                    .closest("div")
                    .append('<div class="alert-danger mb-2">This field is required</div>');
                    valid = false;
                } 
                else {
                    $(this).closest("div").find(".alert-danger").remove();
                }
            });
            if (!valid) {
                $("html, body").animate(
                    {
                        scrollTop: $(".alert-danger:first").offset().top-80,
                    },
                    100
                );
            }
        return valid;
    }
    </script>
    @yield('js')
</body>

</html>