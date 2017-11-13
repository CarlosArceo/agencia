<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Inicio de Enjoy Travel">
    <meta name="author" content="SoftMid">
    <link rel="icon" href="img/favicon.ico">

    <title>Iniciar Sesión</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
  </head>

  <body>
    <div class="container" id="imgLoogo">
      <img src="img/log.jpg">
    </div>
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        <label for="inputEmail" class="sr-only">Correo Electrónico</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuérdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>
      </form>

    </div> <!-- /container -->

    <?php include"layouth/footer.html" ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
