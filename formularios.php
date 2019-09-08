<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body class="bodym">

<div class="cont">
	<h1>Registro de usuario</h1><br><br>
<form>
  <label>Nombre</label><br><br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Apellidos">
    </div>
  </div><br><br>

   <div class="form-group">
    <label>Correo electronico</label><br><br>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"><br><br>

	<label for="exampleFormControlSelect1">Documento de identidad</label><br><br>
    <div class="form-group">
     <div class="cont-tdocument">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Cedula de ciudadania</option>
      <option>Tarjeta de identidad</option>
      <option>Cedula de extranjeria</option>
    </select>
	</div>
	<div class="cont-ndocument">
    <div class="form-group">
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Numero de documento">
	</div>
	</div><br><br><br>
	<div class="form-group">
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Numero de telefono">
	</div>
 	 </div>
	<div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  	</div><br>
  	<div class="row">
    <div class="col">
    	<label>Fecha de nacimiento</label><br><br>
      <input type="date" class="form-control">
    </div>
	</div><br>
	<button type="submit" class="btn btn-outline-dark">Guardar</button>
</div>
</form>
</body>
</html>