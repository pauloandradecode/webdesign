<h1>Geolocation</h1>

<p>Preparamos la funcion geolocation para corroborar que nuestro navegador cuente con geolocalizacion, 
mediante un condicional if(navigator.geolocation) y solicitamos la posicion actual, 
si este cuenta se dispara la funcion locationSucces() en caso contrario se dispara la funcion locationErro(), 
ademas utilizamos enableHighAccuracy:true para obtener una geolocalizacion mas extacta.</p>

<p>En la funcion locationSuccess() mostramos un mapa centrado en la geolocalion obtenida y en la funcion
locationError mostramos un mapa generico con el fin de mostrar un mapa tengamos o no geolocalizacion</p>

<p>Nota.- Si haces pruebas en local Google Chrome no soporta la geolocalizacion por seguridad, para ello
podemos utilizar Mozilla Firefox.</p>