<?php require "./inc/session_start.php";?>
<!DOCTYPE html>
<html lang="es">
<head>

<?php include "./inc/head.php"; ?>
<!---?php include "./inc/navbar.php"?---->
</head>
<body>

 <!---condicional para comprobar la vista que se cargara-->
    <?php
        if(!isset($_GET['vista']) || $_GET['vista']==""){
                $_GET['vista']="login";}

            if(is_file("./vistas/" .$_GET['vista'].".php")&& $_GET['vista']!="login" && $_GET['vista']!="404"){
                include "./inc/navbar.php";
          
                include "./vistas/".$_GET['vista'].".php";
    
                include "./inc/menu-burger.php";


            }    
            else{
                if($_GET['vista']=="login"){
                    include "./vistas/login.php";
                }else{
                    include "./php/conexion.php";
                    include "./php/register.php";
                    include "./vistas/registro.php";
                    include "./vistas/pagina404.php";
                    
                }
                
            }
           
      ?>
<!----?php include "./inc/menu-burger.php"; ?> ?php include "./inc/navbar.php"; ?--->
</body>
<?php include "./inc/footer.php"; ?>
</html>