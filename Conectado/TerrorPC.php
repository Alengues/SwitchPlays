<?php
    session_start();
    $varsesion = $_SESSION['nombre'];
    if($varsesion == null || $varsesion = '' ) {
      echo 'No tiene autorizacion';
      die();
    }
    
    
    $link = mysqli_connect("localhost", "root", "", "switchplays") or die("<h2>No se encuentra el servidor</h2>");
    $consulta="SELECT * FROM usuario ";
    $resultado=mysqli_query($link, $consulta);
    $filas=mysqli_num_rows($resultado);
    
$mostrar=mysqli_fetch_array($resultado)
?>
<!doctype html>
<html lang="en">
  <head>

    <link rel="shortcut icon" href="../img/Icono.jpg"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" >
    <title>SwitchPlays</title>
  </head>
  <body>

  <!--SideBar-->
  <div class="sidenav">
    <a href="Pc.html">Todos</a>
    <a href="#">Deportes</a>
    <a href="AventurasPC.php">Aventuras</a>
    <a href="#">Carreras</a>
    <a href="#">Pelea</a>
    <a href="#">Terror</a>
    <a href="EstrategiaPC.php">Estrategia</a>
    <a href="DisparosPC.php">Disparos</a>
  </div>

    <!--HEADER-->
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
        <a class="navbar-brand" href="indexlogin.php"> <img src="../FotosMockup/\logo.png" width="355" height="60"></a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav mr-auto ml-auto">
            <a class="nav-item nav-link"href="indexlogin.php">Home </a>
            <a class="nav-item nav-link"href="PS4iniciar.php">PS4 <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="XboxIniciar.php">Xbox</a>
            <a class="nav-item nav-link active">Pc</a>
          </div>
          <div class="navbar-nav ml-auto">
            <a class="btn btn-outline-light" >  Bienvenido/a <?php echo $_SESSION['nombre'] ?></a>
            <a class="btn btn-outline-light" href="cerrarsesion.php">Cerrar Sesion</a>
          </div>
        </div>
      </div>
    </nav>

    <br><br>
    <br><br>

    <center>
      <div class="titulo">
        <img src="../img/Pc\Pc.png" width="120" height="60">
      </div>
    </center>

    <br><br>

    <?php
    $sql="SELECT * from juegos where (ID_Categorias=5) AND (Consola='PC')";
    $result=mysqli_query($link,$sql);
    while ($mostrar=mysqli_fetch_array($result)){
    ?>
    <div class="index">
      <center><table>
        <tr>
        <td>
          <img src=<?php echo $mostrar['Imagen']?> class="juegos fade-in">
        </td>
        </tr>
        <tr>
          <td>
            <center><h4><FONT COLOR=red> <?php echo $mostrar['Descuento']?>% de descuento </FONT></h4></center>
          </td>
        </tr>
        <tr>
          <td>
            <center><input type="button" onclick="location.href=<?php echo $mostrar['Link']?>" value="Ir a la Pagina"></center>
          </td>
          
        </tr>
        <tr>
      </table></center>
    </div>
    <?php
    }
    ?>
    <br><br>
    <br><br>
    <br><br>

    <!--FOOTER-->
    <footer class="page-footer bg-dark">
      <div class="bg-success">
        <div class="container">
          <div class="row py-4 d-flex align-items-center">
             <div class="col-md-12 text-center">
               <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
               <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
               <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
             </div>
           </div>
         </div>
       </div>
       <div class="footer-copyright text-center py-3">
         <p>&copy; Copyright
           <a href="#">switchplays.com</a></p>
       </div>
       </div>
    </footer>
  </body>
</html>