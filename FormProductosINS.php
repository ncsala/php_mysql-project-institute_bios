<!--FORMULARIO PARA EL INGRESO DE PRODUCTOS-->
<!DOCTYPE html>

<html lang="es">

<head>

    <title>AROMATEP - Insertar Productos</title>

    <meta charset="UTF-8">
    <meta name="author" content="Nicolas Martin Caceres Sala"> 
    <meta name="description" content="Formulario para ingreso de productos"> 

    <!--<script src="FuncionesProductos.js"></script>-->

    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->

</head>
    
 
<body>

    <!--seccion menu -->
    <?php include "menu.inc"; ?>

    <!--seccion contenido -->
    <div id="contenido">

        <fieldset id="fldFormulario">
            <legend>Insertar Producto</legend>

            <!-- formulario para ingreso de productos-->
            <form id="frmINS" action="ProcesoProductosINS.php" method="POST">
                     
                    <ul>
                        <!--ingreso descrpicion del producto-->    
                        <li>
                            
                            <label>Descripci&oacute;n:</label>    
                            
                            <input  id="dataDES" 
                                    type="text"                           
                                    name="DES" 
                                    maxlength="100"
                                    title="M&aacute;ximo 100 caracteres" 
                                    autofocus
                                    required
                            >
                            
                        </li>

                        <!--como-box con origen del producto-->
                        <li>
                            
                            <label>Origen:</label> 
                            
                            <select name="ORG" 
                                    title="Seleccionar Origen"
                                    required>
                                <option value="">--- Seleccionar Origen ---</option>
                                <option value="Marruecos">Marruecos</option>
                                <option value="India">India</option>
                                <option value="Jordania">Jordania</option>
                                <option value="China">China</option>
                            </select>

                        </li>

                        <!--ingreso precio del producto-->
                        <li>
                            
                            <label>Precio:</label>
                            
                            <input  id="dataPRE" 
                                    type="number" 
                                    name="PRE" 
                                    title="M&aacute;ximo 10 d&iacute;gitos"
                                    required
                                    min="0"
                                    max="4294967295"
                            >
                            
                            <span class="SugerenciaNum">Debe ingresar solo n&uacute;meros</span>
                            
                        </li>

                        <!--como-box con categoria del producto-->
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
                            
                            <button type="submit" >Enviar</button>
                            <button type="reset">Cancelar</button>
                            
                        </li>
                    </ul>  
                    
            </form>

        </fieldset>  <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>