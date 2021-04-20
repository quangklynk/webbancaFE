$(document).ready(function () {
  for (let index = 2021; index > 1900; index--) {
    $("#year").append(new Option(index, index));
  }
  for (let index = 1; index < 13; index++) {
    $("#month").append(new Option("Tháng " + index, index));
  }
  for (let index = 1; index < 32; index++) {
    $("#day").append(new Option(index, index));
  }

  $("#fileupload").change(function (event) {
    var x = URL.createObjectURL(event.target.files[0]);
    $("#upload-img").attr("src", x);
  });

  $("#btn-submit").click(function (e) {
    const regex_phone = /(0[3|5|7|8|9])+([0-9]{8})\b/g;

    let name_check = $("#name").val();
    let phone_check = $("#phone").val();

    let flag = true;

    if (name_check === "") {
      $("#name").addClass("error-input");
      $("#name").attr("placeholder", "Bổ sung tên đầy đủ");
      setTimeout(function () {
        $("#name").removeClass("error-input");
        $("#name").attr("placeholder", "Nhập tên ở đây");
      }, 2500);
      flag = false;
    }

    if (!phone_check.match(regex_phone) || phone_check === "") {
      $("#phone").addClass("error-input");
      $("#phone").attr("placeholder", "Bổ sung số điện thoại");
      setTimeout(function () {
        $("#phone").removeClass("error-input");
        $("#phone").attr("placeholder", "Nhập số điện thoại");
      }, 2500);
      flag = false;
    }

    if (flag_date == false) {
      $("#error-date").css("display", "block");
      setTimeout(() => {
        $("#error-date").css("display", "none");
      }, 2500);
      flag_date = false;
    }

    if (flag === true && flag_date == true) {
      $("#myform").submit();
    }
  });

  let flag_date = true;

  $("select#day").change(function (e) {
    flag_date = true;

    var day = $.trim($(this).children("option:selected").val());
    var month = $.trim($("select#month").children("option:selected").val());
    var year = $.trim($("select#year").children("option:selected").val());
    if (month == 2) {
      if (year % 4 == 0) {
        if (day > 29) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      } else {
        if (day > 28) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      }
    }
    if ((month == 4 || month == 6 || month == 9 || month == 11) && day > 30) {
      $("#error-date").css("display", "block");
      setTimeout(() => {
        $("#error-date").css("display", "none");
      }, 2500);
      flag_date = false;
    }
  });
  $("select#month").change(function (e) {
    flag_date = true;

    var month = $.trim($(this).children("option:selected").val());
    var day = $.trim($("select#day").children("option:selected").val());
    var year = $.trim($("select#year").children("option:selected").val());
    if (month == 2) {
      if (year % 4 == 0) {
        if (day > 29) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      } else {
        if (day > 28) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      }
    }
    if ((month == 4 || month == 6 || month == 9 || month == 11) && day > 30) {
      $("#error-date").css("display", "block");
      setTimeout(() => {
        $("#error-date").css("display", "none");
      }, 2500);
      flag_date = false;
    }
  });
  $("select#year").change(function (e) {
    flag_date = true;

    var year = $.trim($(this).children("option:selected").val());
    var month = $.trim($("select#month").children("option:selected").val());
    var day = $.trim($("select#day").children("option:selected").val());
    if (month == 2) {
      if (year % 4 == 0) {
        if (day > 29) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      } else {
        if (day > 28) {
          $("#error-date").css("display", "block");
          setTimeout(() => {
            $("#error-date").css("display", "none");
          }, 2500);
          flag_date = false;
        }
      }
    }
    if ((month == 4 || month == 6 || month == 9 || month == 11) && day > 30) {
      $("#error-date").css("display", "block");
      setTimeout(() => {
        $("#error-date").css("display", "none");
      }, 2500);
      flag_date = false;
    }
  });
});
