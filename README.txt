README:

12/Junio
Se sube la primera versión del proyecto con los siguientes cambios:

1. Creacion de la pagina index.php con los respectivos estilos.
2. Creación de la pagina de inicio sesion, con sus respectivos estilos.
3. Inicio consumo del API, pero con novedades al momento de realizar las consultas.
4. Se crea la BD, inicilamente llamada usuarios con un user y pass crado previamente.


19/Junio
1. Se tiene el conmuso exitoso del API donde se consumen los datos necesaario a mostrar dentro del index.
2. Sobre el prototipo se creo ua section para mostrar la informacion de la ciudad o pais consultado, por lo que se requirio consumir otro APi, el de la wiki para poder 
mostrar alguna informacion de la consulta, aplicando unos cambios como la longitud, maxima para evitar desbordamiento de la informacion
3. Se realiza la conexion a la BD, se realiza la validacion del usuario creado en la BD para que valide el correcto ingreso.
4. Se realiza la importacion del DNS para las graficas de Chart.js.
5. Se crear dashboard, solo en divisiones y ajuste para consumir de nuevo el API, con otros datos de la API, se importa la grafica Pir Chart y sobre la grafica, se
consigue mostrar los datos que se consumen desde al API para que sean visualizados en la grafica.
 


EN PROCESO:
1. Terminar la page para crear la creación del usuario y posteriomente sea guarde en la BD.
2. Importar las demas graficas pendientes, para validar la información a adicionar en cada una.
3. Ajustar colores de cada div del page dashboard.
4. Implementar el PWA.
5. Implementar las medias queries
6. Desarrollo para optimizar el menu lateral de las opciones, donde se visualicen dependiendo del rol para pruebas seran (User y Admin).


NOTA:
Como informacion adicional, se parte el desarrollo con una resolución 1920 * 1080, por lo que aun no se han aplicado las respectivas medias queries, para que se puedan adaptar a las distintas
resoluciones.
------ Revisar la rama master, donde estan los cambios, la rama main fue creada con temas netamente practicos.