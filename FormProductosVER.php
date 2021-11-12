<!DOCTYPE html> <!--Declaracion de que vamos a utilizar HTML5-->

<html lang="es">

<head>

    <title>AROMATEP - Visualizar</title> <!--Titulo que aparece en la pestaÃ±a del navegador-->

    <meta charset="UTF-8"> <!--Codificacion de la pagina Web, fija el conjuto de caracteres de la pagina -->
    <meta name="author" content="Nicolas Martin Caceres Sala"> <!--"author" autor de la pagina-->

    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->

<!-- <script type="text/javascript" src="FuncionesPersonas.js"></script> -->
</head>

<body>
    
    <!-- SECCION MENU -->
    <?php include "Menu.inc"; ?>


    <!-- SECCION CONTENIDO -->

    <div id="contenido">
       
        <fieldset id="fldFormulario">
        <legend>Filtro</legend>

            <form id="frmVER" action="ProcesoProductosVER.php" method="GET">

                <!--Tabla-->
                <ul id="tblFRM"><!--Tabla-->
                    
                    <!--Origen del producto-->
            
                        
                        <li>
                            <label>Origen:</label>
                            <select id="dataORG" 
                                    name="ORIGEN" 
                                    title="Seleccionar País">
                                <option value="0">-- Seleccionar Origen --</option>
                                <option value="Marruecos">Marruecos</option>
                                <option value="India">India</option>
                                <option value="Jordania">Jordania</option>
                                <option value="China">China</option>
                            </select>
                        </li>

   
                 
                    <!--Categoria del producto-->
              
                        <li>
                            <label>Categor&iacute;a:</label>
                        <select id="dataCAT"
                                name="CAT" 
                                title="Seleccionar Cat."
                        >
                        <option value="0">-- Seleccionar Cat. --</option>
                        <?php include "CargarCategoriasDB.inc"; ?>
                        </select>
                        </li>
       
                    
               
                    <!-- fila de botones -->
                    <li><!--Fila-->
                        <button type="submit" >Listar</button>
                        <button type="reset">Cancelar</button>
                        
                    </li> 
                  
                </ul>

            </form>

        </fieldset>    
    
    </div>


</body>

</html>