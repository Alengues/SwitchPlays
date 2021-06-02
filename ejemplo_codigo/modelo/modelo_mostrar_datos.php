<?php

 $ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';

$sql_u = mysql_query("SELECT * FROM favoritos WHERE ID_usuario ='$ID_usuario'");

$row_u = mysql_fetch_array($sql_u);

$Favorito = $row_u['ID_Categorias'];
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Categorias Favoritas: </td>
		<td> <?php echo $nombre; ?></td>
	</tr>
</table>
<?php

?>