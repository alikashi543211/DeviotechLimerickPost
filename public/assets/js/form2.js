$(document).ready(function () {
  // Basic
  $(".dropify").dropify();

  // Translated
  /*$(".dropify-fr").dropify({
          messages: {
            default: "Glissez-dÃ©posez un fichier ici ou cliquez",
            replace: "Glissez-dÃ©posez un fichier ou cliquez pour remplacer",
            remove: "Supprimer",
            error: "DÃ©solÃ©, le fichier trop volumineux",
          },
        });*/

  // Used events
  var drEvent = $("#input-file-events").dropify();

  drEvent.on("dropify.beforeClear", function (event, element) {
    return confirm(
      'Do you really want to delete "' + element.file.name + '" ?'
    );
  });

  drEvent.on("dropify.afterClear", function (event, element) {
    alert("File deleted");
  });

  drEvent.on("dropify.errors", function (event, element) {
    console.log("Has Errors");
  });

  var drDestroy = $("#input-file-to-destroy").dropify();
  drDestroy = drDestroy.data("dropify");
  $("#toggleDropify").on("click", function (e) {
    e.preventDefault();
    if (drDestroy.isDropified()) {
      drDestroy.destroy();
    } else {
      drDestroy.init();
    }
  });
});
var items = 1;
var items_image = 1;
function copyLink() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
}
function onSuccessSubmit(link) {
  $(".gLink").hide();
  $(".link").show();
  $("#link").val(link);
  $("html, body").animate(
    {
      scrollTop: $(".header").offset().top,
    },
    100
  );
  toastr("Form submitted, Thank you", "success");
  setTimeout(function () {
    window.location = window.location.href;
  }, 2000);
}
function toastr(msg, type) {
  $("#toastr").text(msg);
  $("#toastr").removeClass("success");
  $("#toastr").removeClass("error");
  $("#toastr").addClass(type).fadeIn();

  setTimeout(function () {
    $("#toastr").fadeOut();
  }, 4000);
}
function validateForm() {
  var valid = true;
  $("input").each(function () {
    if (
      $(this).val() == "" &&
      typeof $(this).attr("required") !== "undefined"
    ) {
      $(this).closest("div").find(".alert-danger").remove();
      $(this)
        .closest("div")
        .append('<div class="alert alert-danger">This field is required</div>');
      valid = false;
    }
  });
  $("select").each(function () {
    if (
      $(this).val() == "" &&
      typeof $(this).attr("required") !== "undefined"
    ) {
      $(this).closest("div").find(".alert-danger").remove();
      $(this)
        .closest("div")
        .append('<div class="alert alert-danger">This field is required</div>');
      valid = false;
    }
  });
  if (!valid) {
    $("html, body").animate(
      {
        scrollTop: $(".alert-danger:first").offset().top,
      },
      100
    );
  }
  return valid;
}
$("#formValues-2").submit(function (e) {
  e.preventDefault();

  if (!validateForm()) return false;

  var form = $(this);
  $("#Seek-btn").attr("disabled", "disabled");
  $("#Seek-btn").text("Please wait..");
  $.ajax({
    type: "POST",
    url: $(this).attr("action"),
    data: $(form).serialize(),
    success: function (response) {
      onSuccessSubmit(response.link);
    },
    error: function (response) {
      $("#Seek-btn").removeAttr("disabled");
      $("#Seek-btn").text("Submit");
      $(".gLink").show();
      toastr("Error while submitting form", "error");
    },
  });
});
$(document).ready(function () {
  $(".date").datepicker({
    autoclose: true,
    todayHighlight: true,
    format: "dd/mm/yyyy",
  });

  $.get(
    "https://script.google.com/macros/s/AKfycbxB7RQROo9kDMmWxk0ZWqAQEjArOaSoKckkG_p9gIGTBhRVsql9/exec",
    function (response) {
      var Type = response.type;
      var Payment_method = response.payment_method;
      var taken_by = response.taken_by;

      for (var i = 0; i < Type.length; i++) {
        if (Type[i] != "") {
          $('[name="type"]').append(
            '<option value="' + Type[i] + '">' + Type[i] + "</option>"
          );
        }
      }
      /*for (var i = 0; i < Payment_method.length; i++) {
        if (Payment_method[i] != "") {
          $(".pay_method_2").append(
            '<option value="' +
            Payment_method[i] +
            '">' +
            Payment_method[i] +
            "</option>"
          );
        }
      }*/
      /*for (var i = 0; i < taken_by.length; i++) {
        if (taken_by[i] != "") {
          $(".taker_2").append(
            '<option value="' + taken_by[i] + '">' + taken_by[i] + "</option>"
          );
        }
      }*/
      var needed_img = response.img;
      /*for (var i = 0; i < needed_img.length; i++) {
        if (needed_img[i][0] !== "")
          /*$(".needed_img").append(

            '<option data-cost="' +
              needed_img[i][1] +
              '" value="' +
              needed_img[i][0] +
              '" >' +
              needed_img[i][0] +
              "</option>"
          );
      }*/
    }
  );
  function addZero(val) {
    return val < 10 ? "0" + val : val;
  }
  var d = new Date();
  //$('.po-number').val(addZero(d.getDate()) + '' + addZero(d.getMonth()+1) + '' + d.getFullYear()+''+addZero(d.getHours())+''+addZero(d.getMinutes()));
  $('[name="Date"]').val(
    addZero(d.getDate()) +
    "/" +
    addZero(d.getMonth() + 1) +
    "/" +
    d.getFullYear()
  );
});
var cost = 0;
var picost = 0;
var totalcost = 0;

