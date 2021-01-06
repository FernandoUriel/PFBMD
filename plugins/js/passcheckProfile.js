
function passcheckProfile(){
$("#btnName").click(function () {
    $("#nombinp").prop("disabled", false);
  });

  $("#btnApP").click(function () {
    $("#apePin").prop("disabled", false);
  });

  $("#btnApM").click(function () {
    $("#apeMin").prop("disabled", false);
  });

  $("#btnmail").click(function () {
    $("#mailin").prop("disabled", false);
  });

  $("#btnUsN").click(function () {
    $("#userin").prop("disabled", false);
  });

  $("#btnTel").click(function () {
    $("#telin").prop("disabled", false);
  });

  $("#pass1,#pass2").on("keyup", function () {
    if ($("#pass1").val() == $("#pass2").val()) {
      $("#message")
        .html("Las contraseñas coinciden")
        .css("color", "green");
      $("#btnReg").prop("disabled", false);
    } else {
      $("#message")
        .html("Las contraseñas no Coinciden")
        .css("color", "red");
      $("#btnReg").prop("disabled", true);
    }

    if ($("#pass1").val() <= 0) {
      $("#message")
        .html("La contraseña no puede estar vacia")
        .css("color", "red");
      $("#btnReg").prop("disabled", true);
    }
  });
}

