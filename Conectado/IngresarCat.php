<?php
    switch ( $_POST['Categoria']){
      case 1:
        header("location:peleasperfil.php");
        break;
      case 2:
        header("location:deportesperfil.php");
        break;
      case 3:
        header("location:aventurasperfil.php");
        break;
      case 4:
        header("location:carrerasperfil.php");
        break;
      case 5:
        header("location:terrorperfil.php");
        break;
      case 6:
        header("location:estrategiasperfil.php");
        break;
      case 7:
        header("location:disparosperfil.php");
        break;
    }
?>