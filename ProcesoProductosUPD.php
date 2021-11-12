<?php
    // PROCESO PARA MODIFICAR PRODUCTOS (en base de datos)
    
    // conecta al servidor de base de datos
    include "conexion.inc";
       
    // Capturamos los datos enviados del archivo "ProcesoProductosConfirmUPD.php" 
    $id             = $_POST["ID"]; /*captura el ID del formulario de 'ProcesoProductosConfirmUPD.php'*/   
    $descripcion    = $_POST["DES"];/*captura la descripcion del formulario de 'ProcesoProductosConfirmUPD.php'*/ 
    $origen         = $_POST["ORG"];/*captura el origen del formulario de 'ProcesoProductosConfirmUPD.php'*/ 
    $precio         = $_POST["PRE"];/*captura el precio del formulario de 'ProcesoProductosConfirmUPD.php'*/ 
    $categoria      = $_POST["CAT"];/*captura la categoria del formulario de 'ProcesoProductosConfirmUPD.php'*/   
    
    
    //Creamos la sentencia SQL para modificar los datos dentro de las tabla.
    $sql  = "UPDATE productos SET ";
    $sql .= "descPROD='$descripcion',";
    $sql .= "origenPROD='$origen',";
    $sql .= "precioPROD='$precio',";
    $sql .= "catePROD=$categoria ";
    $sql .= "WHERE idPROD=$id";
    
    // ejecuta sentencia SQL
    mysql_query($sql,$conex);
    
    // cierra conexion
    mysql_close($conex);
    
    // vuelve automaticamente al formulario 'FormProductosUPD.php' luego de ingresado el producto
    header("Location: FormProductosUPD.php");            
?>