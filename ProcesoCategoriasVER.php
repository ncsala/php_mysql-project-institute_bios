<!DOCTYPE html>

<html lang="es">

    <head>
      
        <title>AROMATEP - Visualizar Categor&iacute;as</title> 
        
        <meta charset="UTF-8"> 
        <meta name="author" content="Nicolas Martin Caceres Sala"> 
             
        <?php include "IncluirEstilos.inc"; ?> 
    
    </head>

<body>

    <!-- seccion menu -->
    <?php include "menu.inc"; ?>


    <!-- seccion contenido -->
    <div id="contenido">

     <fieldset id="fldListado">

      <legend>Listado</legend>

       <!-- crear tabla de datos -->
       <table id="view">
        <?php
          // PROCESO CATEGORIAS VER. Lista las categorias.

          // Conecta al servidor de base de datos.
          include "conexion.inc";

          // Determina orden.
          if (isset($_GET["ORD"])) 
          {
              $orden = $_GET["ORD"];
          } 
          else 
          {
              $orden = "idCATE";
          } // endif

          // Crea sentencia para mostrar datos de tabla 'categorias' ordenados por el valor de la variable '$orden'.      
          $sql = "SELECT * FROM categorias ORDER BY $orden";


          // Ejecuta sentencia SQL
          $result = mysql_query($sql,$conex);

          // Controla existencia de datos, sino existe redirige a pagina de error.
          if (mysql_num_rows($result)==0) {
              header("Location: errorPage.php?MSG=NO existen datos para el criterio especificado");
          } // endif

          // crear columnas del listado
          echo "
                <tr>
                    <th>
                      <a href=\"ProcesoCategoriasVER.php?ORD=idCATE\">ID</a>
                    </th>  
                    <th>
                      <a href=\"ProcesoCategoriasVER.php?ORD=nomCATE\">NOMBRE</a>
                    </th>
                </tr>        
              ";

          //  
          $fila = 1; 

          //Muestra registro.
          while ($reg = mysql_fetch_array($result)) {


              // Determina fila par / impar para darle clase e imprimir con colores.
              $resto = $fila % 2;
              if ($resto==0) {
                  // fila par
                  echo "<tr class='filaPAR'>\n";
              } else {
                  // fila impar
                  echo "<tr class='filaIMP'>\n";
              }
              echo "  <td>$reg[idCATE]</td>\n";   // ID            
              echo "  <td>$reg[nomCATE]</td>\n";  // NOMBRE

              echo "</tr>\n";
              $fila++;    // incrementar número de fila             
          } // end while

          // cierra conexion
          mysql_close($conex);
        ?>
        </table>

     </fieldset>    

    </div>

</body>

</html>