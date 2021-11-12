<!DOCTYPE html> <!--Declaracion de que vamos a utilizar HTML5-->

<html lang="es">

<head>

    <title>AROMATEP - Borrar Productos</title> <!--Titulo que aparece en la pestaña del navegador-->

    <meta charset="UTF-8">
    <meta name="author" content="Nicolas Martin Caceres Sala">
    <meta name="description" content="Formulario para ingreso de datos"> 

    <script src="FuncionesProductos.js"></script>

    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->

</head>
    
 
<body>

   <!-- menu -->
    <?php include "menu.inc"; ?>

    <!-- contenido -->
    <div id="contenido">

        <fieldset id="fldFormulario"> 
            <legend>Borrar Producto</legend> 
            
            <form id="frmDEL" action="ProcesoProductosConfirmDEL.php" method="POST">
            
                <!--ID del producto-->
                <ul>

                    <li>
                        
                        <label>ID:</label>
                        
                        <input  id="dataID" 
                                type="number" 
                                name="ID"
                                title="M&aacute;ximo 9 d&iacute;gitos" 
                                min="0"
                                max="999999999"
                                autofocus
                                required>
                        
                        <span class="SugerenciaNum">Debe ingresar solo n&uacute;meros</span>
                        
                    </li>

                    <!--Descripcion del producto-->
                    <li>
                        
                        <label>Descripci&oacute;n:</label>
                        
                        <input id="dataDES" 
                        type="text"                           
                        name="DES" 
                        title="deshabilitado"
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
                        
                        <input id="dataPRE" 
                              type="text" 
                              name="PRE" 
                              title="deshabilitado"
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
                        
                        <button type="submit" >Eliminar</button>
                        <button type="reset">Cancelar</button>
                        
                    </li>
                    
                </ul> 

            </form> 

        </fieldset> <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>