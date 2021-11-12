
<!--PROCESO PARA CONFIRMAR DATOS A MODIFICAR DE PRODUCTO-->


<!--incluimos archivo con proceso para capturar ID del producto a modificar-->
<?php include "CapturarID.inc"; ?>


<!DOCTYPE html>

<html lang="es">

<head>

    <title>AROMATEP - Modificar Productos</title>

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

        <fieldset id="fldFormulario"> 
            <legend>Modificar Producto</legend> 

            <form id="frmConfirmUPD" action="ProcesoProductosUPD.php" method="POST">
         
                <ul>
                    <!--ingreso ID del producto-->
                    <li>
                        
                        <label>ID:</label>

                        <input  id="dataID" 
                                type="text" 
                                name="ID"
                                maxlength="5"
                                title="dehabilitado"
                                class="deshabilitado"
                                readonly
                                
                        <?php echo "value='$regPROD[idPROD]' "; ?>
                        >
                        
                    </li>
                    
                    <!--Descripcion del producto-->
                    <li>
                    
                        <label>Descripci&oacute;n:</label>
                        
                        <input  id="dataDES" 
                                type="text"                           
                                name="DES" 
                                maxlength="100"
                                title="M&aacute;ximo 100 caracteres" 
                                <?php echo "value='$regPROD[descPROD]' "; ?> 
                                required
                        >
                        
                    </li>

                    <!--Origen del producto-->
                    <li>
                        
                        <label>Origen:</label>
                        
                        <select id="dataORG" 
                                name="ORG" 
                                title="Seleccionar Origen" 
                                required>
                            
                            <option value="">-- Seleccionar Origen --</option>
                            
                        
                            <!-- PHP q carga el origen del producto a modificar-->
                            <?php
                                // conecta al servidor
                                include "conexion.inc";

                                // crea sentencia SQL para buscar en tabla 'productos' con el ID capturado
                                $sql  = "SELECT * FROM productos WHERE idPROD=$id ";

                                // ejecuta sentencia SQL
                                $result = mysql_query($sql,$conex);

                                // Controlar existencia de productos 
                                if (mysql_num_rows($result)==0) 
                                    {
                                    header("Location: errorPage.php?MSG=NO existen aún origen");
                                    } // endif

                                while ($regCATE=mysql_fetch_array($result)) 
                                {
                                    echo "<option value='$regCATE[origenPROD]' selected>$regCATE[origenPROD]</option>\n";
                                    
                                    if ($regCATE[origenPROD]!="Marruecos")
                                    {
                                        echo "<option value='Marruecos'>Marruecos</option>";
                                    } // endif
                                    
                                    if ($regCATE[origenPROD]!="China") 
                                    {
                                        echo "<option value='China'>China</option>";
                                    } // endif
                                    
                                    if ($regCATE[origenPROD]!="Jordania")                                    
                                    { 
                                        echo "<option value='Jordania'>Jordania</option>";
                                    } // endif
                                    
                                    if ($regCATE[origenPROD]!="India")
                                    {
                                        echo "<option value='India'>India</option>";
                                    } // endif
                                    
                                } // end while   
                                
                               
                                // Cierra conexion
                                mysql_close($conex);
                            ?>
                        </select>          
                    </li>
                    
                    <!--Precio del producto-->
                    <li>
                        
                        <label>Precio:</label>

                        <input  id="dataPRE" 
                                type="number" 
                                name="PRE" 
                                title="M&aacute;ximo 10 d&iacute;gitos"
                                required
                                min="0"
                                max="4294967295"
                        <?php echo "value='$regPROD[precioPROD]' "; ?>
                        >
                        
                        <span class="SugerenciaNum">Debe ingresar solo n&uacute;meros</span>
                        
                    </li>
                   
                    <!--Categoria del producto-->
                    <li>
                        <label>Categor&iacute;a:</label>

                        <select id="dataCAT" 
                                name="CAT" 
                                title="Seleccionar Categor&iacute;a"
                                required>
                            
                            <option value="">-- Seleccionar Categor&iacute;a --</option>
                            
                            <!--carga todas las categorias existentes de base de datos-->
                            <?php include "CargarCategoriasDB.inc"; ?>

                        </select>
                    </li>
            
                    <!-- botones -->
                    <li>
                        
                        <button type="submit" >Actualizar</button>
                        <button type="reset" onclick="SetPage('FormProductosUPD.php');">Cancelar</button>
                        
                    </li>
                </ul>

            </form>

        </fieldset>  <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>