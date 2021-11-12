<h2> Proyecto - PHP y MySQL - Instituto BIOS </h2>

----------------------------------------------------------------------------------------------------------------------------

El presente trabajo es un proyecto creado para el curso de 'PHP y MySQL' del Instituto BIOS en el año 2014.
A continuación la letra del proyecto:

OBJETIVOS GENERALES
Aromatep.Web es una empresa importadora y distribuidora de diferentes marcas y orígenes, en accesorios y
artículos para la decoración y aromatización del hogar y oficinas. Entre sus productos se encuentran, inciensos,
velas, telas, cortinas, alfombras, aceites aromatizantes y varios artículos de decoración como estatuillas, cuadros,
almohadones, etc. Debido a que son muy solicitados y consultados telefónicamente, la empresa ha decidido en una
primera etapa, implementar una aplicación Web que permita registrar y consultar sus productos, presentando la
información como catálogo para sus asesores. Para ello, se han diseñado las siguientes tablas:

DETALLES

Tabla Productos:
Esta tabla contiene la información necesaria para administrar los diferentes productos. La cual deberá poseer un
identificador, descripción, origen, precio y categoría. La empresa solo importa desde Marruecos, India, Jordania y
China.
Todos los campos son obligatorios y el identificador será generado en forma automática. El tamaño y tipo de
dato debe ser establecido a su criterio. El campo categoría es una referencia al identificador de la misma, el
cual es establecido en la tabla correspondiente.

Tabla Categorías:
Esta tabla tan solo contiene el identificador de la categoría y su nombre, y al igual que en el caso anterior, todos
los datos son obligatorios siendo el identificador automático, debiendo Ud. también, determinar el tipo y tamaño.

REQUISITOS Y DESCRIPCIÓN
La aplicación deberá respetar la siguiente estructura mínima:

Página de Inicio:

Sobre esta página simplemente se mostrará un texto inicial, a modo de título/logo, que representa a la empresa.
Su principal finalidad es brindar vínculos hacia el resto de las secciones de la aplicación como Menú de Acceso.

Productos:
Se deberá permitir realizar Altas, Bajas y Modificaciones sobre cualquier producto existente, teniendo en cuenta
que la categoría debe ser presentada en una lista desplegable (combo box) permitiendo seleccionarla por parte
del usuario evitando así su ingreso. El contenido de esta lista, es obtenido de la tabla categorías. El origen
también debe ser una lista desplegable, pero en este caso no es cargado desde la Base de Datos, es decir, es
una lista fija. Se requiere además el control de cualquier tipo de error que se produzca en el uso del sistema,
como el intento de modificar o eliminar un producto inexistentes.

Categorías:
Sobre esta tabla solo podrá realizarse nuevos ingresos y modificaciones, pero no se podrá realizar bajas y la
actualización sólo se realiza sobre el nombre de la categoría, permitiendo corregir cualquier problema de tipeo.

Consultas:
Deberá implementarse una serie de listados:
 Listado de todos las categorías existentes ordenadas alfabéticamente.
 Listado de todos los productos, con su correspondiente categoría.
 Listado de todos los productos de una categoría seleccionada.
 Listado de todos los productos de un origen en particular.
 Listado de todos los productos de un origen y categoría en particular.
NOTA: todos los listados deben permitir ser ordenados por cualquier columna, al hacer clic en la misma.

DATOS ACADÉMICOS
El proyecto es individual. Y deberá enviar un correo a fnunez.bios@gmail.com con los siguientes datos:
ASUNTO: Inscripción Proyecto PHP – Abril-Agosto 2014

Corario:
El archivo compactado deberá incluir la estructura del sitio Web que haya diseñado, conjuntamente con todos los
script .php, páginas .html, archivos de hojas de estilos, javascript y archivos de inclusión necesarios, al igual que
cualquier imagen que se haya utilizado.
Deberá además proveer un archivo .sql con el nombre de la base de datos utilizada, para permitir generar
rápidamente la estructura de las tablas como también un mínimo juego de datos. Se recomienda y sugiere
utilizar HEIDI versión 4 como gestor de Base de Datos y generador del archivo .sql
Se ponderará y apreciará la prolijidad y diseño que puedan aportar al proyecto, en especial aquello que permita una
visualización correcta de la información, y muy especialmente, código de lectura amigable.
IMPORTANTE: cualquier tipo de incumplimiento en las reglas pautadas, implicará descuentos en el puntaje del
proyecto.
