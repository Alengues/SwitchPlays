<?php


session_start();
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$_SESSION['nombre'] = $nombre;


//conexion con la base de datos y el servidor
    $link = mysqli_connect("localhost", "root", "", "switchplays") or die("<h2>No se encuentra el servidor</h2>");
    $consulta="SELECT * FROM usuario WHERE nombre='$nombre' and contraseña='$contraseña'";
    $resultado=mysqli_query($link, $consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas>0){
        header("location:miperfil.php");
    }
    else{
        echo "error en la autentificacion";
        
    }
$mostrar=mysqli_fetch_array($resultado)
?>

