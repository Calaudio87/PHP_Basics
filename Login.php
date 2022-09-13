<?php 

//Aca usan el archivo de conexion que armaron para usar en el login
require "conexion.php"

//Pasan las variables de la pagina anterior por metodo post

$usuario = $_POST['user'];
$pass = $_POST["pass"];
//Tanto 'user' como 'pass' 

///Ahora deben hacer la consulta a la base de datos. La de aca es solo un ejemplo

$consulta = "SELECT * FROM usuarios WHERE nombre ='$usuario' AND pass ='$pass'";
$res = mysqli_query($conexion, $consulta)or die(mysqli_error($conexion));

//Usamos un ciclo While para buscar los datos en la base de datos

while ($data = mysqli_fetch_assoc($res)) {
    $usu = $data['nombre'];
    $pass1 = $data['pass'];
}
//Usamos un IF para comparar si los datos ingresados coinciden en la base de datos 
//y terminamos dando respuesta con el Javascript abajo.
//Abajo se redirige a las paginas correspondientes en cada caso del ciclo IF

    if($usu == $usuario && $pass1 == $pass){
        echo '<script>
            alert("Te has conectado exitosamente");
            window.location.href="mantenedor.php";
           </script>';
    }else{
        echo'<script>
            alert("Error! Revise sus credenciales");
            window.location.href="index.php";
        </script>';
    }