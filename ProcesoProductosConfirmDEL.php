<?php include "CapturarID.inc"; ?>

<!DOCTYPE html>

<html lang="es">

    <head>
      
        <title>AROMATEP - Borrar Productos</title>
        
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
        <legend>Borrar Producto</legend> 

            <form id="frmConfirmDEL" action="ProcesoProductosDEL.php" method="POST">
                    
                <ul>
                    <!--ID del producto-->    
                    <li>
                        
                        <label>ID:</label> 
                        <input id="dataID" 
                             type="text" 
                             name="ID"
                             maxlength="5"
                             title="dehabilitado"
                             readonly
                            class="deshabilitado"
                        <?php echo "value='$regPROD[idPROD]' "; ?>
                      >
                        
                    </li>
                        
                    <!--Descripcion del producto-->
                    <li>
                     
                        <label>Descripci&oacute;n:</label>
                        
                        <input id="dataDES" 
                        type="text"                           
                        name="DES" 
                        maxlength="100"
                        title="deshabilitado"
                        disabled
                        <?php echo "value='$regPROD[descPROD]' "; ?> 
                        >
                        
                    </li>

                    <!--Origen del producto-->
                    <li>
                        
                        <label>Origen:</label>
                        
                        <select id="dataORG" 
                                name="ORG" 
                                disabled 
                                title="deshabilitado"
                                class="deshabilitado"
                        >

                            <?php
                            // conecta al servidor de base de datos
                            include "conexion.inc";

                            //Creamos la sentencia SQL 
                            $sql  = "SELECT * FROM productos WHERE idPROD=$id ";

                            // ejecuta sentencia SQL
                            $result = mysql_query($sql,$conex);

                            // Controlar existencia de productos 
                            if (mysql_num_rows($result)==0) {
                                header("Location: errorPage.php?MSG=NO existe producto con ese ID");
                            } // endif

                            while ($regCATE=mysql_fetch_array($result)) 
                            {
                             echo "<option value='$regCATE[origenPROD]' selected>$regCATE[origenPROD]</option>\n";  
                            } // end while   

                            // Cierra conexion
                            mysql_close($conex);
                            ?>

                        </select>          

                    </li>


                    <!--Precio del producto-->
                    <li>
                        
                        <label>Precio:</label> 
                        
                        <input id="dataPRE" 
                        type="text" 
                        name="PRE" 
                        maxlength="10"
                        title="deshabilitado"
                        class="deshabilitado"
                        disabled
                        <?php echo "value='$regPROD[precioPROD]' "; ?>
                        >
                        
                    </li>
                
                    <!--Categoria del producto-->
                    <li>
                    
                        <label>Categor&iacute;a:</label>
                        
                        <select id="dataCAT" 
                                name="CAT"
                                disabled
                                title="deshabilitado"
                                class="deshabilitado"   
                        >
                                <option value="0">-- Seleccionar Cat. --</option>
                                <?php include "CargarCategoriasDB.inc"; ?>

                        </select>

                    </li>

                    <!-- botones -->
                    <li> 

                        <button type="submit">Confirmar</button>
                        <button type="reset"   onclick="SetPage('FormProductosDEL.php');">Cancelar</button>
                        
                    </li>

                 </ul> 

            </form>
        
        </fieldset>  <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>