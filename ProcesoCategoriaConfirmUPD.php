<!--incluimos archivo con proceso para capturar ID de la categoria a modificar-->
<?php include "CapturarIDCategoria.inc"; ?>

<!DOCTYPE html>

<html lang="es">

    <head>
      
        <title>AROMATEP - Modificar Categor&iacute;as</title>
        
        <meta charset="UTF-8">
        <meta name="author" content="Nicolas Martin Caceres Sala"> 
        <meta name="description" content="Formulario para ingreso de datos"> 
        
        <script src="FuncionesProductos.js"></script>
        
        <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->
    
    </head>
    
 
<body>




    <!-- seccion menu -->
    <?php include "menu.inc"; ?>


    <!-- seccion contenido -->
    <div id="contenido">

        <fieldset id="fldFormulario"> <!--fieldset: Rodea con una linea lo que este dentro de este tag-->
            <legend>Modificar Categor&iacute;a</legend> <!--Define tu titulo para fieldset-->

            <form id="frmCatConfirmUPD" action="ProcesoCategoriaUPD.php" method="POST">
                    
                <ul>
                    <!--ID del producto-->    
                    <li>
                        
                        <label>ID:</label>
                        
                        <input  id="dataID" 
                                type="text" 
                                name="ID"
                                maxlength="5"
                                title="dehabilitado"
                                class="deshabilitado"
                                readonly
                        <?php echo "value='$regCATE[idCATE]' "; ?>
                        >
                        
                    </li>


                    <!--Categoria del producto-->
                    <li>
                        
                        <label>Categor&iacute;a:</label>

                        <input id="dataNOM" 
                        type="text"                           
                        name="CAT" 
                        maxlength="50"
                        title="M&aacute;ximo 50 caracteres" 
                        required
                        <?php echo "value='$regCATE[nomCATE]' "; ?> 
                        >
                            
                    </li>

                    <!--botones -->
                    <li>
                        <button type="submit">Actualizar</button>
                        <button type="reset" onclick="SetPage('FormCategoriaUPD.php');">Cancelar</button>
                    </li>

                </ul> 
                
            </form>

        </fieldset> <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>