<!DOCTYPE html> 

<html lang="es">

<head>

    <title>AROMATEP - Visualizar Productos</title> 

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
              // PROCESO PRODUCTOS VER 

              //Conecta al servidor.
              include "conexion.inc";

              //Caputra datos de formulario para mostrar.
              $origen =   $_GET["ORIGEN"];
              $cate =     $_GET["CAT"];

              //Determina filtro para el origen.
              if ($origen=="0") 
              {
                  $filtroORG = "";
              } 
              else
              {
                  $filtroORG = "WHERE p.origenPROD='$origen'";
              } // endif

              //Determina filtro de para las categorias.
              if ($cate=="0") 
              {
                  $filtroCATE = "";
              } 
              else 
              {
                  $filtroCATE = "AND c.idCATE='$cate'";
              } // endif


              // Determina orden.
              if (isset($_GET["ORD"])) 
              {
                  $orden = $_GET["ORD"];
              } else {
                  $orden = "p.idPROD";
              } // endif



              // Crea sentencia SQL para mostrar datos. con los filtros de las variables
              //'$filtroORG' y '$filtroCATE" y los ordena de acuerdo a la variable '$orden'
              $sql  = "SELECT p.idPROD,p.descPROD,p.origenPROD,p.precioPROD,c.nomCATE ";
              $sql .= "  FROM productos AS p ";
              $sql .= "  JOIN categorias AS c "; 
              $sql .= " ON p.catePROD = c.idCATE ";
              $sql .= "$filtroORG $filtroCATE";
              $sql .= "ORDER BY $orden";

              //Ejecuta sentecia SQL
              $result = mysql_query($sql,$conex);


              // Controla existencia de datos.
              if (mysql_num_rows($result)==0) 
              {
                  header("Location: errorPage.php?MSG=NO existen datos para el criterio especificado");
              } // endif

              // Crea columnas del listado.
              echo "
                      <tr>
                          <th>
                              <a href=\"ProcesoProductosVER.php?ORD=p.idPROD&ORIGEN=$origen&CAT=$cate\">ID</a>
                          </th>      
                          <th>
                              <a href=\"ProcesoProductosVER.php?ORD=p.descPROD&ORIGEN=$origen&CAT=$cate\">DESCRIPCION</a>
                          </th>      
                          <th>
                              <a href=\"ProcesoProductosVER.php?ORD=p.origenPROD&ORIGEN=$origen&CAT=$cate\">ORIGEN</a>
                          </th>      
                          <th>
                              <a href=\"ProcesoProductosVER.php?ORD=p.precioPROD&ORIGEN=$origen&CAT=$cate\">PRECIO</a>
                          </th>      
                          <th>
                              <a href=\"ProcesoProductosVER.php?ORD=c.nomCATE&ORIGEN=$origen&CAT=$cate\">CATEGORIA</a>
                          </th>              
                      </tr>        
                    ";

              // Recorre la matriz del resultado.
              $fila = 1; 
              while ($reg = mysql_fetch_array($result)) 
              {
                  // mostrar registro
                  // determinar fila par / impar
                  $resto = $fila % 2;
                  if ($resto==0) 
                  {
                      // fila par
                      echo "<tr class='filaPAR'>\n";
                  } 
                  else 
                  {
                      // fila impar
                      echo "<tr class='filaIMP'>\n";
                  }

                  echo "  <td>$reg[idPROD]</td>\n";   // ID            
                  echo "  <td>$reg[descPROD]</td>\n";  // DESCRIPCION
                  echo "  <td>$reg[origenPROD]</td>\n";  // ORIGEN
                  echo "  <td>$reg[precioPROD]</td>\n";  // PRECIO
                  echo "  <td>$reg[nomCATE]</td>\n";  // NOMBRE                                    
                  echo "</tr>\n";
                  $fila++;    // incrementar número de fila             
              } // end while

              //Cierra conexion
              mysql_close($conex);
              ?>
             
            </table>
         
        </fieldset>  

    </div>

</body>

</html>