<?php

    // PROCESO PARA AGREGAR CATEGORIAS (insertar en base de datos)
    
    // conecta al servidor
    include "conexion.inc";
    
    //Capturamos los datos enviados del archivo "FormCategoriaINS.php" 
    $nombreCAT      = $_POST["NOM"]; /*captura el nombre del formulario de 'FormCategoriaINS.php'*/
       
    //Creamos la sentencia SQL para insertar los datos dentro de las tablas.
    $sql  = "INSERT INTO categorias ";
    $sql .= "(idCATE,nomCATE) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$nombreCAT')";
    
    // ejecuta sentencia SQL
    mysql_query($sql,$conex);
    
    // cierra conexion
    mysql_close($conex);
    
    // vuelve automaticamente al formulario 'FormCategoriaINS.php' luego de ingresado el producto
    header("Location: FormCategoriaINS.php");            

?>

