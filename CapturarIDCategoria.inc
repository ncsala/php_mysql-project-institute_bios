<?php
    // PROCESO QUE CAPTURA ID DE CATEGORIA (en base de datos)

    //Conectar al servidor de la base de datos.
    include "conexion.inc";
    
    //Capturar ID de categoria a actualizar.
    $id = $_POST["ID"];
    
    //crea sentencia SQL para buscar ID a actualizar
    $sql  = "SELECT * FROM categorias WHERE idCATE=$id ";
    
     //ejecuta sentencia SQL
    $result = mysql_query($sql,$conex);
    
    // controla existencia de ID a modificar
    if (mysql_num_rows($result)==0) 
        {
        header("Location: errorPage.php?MSG=ID de Categoria INEXISTENTE");
        } // endif
    
    //Cargar registro de categoria a modificar.
    $regCATE = mysql_fetch_array($result);
    
    //Cerrar conexion
    mysql_close($conex);
?>