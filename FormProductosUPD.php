<!DOCTYPE html>

<html lang="es">

<head>

    <title>AROMATEP - Modificar Productos</title>

    <meta charset="UTF-8">
    <meta name="author" content="Nicolas Martin Caceres Sala"> 
    <meta name="description" content="Formulario para actualizacion de productos"> 

    <script src="FuncionesProductos.js"></script>

    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->

</head>
    
 
<body>

    <!-- seccion menu -->
    <?php include "menu.inc"; ?>

    <!-- seccion contenido -->
    <div id="contenido">

        <fieldset id="fldFormulario">
            <legend>Modificar Producto</legend> 

            <!-- formulario para ingreso de ID de productos-->
            <form id="frmUPD" action="ProcesoProductosConfirmUPD.php" method="POST">
          
                <ul>
                    <!--ingreso ID del producto-->    
                    <li>

                        <label>ID:</label>

                        <input  id="dataID" 
                                type="number" 
                                name="ID"
                                title="M&aacute;ximo 9 d&iacute;gitos" 
                                min="0"
                                max="999999999"
                                required
                                autofocus>

                        <span class="SugerenciaNum">Debe ingresar solo n&uacute;meros</span>

                    </li>

                    <!--Descripcion del producto-->
                    <li>
                 
                        <label>Descripci&oacute;n:</label>
                        
                        <input  title="deshabilitado"
                                value="deshabilitado"
                                disabled
                        >
                        
                    </li>
                    
                    <!--Origen del producto-->
                    <li>
                        
                        <label>Origen:</label>                          
                   
                        <select title="deshabilitado"
                                disabled>
                            
                            <option value="0">- deshabilitado -</option>
                             
                        </select>

                    </li>
                    
                    <!--Precio del producto-->
                    <li>

                        <label>Precio:</label>    
                       
                        <input  title="deshabilitado"
                                value="deshabilitado"
                                disabled
                        >
                    
                    </li>

                    <!--Categoria del producto-->
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