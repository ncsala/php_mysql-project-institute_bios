<?php
    // PROCESO QUE CAPTURA EL ID DEL PRODUCTO (Confirmar datos a modificar)
    
    // conecta al servidor de base de datos
    include "conexion.inc";
    
    // captura ID a actualizar
    $id = $_POST["ID"];
    
    // crea sentencia SQL para buscar ID a actualizar
    $sql  = "SELECT * FROM productos WHERE idPROD=$id ";
    
    // ejecuta sentencia SQL
    $result = mysql_query($sql,$conex);
    
    // controla existencia del id a modificar.
    if (mysql_num_rows($result)==0) 
        {
        header("Location: errorPage.php?MSG=ID de Producto INEXISTENTE");
        } // endif
    
    // cargar registro de producto a modificar
    $regPROD = mysql_fetch_array($result);
    
    // cierra conexion con base de datos
    mysql_close($conex);
?>