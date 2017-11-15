<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Nuevo Usuario</title>
	<!-- Estilo para el formulario -->
	<link rel="stylesheet" type="text/css" href="../css/formulario.css">
	<!--Estilo para el pie de pagina-->
	<link rel="stylesheet" type="text/css" href="../css/sticky-footer.css">
	<!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<div class="container">  
 		<form id="contact" action="" method="post">
    		<h3>Alta de nuevo usuario</h3>
    		<fieldset>
      			<input placeholder="Nombre" type="text" tabindex="1" required autofocus>
    		</fieldset>
    		<fieldset>
      			<input placeholder="Apellido Paterno" type="text" tabindex="2" required>
    		</fieldset>
    		<fieldset>
      			<input placeholder="Apellido Materno" type="text" tabindex="3" required>
    		</fieldset>
    		<fieldset>
      			<input placeholder="Usuario" type="text" tabindex="4" required>
    		</fieldset>
    		<fieldset>
    			<input placeholder="Contraseña" type="password" tabindex="5" required>
    		</fieldset>
    		<fieldset>
      			<textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    		</fieldset>
    		<fieldset>
      			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    		</fieldset>
    	<p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  		</form>
	</div>
	<?php include"../layouth/footer.html" ?>
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>