<?php include "./inc/navbar.php";?>
<?php include "./php/conexion.php";?>
<title>Formulario de Inicio de Usuario</title>
<section class="section is-medium">
  <h1 class= "title">Inicia sesion</h1>
  </section>
  
<div class="main-container">

    <form class="box login" action="" method="POST">
<div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control">
    <button class="button is-success">
      Ingresar
    </button>
  </p>
</div>
</div>
</form> 
