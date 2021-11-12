<!DOCTYPE html>
<html lang="es">

    <head>
      
        <title>AROMATEP - Modificar Categor&iacute;as</title>
        
        <meta charset="UTF-8"> 
        <meta name="author" content="Nicolas Martin Caceres Sala"> 
        <meta name="description" content="Formulario para ingreso de datos"> 
        
        <script src="FuncionesCategoria.js"></script>
        
        <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->
    
    </head>
    
 
<body>

    <!-- seccion menu -->
    <?php include "menu.inc"; ?>

    <!-- seccion contenido -->
    <div id="contenido">

        <fieldset id="fldFormulario">
            <legend>Modificar Categor&iacute;a</legend>

            <form id="frmCatUPD" action="ProcesoCategoriaConfirmUPD.php" method="POST">
         
                <ul>

                    <li>
                        
                        <label>ID:</label>

                        <input  id="dataID" 
                                type="number" 
                                name="ID"
                                title="M&aacute;ximo 4 d&iacute;gitos" 
                                required
                                min="0"
                                max="9999"
                                autofocus
                        >

                        <span class="SugerenciaNum">Debe ingresar solo n&uacute;meros</span>

                    </li>

                    <!--nombre de la Categoria-->
                    <li>
                        
                        <label>Categor&iacute;a:</label>                 

                        <select title="deshabilitado"
                                disabled>
                            
                            <option value="0">- deshabilitado -</option>
                             
                        </select>
                     
                    </li>

                    <!-- botones -->
                    <li>
                        <button type="submit" >Modificar</button>
                        <button type="reset">Cancelar</button>
                    </li>
                </ul> 

            </form>

        </fieldset>  <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>