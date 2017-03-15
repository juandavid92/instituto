<!DOCTYPE html>
<html>
<?php include("head.html"); ?>
<body>
<div class="content-loggin">
  <header>
  <h1>
    Bienvenido Instituto ABC
  </h1>
  </header>
  <form class="form-horizontal" action="APP/controler.php" method="POST">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group registro-show">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Email">
    </div>
  </div>
  <div class="form-group registro-show">
    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="contrasena" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" required>
      <input type="checkbox" class="registro-hide" id="view_pass" onchange="document.getElementById('contrasena').type = this.checked ? 'text' : 'password'"> <span class="registro-hide">Mostrar Contraseña</span>
    </div>
  </div>
  <div class="form-group registro-show">
    <label for="confirm-contra" class="col-sm-2 control-label">Confirmar</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="confirm-contra" id="confirm-contra" placeholder="RepetirContraseña">
    </div>
  </div>    
   
  <div class="form-group">
    <div class="">
      <button type="submit" class="btn btn-default registro-hide">Ingresar</button>
      <button id="show_reg" class="btn btn-default registro-hide">Registrate</button>
      <button id="show_log" class="btn btn-default registro-show">Volver</button>
      <button class="btn btn-default registro-show">Registrarme</button>
    </div>
  </div>
</form>
</div>
  

</body>
</html>