$(".Ad_img").on("change", function () {
  if ($(this).val() == "Yes") {
    $(this).closest(".row").find(".show-on-yes").removeClass("hidden");
    $(".img-btn").find(".show-on-yes").removeClass("hidden");
  } else if ($(this).val() == "No") {
    $(this).closest(".row").find(".show-on-yes").addClass("hidden");
    $(".img-btn").find(".show-on-yes").addClass("hidden");
  } else {
    $(this).closest(".row").find(".show-on-yes").addClass("hidden");
    $(".img-btn").find(".show-on-yes").addClass("hidden");
  }
});
$(".needed_img").on("change", function () {
  if ($(this).val() !== "") {
    $('[name="img_cost"]').val($(this).find("option:selected").data("cost"));
    picost = $(this).find("option:selected").data("cost");
  }
  $('[name="picCost"]').val(picost);
});
$(document).on("change", function () {
  if (cost !== "" || picost !== "") {
    totalcost = cost + picost;
    $('[name="Total_amount"]').val(totalcost);
  } else $('[name="Total_amount"]').val("0");
});

$('[name="wordCount"]').on("keyup", function () {
  var count = $(this).val();
  if (count !== "") {
    if (count > 80) cost = parseFloat($word_80) + ((count - 80) * $per_word);
    else {
      cost = $word_80;
    }
    $('[name="wordCost"]').val(cost);
    $('[name="wordsCost"]').val(cost);
  }
});
$(".spcl_ins").on("change", function () {
  if ($(this).val() == "Yes") {
    $(this).closest(".row").find(".show-on-permit").removeClass("hidden");
  }
  if ($(this).val() == "No") {
    $(this).closest(".row").find(".show-on-permit").addClass("hidden");
  }
});

$(document).on("change", ".dropify", function () {
  var file = this.files[0];
  var action = $(this).closest(".imgDiv").find(".img");
  var fr = new FileReader();
  fr.fileName = file.name;
  fr.onload = function (e) {
    e.target.result;
    action.find(".file_data").val(e.target.result.replace(/^.*,/, ""));
    action.find(".file_type").val(e.target.result.match(/^.*(?=;)/)[0]);
    action.find(".file_name").val(e.target.fileName);
  };
  fr.readAsDataURL(file);
});