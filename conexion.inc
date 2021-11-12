<?php
    //Conecta al servidor de base de datos.
    $conex = mysql_connect("localhost","root","");
    
    //Controla la conexion.
    if (!$conex) {
        header("Location: errorPage.php?MSG=NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    
    //Selecciona la base de datos a utilizar.
    $selDB = mysql_select_db("dbaromatep",$conex);
   
    //Controla la seleccion de la base de datos.
    if (!$selDB) {
        header("Location: errorPage.php?MSG=NO se pudo SELECCIONAR Base de Datos");
    } // endif
?>