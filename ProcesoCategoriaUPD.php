<?php
    // PROCESO PARA MODIFICAR CATEGORIAS (en base de datos)
    
    // conecta al servidor de base de datos
    include "conexion.inc";
       
    //Capturamos los datos enviados del archivo "ProcesoCategoriaConfirmUPD.php" 
    $id             = $_POST["ID"];/*captura el ID del archivo'ProcesoCategoriaConfirmUPD.php'*/
    $categoria      = $_POST["CAT"];/*captura la categoria del archivo'ProcesoCategoriaConfirmUPD.php'*/
    
    
    //Creamos la sentencia SQL para modificar los datos dentro de las tabla 'categorias'.
    $sql  = "UPDATE categorias SET ";
    $sql .= "nomCATE='$categoria'";
    $sql .= "WHERE idCATE=$id";
       
    // ejecuta sentencia SQL
    mysql_query($sql,$conex);
    
    // cierra conexion
    mysql_close($conex);
    
    // vuelve automaticamente al formulario 'FormCategoriaUPD.php' luego de ingresado el producto
    header("Location: FormCategoriaUPD.php");            
?>