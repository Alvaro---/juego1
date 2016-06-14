<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

	 <link href="./vista/logincss.css" rel="stylesheet">
	 <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>


    <div class="container">

 	  <h1 class="form-signin">Cafe del Padre </h1>


      <form class="form-signin">
        <h2 class="form-signin-heading">Ingrese sus datos: </h2>
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" id="inputUsuario" class="form-control" placeholder="Nombre Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Clave</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Clave" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar  </button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>