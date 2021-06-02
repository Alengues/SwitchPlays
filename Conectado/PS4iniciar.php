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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

    <title>SwitchPlays</title>
  </head>
  <body>
    
    <br></br>
    <br></br>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="indelogin.php"> <img src="../FotosMockup/\logo.png" width="355" height="60"></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto ml-auto">
                    <a class="nav-item nav-link" href="indexlogin.php">Home</span></a>
                    <a class="nav-item nav-link active">PS4</a>
                    <a class="nav-item nav-link" href="Xboxiniciar.php">Xbox</a>
                    <a class="nav-item nav-link" href="Pciniciar.php">Pc</a>
                  </div>
                  <div class="navbar-nav ml-auto">
                    <a class="btn btn-outline-light" href="miperfil.php">  Bienvenido/a <?php echo $_SESSION['nombre'] ?></a>
                    <a class="btn btn-outline-light" href="cerrarsesion.php">Cerrar Sesion</a>
                  </div>
            </div>

        </div>
        
      </nav>
          <!--SideBar-->
  <div class="sidenav">
    <a>Todos</a>
    <a href="DeportesPS4.php">Deportes</a>
    <a href="AventurasPS4.php">Aventuras</a>
    <a href="CarrerasPS4.php">Carreras</a>
    <a href="PeleaPs4.php">Pelea</a>
    <a href="#">Terror</a>
    <a href="#">Estrategia</a>
    <a href="DisparosPS4.php">Disparos</a>
  </div>

    

    <center>
      <div class="titulo">
        <img src="../img/PS4\logo.png" width="355" height="60">
      </div>
    </center>

    <br><br>

    <div class="index">
      <center><table>
        <tr>
        <td>
          <img src="../img/PS4\dragonballz.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/PS4\fifa20.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/PS4\ghost.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/PS4\callofduty.jpg" class="juegos fade-in">
        </td>
        </tr>
        <tr>
          <td>
            <center><h4><FONT COLOR=red> 70% de descuento </FONT></h4></center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 80% de descuento </FONT></h4></center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 65% de descuento </FONT></h4> </center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 80% de descuento </FONT></h4></center>
          </td>
        </tr>
        <tr>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/dragon-ball-fighterz-ps4'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/fifa-20-ps4'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/ghost-of-tsushima-ps4-flash-sale'" value="Ir a la Pagina"> </center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/call-of-duty-modern-warfare-ps4-flash-sale'" value="Ir a la Pagina"></center>
          </td>
        </tr>
        <tr>
          <td>
            <img src="../img/PS4\jedi.jpg" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/PS4\w.png" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/PS4\needforspeed.png" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/PS4\thelastofus2.jpg" class="juegos fade-in" >
          </td>
        </tr>
        <tr>
          <td>
            <center><h4><FONT COLOR=red> 40% de descuento </FONT></h4></center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 50% de descuento </FONT></h4></center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 30% de descuento </FONT></h4> </center>
          </td>
          <td>
            <center><h4><FONT COLOR=red> 40% de descuento </FONT></h4></center>
          </td>
        </tr>
        <tr>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/star-wars-jedi-fallen-order-ps4-flash-sale'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/wwe-2k20-ps4'"value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/need-for-speed-heat-standard-edition-ps4'" value="Ir a la Pagina"> </center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://juegosdigitaleschile.com/productos/the-last-of-us-part-ii-ps4-flash-sale'" value="Ir a la Pagina"></center>
          </td>
        </tr>
      </table></center>
    </div>

    <br><br>
    <!-- Footer -->
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
<!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  </body>
</html>