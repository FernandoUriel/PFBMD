function login(){
      
        $("#login").click(function(){
        var username=$("#usrLogin").val();
        var password=$("#passLogin").val();

        $.ajax({
            type:"POST",
            url:"http://localhost/BDM-PF/controllers/usersControllers.php",
            data: "username="+username+"&password="+password,
            succes:function(html){
                if(html=='true'){
                    $("#error2").html('<div class="alert alert-success"> \
                                        <strong>Authenticated</strong> \ \
                                        </div>');
                    window.location.href = "<?php echo SERVERURL; ?>views/plantilla.php";
                }
                else if(html=='false'){
                    $("#error2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
                }
            },
            beforeSend:function(html){
                $("#error2").html('<div class="text-primary">Cargando...</div>');
            }
        });
        return false;
    });

}
