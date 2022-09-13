<?php
//Estas variables las utilizamos para establecer conexión con la base de datos
/**** ENTORNO LOCAL *****/
$user = "root";
$pass = "";
$host = "localhost";

//La variable $conexion contiene los elementos necesarios para usar la conexión
$conexion = mysqli_connect($host, $user, $pass);
//Esta variable es la que guarda el nombre de la base de datos que vamos a utilizar
$datab = 'gestion_financiera';
//Acá se guarda lo necesario para establecer la conexión a la 
// base de datos y selecciona la base de datos utilizar
$db = mysqli_select_db($conexion, $datab);

