<?php
    session_start();
    $varsesion = $_SESSION['nombre'];
    if($varsesion == null || $varsesion = '' ) {
      echo 'No tiene autorizacion';
      die();
    }
    $link = mysqli_connect("localhost", "root", "", "switchplays") or die("<h2>No se encuentra el servidor</h2>");
    if($link){
      mysqli_query($link,"SET NAME 'utf 8'");
    }
    $consulta="SELECT * FROM usuario WHERE Nombre='$_SESSION[nombre]'";
    $resultado=mysqli_query($link, $consulta);
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
    <center>
      <br></br>
      <br></br>
      <img src="../img/perfil.png" width="150" height="150">
    <h3>Nombre de Usuario: &nbsp <?php echo  $_SESSION['nombre'] ?></h3>
    <h3>Correo: &nbsp <?php echo $mostrar['Correo'] ?></h3>
    <h3>Categorias Favoritas:
    <form action="IngresarCat.php" method="Post">
    <select name="Categoria" id="" required>  
        <option>Ninguno</option>
        <?php
        $sql="SELECT * from categorias";
        $result=mysqli_query($link,$sql);
        while ($categorias=mysqli_fetch_array($result)){
        ?>
        <option value="<?php echo $categorias[0] ?>"><?php echo $categorias[1] ?></option>
        <?php
        }
        ?>
    </select> 
    <input type="submit" name="BtnGuardar" value="mostrar"/></form></h3>
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
                    <a class="nav-item nav-link" href="Xboxiniciar.php">Xbox</a>
                    <a class="nav-item nav-link" href="Pciniciar.php">Pc</a>
                  </div>
                  <div class="navbar-nav ml-auto">
                    <a class="btn btn-outline-light" >  Bienvenido/a <?php echo $_SESSION['nombre'] ?></a>
                    <a class="btn btn-outline-light" href="cerrarsesion.php">Cerrar Sesion</a>
                  </div>
            </div>

        </div>
        
      </nav>
    <!-- Menu -->
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
