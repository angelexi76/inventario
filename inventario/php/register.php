<?php
include "../php/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener conexión a la base de datos
    $registro = conexion();
    if(!$registro){
        echo "no funciona";
    } else { 
        echo "funciona";
    }
        if (isset($_POST["registro"])){ 
            // Recibir los datos del formulario
            if(
                strlen($_POST["usuario_nombre"]) >= 1 &&
                strlen( $_POST["usuario_apellido"]) >= 1 &&
                strlen($_POST["usuario_usuario"]) >= 1 &&
                strlen( $_POST["usuario_clave"]) >= 1 &&
                strlen($_POST["usuario_email"]) >= 1 
            ){
                // Recibir los datos del formulario
                $nombre = trim($_POST["usuario_nombre"]);
                $apellido = trim($_POST["usuario_apellido"]);
                $usuario =trim( $_POST["usuario_usuario"]);
                $clave = trim($_POST["usuario_clave"]);
                $email =trim( $_POST["usuario_email"]);
                $stmt = $registro->prepare("INSERT INTO usuario (usuario_nombre, usuario_apellido, usuario_usuario, usuario_clave, usuario_email) VALUES (:nombre, :apellido, :usuario, :clave, :email)"); 

                $resultado = $stmt->execute(array(
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':usuario' => $usuario,
                    ':clave' => $clave,
                    ':email' => $email
                ));

                if($resultado){
                    echo "Datos insertados correctamente en la base de datos.";
                } else {
                    echo "Error al insertar datos en la base de datos.";
                    print_r($registro->errorInfo());
                }
            }
        }
    
}
?>
