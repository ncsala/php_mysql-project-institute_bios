<?php
    // PROCESO PARA BORRAR PRODUCTOS (en base de datos)
    
    // conecta al servidor de base de datos
    include "conexion.inc";
    
    //Capturamos los datos enviados del archivo 'FormProductosDEL.php'
    $id = $_POST["ID"]; /*captura el ID del archivo 'FormProductosDEL.php'*/

    //Creamos la sentencia SQL para borrar los datos.
    $sql  = "DELETE FROM productos WHERE idPROD=$id";

    // ejecuta sentencia SQL
    mysql_query($sql,$conex);
    
    // cierra conexion
    mysql_close($conex);
    
    // vuelve automaticamente al formulario 'FormProductosDEL.php' luego de ingresado el producto
    header("Location: FormProductosDEL.php");            
?>