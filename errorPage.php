<!DOCTYPE html> 

<html lang="es">

<head>

    <title>AROMATEP - P&aacute;gina de Error</title> 

    <meta charset="UTF-8"> 
    <meta name="author" content="Nicolas Martin Caceres Sala"> 


    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->


</head>
    
<body>

<!-- seccoin menu -->
<?php include "menu.inc"; ?>

<!-- seccion contenido -->
    <div id="contenido">

        <fieldset id="fldListado">
            <legend>Error</legend>

            <p style="color: #AE0707;letter-spacing: 5px; font-weigth:bold;">
                ATENCION!!!...
            </p>

            <?php
                // capturar mensaje de error desde la url
                $mensaje = $_GET["MSG"];
                // mostrar mensaje de error
                echo "<p>$mensaje</p>\n";
            ?>
           

        </fieldset>    
        
    </div>

</body>

</html>