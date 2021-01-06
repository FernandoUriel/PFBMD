function passcheck(){
    $("#pass1,#pass2").on("keyup", function() {
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

      $("#pass3,#pass4").on("keyup", function() {
        if ($("#pass3").val() == $("#pass4").val()) {
          $("#message2")
            .html("Las contraseñas coinciden")
            .css("color", "green");
          $("#btnReg2").prop("disabled", false);
        } else {
          $("#message2")
            .html("Las contraseñas no Coinciden")
            .css("color", "red");
          $("#btnReg2").prop("disabled", true);
        }

        if ($("#pass3").val() <= 0) {
          $("#message2")
            .html("La contraseña no puede estar vacia")
            .css("color", "red");
          $("#btnReg2").prop("disabled", true);
        }
      });
    }


