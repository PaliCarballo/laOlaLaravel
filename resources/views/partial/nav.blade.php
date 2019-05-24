<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Ola | Hamburguesas Veggie</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/logyregistro.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carrito.css">
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark ">


        <a href="/"><img src="img/logo.png" class="logo" alt="La Ola - Hamburguesas Veganas"></a>
        &nbsp;<h1>LA OLA</h1>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/preguntas"><i class="far fa-question-circle"></i><br>F.A.Q.</a>
      </li>

      <?php if (empty($_SESSION['email'])) 
      { ?>

      <li class="nav-item active">
        <a class="nav-link" href="/registro"><i class="fas fa-seedling" ></i><br>Registrate</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login"><i class="fas fa-user-circle" ></i><br>Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login"><ion-icon name="cart"></ion-icon></a>
      </li>

      <?php 
      } else 
      { ?>

      <li class="nav-item active">
        <a class="nav-link" href="carrito.php"><ion-icon name="cart"></ion-icon></a>
      </li>
      <li>
        <a class="nav-link" href="micuenta.php"><i class="fas fa-user-circle"></i><br><p><?php echo $_SESSION['email'];?></p><br>Mi Perfil</a> 
      </li>
      <li><a class="nav-link" href="cerrarSession.php"><i class="fas fa-times-circle"></i></a></li>

    <?php } ?>

    </ul>
  </div>
</nav>
</div>