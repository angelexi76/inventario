
<?php

function conexion() {
    try {
        $registro = new PDO('mysql:host=localhost;dbname=inventario','root','Solecito5@');
        $registro->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa a la base de datos.";
        return $registro;
    } catch(PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }
}

$registro = conexion();




# Estas son las consultas que se ejecutan después de obtener la conexión
#$pdo->query("INSERT INTO usuario(usuario_nombre,usuario_apellido,usuario_usuario,usuario_email,usuario_clave) VALUES('prueba3','12438','prueba3','prueba@','prueba3')");
#$pdo->query("INSERT INTO categoria(Categoria_nombre,Categoria_ubicacion) VALUES('PRUEBAX','UN LUGARcillooooo')");
 

?>



