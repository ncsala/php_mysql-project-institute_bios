<?php

    // PROCESO PARA INSERTAR PRODUCTOS (insertar en base de datos)
    
    // conecta al servidor de base de datos
    include "conexion.inc";
    
    //Capturamos los datos enviados del archivo "FormProductosINS.php" 
    $descripcion    = $_POST["DES"]; /*captura la descripcion del formulario de 'FormProductosINS.php'*/
    $origen         = $_POST["ORG"]; /*captura el origen del formulario de 'FormProductosINS.php'*/   
    $precio         = $_POST["PRE"]; /*captura el precio del formulario de 'FormProductosINS.php'*/   
    $categoria      = $_POST["CAT"]; /*captura la categoria del formulario de 'FormProductosINS.php'*/   
    
    //Creamos la sentencia SQL para insertar los datos dentro de las tablas.
    $sql  = "INSERT INTO productos ";
    $sql .= "(idPROD,descPROD,origenPROD,precioPROD,catePROD) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$origen','$precio','$categoria')";
    
    // ejecuta sentencia SQL
    mysql_query($sql,$conex);
    
    // cierra conexion
    mysql_close($conex);
    
    // vuelve automaticamente al formulario 'FormProductosINS.php' luego de ingresado el producto
    header("Location: FormProductosINS.php");            

?>

