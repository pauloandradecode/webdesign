<h1>Creacion de marcadores desde JSON</h1>
<p>Simulamos recibir un archivo en formato JSON (demo.json) con los datos necesarios para poder imprimir en pantalla los marcadores</p>
<p>Primero solicitamos los datos mediante $.getJSON el cual recibe dos parametros, el primero es la url del archivo con formato.json y el segundo la funcion a ejecutar si se reciben los datos.</p>
<p>Recibimos los datos y los almacenamos en la variable data_elements y ejecutamos un ciclo each mediante $.each(), el cual recibe como parametros los datos recibidos (data_elements), y una funcion anonima que asu ves recibe como paramtros un index y los datos del respectivo index.</p>
<p>Por ultimo imprimimos los marcadores en el mapa desde los datos obtenidos</p>