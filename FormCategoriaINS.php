<!DOCTYPE html> <!--Declaracion de que vamos a utilizar HTML5-->

<html lang="es">

<head>

    <title>AROMATEP - Alta de Categor&iacute;as</title>

    <meta charset="UTF-8">
    <meta name="author" content="Nicolas Martin Caceres Sala">
    <meta name="description" content="Formulario para ingreso de nuevas categorias"> 

    <script src="FuncionesCategoria.js"></script>

    <?php include "IncluirEstilos.inc"; ?> <!--Incluyo archivo de estilos-->

</head>
    
 
<body>

    <!--FORMULARIO PARA AGREGAR NUEVAS CATEGORIAS-->

    <!-- seccion menu -->
    <?php include "menu.inc"; ?>

    <!-- seccion conteido -->
    <div id="contenido">

        <fieldset id="fldFormulario"> 
            <legend>Nueva Categor&iacute;a</legend> 
            
            <!-- formulario para ingreso nuevas categorias-->    
            <form id="frmINS" action="ProcesoCategoriaINS.php" method="POST">
                  
                <ul>
                    <!--ingreso nombre de la categoria-->
                    <li>
                        
                        <label>Nombre para la Categor&iacute;a:</label>
                        
                        <input  id="dataNOM" 
                                type="text"                           
                                name="NOM" 
                                maxlength="50"
                                title="M&aacute;ximo 50 caracteres" 
                                required
                                autofocus>

                    </li>

                    <!-- botones -->
                    <li>
                        
                        <button type="submit" >Enviar</button>
                        <button type="reset">Cancelar</button>
                   
                    </li>
                </ul> 

            </form> 

        </fieldset> <!-- fin de fieldset 'fldFormulario'-->

    </div> <!-- fin de div 'contenido'-->

</body>

</html>