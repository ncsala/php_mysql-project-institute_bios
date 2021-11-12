<?php
    // PROCESO PARA CARGAR LAS CATEGORIAS DE LA BASE DE DATOS

    //Incluyo archivo que conecta al servidor SQL.
    include "conexion.inc";

    //Creo sentencia SQL para leer todas las entradas de la tabla "categorias" y ordeno por el atributo "nomCATE".
    $sql = "SELECT * FROM categorias ORDER BY nomCATE";

    // Ejecuto sentencia SQL
    $result = mysql_query($sql,$conex);

    //Controla existencia de categorias, en caso de no haber da error.
    if (mysql_num_rows($result)==0) {
        header("Location: errorPage.php?MSG=NO existen aún categoria");
    } // endif

    //Recorre la tabla con los resultados de la consulta para crear un combo-box,
    while ($regCATE=mysql_fetch_array($result)) 
    {
        //Si el ID de la tabla "categorias" es igual al valor del atributo "catePROD" de la tabla 
        //"productos" entonces deja como seleccionada esa opcion en el como-box.
        if ($regCATE["idCATE"]==$regPROD["catePROD"]) 
        {
            echo "<option value='$regCATE[idCATE]' selected>$regCATE[nomCATE]</option>\n";    
        } else {
            echo "<option value='$regCATE[idCATE]'>$regCATE[nomCATE]</option>\n";
        } // endif
    } // end while               


    // Cierra conexion.
    mysql_close($conex);
?>  