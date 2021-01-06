<nav class="navbar navbar-expand-lg fixed-top navbar-default">
<a href="<?php echo SERVERURL?>/home"
  ><img id="img-logo" src="./plugins/imgs/Logo.png" alt="8bits logo"
/></a>
<a href="<?php echo SERVERURL?>home" class="navbar-brand nav-let">Home</a>

<ul class="navbar-nav">
  <li class="nav-item dropdown">
    <a
      href="#"
      class="nav-link dropdown-toggle nav-let"
      id="navbarDropdownMenuLink"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false"
      >Videojuegos</a
    >
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="<?php echo SERVERURL;?>/newCat">Xbox</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo SERVERURL;?>/newCat">PS4</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo SERVERURL;?>/newCat">Nintendo</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo SERVERURL;?>/newCat">PC</a>
    </div>
  </li>
</ul>
<ul class="navbar-nav">
  <li class="nav-item dropdown">
    <a
      href="#"
      class="nav-link dropdown-toggle nav-let"
      id="navbarDropdownMenuLink1"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false"
      >Movíl</a
    >
    <div
      class="dropdown-menu"
      aria-labelledby="navbarDropdownMenuLink1"
    >
      <a class="dropdown-item" href="<?php echo SERVERURL;?><?php echo SERVERURL;?>/newCat">IOS</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?php echo SERVERURL;?>/newCat">Android</a>
    </div>
  </li>
</ul>
<a href="#" class="navbar-brand nav-let">ESports</a>
<ul class="nav navbar-nav ml-auto">
<?php 
 if (isset($_SESSION['id'])) {
 
     $idUsr = $_SESSION['id'];
     $usrName = $_SESSION['username'];
     $tipoUsuario = $_SESSION['tipoUsuario'];
?>
  <li>
    <img class="imgp" src="<?php echo SERVERURL;?>controllers/getImg.php?id=<?php echo $idUsr; ?>" alt="">
  </li>
  <li class="nav-item">
    <a
      href="#"
      class="navbar-brand nav-let"
     
      > <?php echo $usrName;?></a
    >
  </li>
  <?php if($tipoUsuario==1){
    ?>
    <li class="nav-item">
      <a href="<?php echo SERVERURL; ?>/adminDash" class="navbar-brand nav-let">Dashboard</a>
    </li>
  <?php } elseif($tipoUsuario==3){
  ?>
  <li class="nav-item">
      <a href="<?php echo SERVERURL; ?>/writeNew" class="navbar-brand nav-let">Redactar</a>
    </li>
  <?php } ?>
  <li class="nav-item">
    <a href="#" id="logOut" class="navbar-brand nav-let">Log Out</a>
  </li>
 <?php } else { ?>
  <li class="nav-item">
    <a
      href="#"
      class="navbar-brand nav-let"
      data-toggle="modal"
      data-target="#exampleModal"
      id="btn-l"
      ><i class="fas fa-user"></i> LogIn</a
    >
  </li>
  <li class="nav-item">
    <a href="<?php echo SERVERURL;?>/register" class="navbar-brand nav-let">Registrarse</a>
  </li>
 <?php } ?>

  <li class="nav-item">
    <a href="#" class="navbar-brand nav-let"
      ><i class="fab fa-youtube"></i
    ></a>
  </li>
  <li class="nav-item">
    <a href="#" class="navbar-brand nav-let"
      ><i class="fab fa-twitter"></i
    ></a>
  </li>
  <li class="nav-item">
    <a href="#" class="navbar-brand nav-let"
      ><i class="fab fa-facebook-square"></i
    ></a>
  </li>
</ul>
</nav>
