<?php
include "../php/register.php";


?>
<title>Formulario de Registro de Usuario</title>
<section class="section">
  <div class="container">
    <h1 class="title">Registro de Usuario</h1>
  <form id="registro" action="registro.php"  method="POST">
      <div class="field">
        <label class="label" for="usuario_nombre">Nombre:</label>
        <div class="control">
          <input class="input" type="text" id="usuario_nombre" name="usuario_nombre" required>
        </div>
      </div>

      <div class="field">
        <label class="label" for="usuario_apellido">Apellido:</label>
        <div class="control">
          <input class="input" type="text" id="usuario_apellido" name="usuario_apellido" required>
        </div>
      </div>

      <div class="field">
        <label class="label" for="usuario_usuario">Nombre de Usuario:</label>
        <div class="control">
          <input class="input" type="text" id="usuario_usuario" name="usuario_usuario" required>
        </div>
      </div>

      <div class="field">
        <label class="label" for="usuario_clave">Clave:</label>
        <div class="control">
          <input class="input" type="password" id="usuario_clave" name="usuario_clave" required>
        </div>
      </div>

      <div class="field">
        <label class="label" for="usuario_email">Correo Electrónico:</label>
        <div class="control">
          <input class="input" type="email" id="usuario_email" name="usuario_email" required>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-primary" type="submit">Registro</button>
        </div>
      </div>
    </form>
  </div>
</section>


<!----<script>
  document.getElementById("registro").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var nombre = document.getElementById("usuario_nombre").value;
    var apellido = document.getElementById("usuario_apellido").value;
    var usuario = document.getElementById("usuario_usuario").value;
    var clave = document.getElementById("usuario_clave").value;
    var email = document.getElementById("usuario_email").value;
    });
  
</script>




