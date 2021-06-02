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
            <a class="navbar-brand" href="indexlogin.php"> <img src="../FotosMockup/\logo.png" width="355" height="60"></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto ml-auto">
                    <a class="nav-item nav-link" href="indexlogin.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="PS4iniciar.php">PS4</a>
                    <a class="nav-item nav-link active">Xbox</a>
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
    <a href="#">Todos</a>
    <a href="#">Deportes</a>
    <a href="AventurasXbox.php">Aventuras</a>
    <a href="#">Carreras</a>
    <a href="#">Pelea</a>
    <a href="#">Terror</a>
    <a href="#">Estrategia</a>
    <a href="DisparosXbox.php">Disparos</a>
  </div>

    

    <center>
      <div class="titulo">
        <img src="../img/Xbox\titulo.png" width="355" height="60">
      </div>
    </center>

    <br><br>

    <div class="index">
      <center><table>
        <tr>
        <td>
          <img src="../img/Xbox\assassinscreed.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/Xbox\battlefield1.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/Xbox\assassinscreedv.jpg" class="juegos fade-in">
        </td>
        <td>
          <img src="../img/Xbox\callofduty.jpg" class="juegos fade-in">
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
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/assassins-creed-iv-black-flag/BRKMHZX1RCF2?activetab=pivot:overviewtab'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/battlefield-1/BWTTW53M5B98?activetab=pivot:overviewtab'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.xbox.com/es-cl/games/assassins-creed-valhalla'" value="Ir a la Pagina"> </center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/call-of-duty-black-ops-iii-zombies-deluxe/bpp4nb1ckgp1?activetab=pivot:overviewtab'" value="Ir a la Pagina"></center>
          </td>
        </tr>
        <tr>
          <td>
            <img src="../img/Xbox\fallout76.jpg" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/Xbox\gearsofwar.jpg" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/Xbox\reddeadredemption.jpg" class="juegos fade-in" >
          </td>
          <td>
            <img src="../img/Xbox\sniper3.jpg" class="juegos fade-in" >
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
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/fallout-76/BS6WJ2L56B10?activetab=pivot:overviewtab'" value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/gears-5-ultimate-edition/9P9CKRGR40KK?activetab=pivot:overviewtab'"value="Ir a la Pagina"></center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.xbox.com/es-cl/games/red-dead-redemption-2'" value="Ir a la Pagina"> </center>
          </td>
          <td>
            <center><input type="button" onclick="location.href='https://www.microsoft.com/es-cl/p/sniper-elite-3-ultimate-edition/BRPJ41HZ1Q46?activetab=pivot:overviewtab'" value="Ir a la Pagina"></center>
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