<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8 bits</title>
 
    <?php include './plugins/templates/head.php'?>

    <script type="text/javascript">

      $(document).ready(function(){

      
        passcheck();
        passcheckProfile();
        
        $("#login").click(function(){
            username=$("#usrLogin").val();
            password=$("#passLogin").val();
            action ="login";

            $.ajax({
                type:"POST",
                url:"<?php  echo SERVERURL?>/controllers/usersControllers.php",
                data: {
                        action: "login",
                        username:username,
                        password:password
                      },
               
                success:function(res){
                    console.log(res);
                    if(res=="true"){
                        $("#error2").html('<div class="text-succes"> \
                                            <strong style="color:green;">Authenticated</strong> \ \
                                            </div>');
                        window.location.href = "<?php echo SERVERURL; ?>index.php";
                    }
                    else if(res=='false'){
                        $("#error2").html('<div class="alert alert-danger"> \
                              <strong style="color:red;">Authentication</strong> failure. \ \
                            </div>');
                    }
                },
               
                datatype:"text"
            });
            return false;
        });
       $("#logOut").click(function(){
          action="logout";
          $.ajax({
              type:"POST",
              url:"./controllers/usersControllers.php",
              data:"action="+action,
              datatype:'html',
              success:function(res){
                if(res=='true'){
                  window.location.href = "<?php echo SERVERURL; ?>index.php";
                }
              }

          });
          return false;
        });

      });
    </script>
</head>
<body>
    <?php include './plugins/templates/loginModal.php'?>
    
    <div class="wrapper">
    <?php include './plugins/templates/navbar.php'?>
    
    <?php
      require_once "./controllers/viewManager.php";
      $vw = new viewManager();
      $viewR=$vw->get_view_manager();

      if($viewR=="home"):
        require_once "./plugins/templates/home.php";
      
      else:
          require_once $viewR;
      endif;    ?>
      


      

    <?php include './plugins/templates/footer.php'?>
    </div>
</body>
</html>
<!-- comment -->