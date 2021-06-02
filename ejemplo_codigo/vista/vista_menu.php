<!DOCTYPE html>
<html>
<head>
	<title> Proyecto </title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.min.css">

	<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controlador/control_usuario.js"></script>

</head>
<body>
	<h1> Bienvenido al proyecto </h1>

	<div class="row" style="margin: 0px; padding: 0px;"> 

    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Registro de Datos </h3>
    	<div id="panel_registro" style="padding: 5%; box-shadow: 1px 2px 2px #A4A4A4; border:1px solid #A4A4A4;" align="center">
    		<!-- Panel de datos -->
    		<table class="table table-condensed" style="width: 70%;">
    			<tr>
    				<td> <label> Nombre </label></td>
    				<td> <input type="text" id="nombre" class="form-control" placeholder="* Nombre"></td></tr>
    			<tr> <td> <label> Apellido </label></td>
    				<td> <input type="text" id="apellido" class="form-control" placeholder="* Apellido"></td></tr>
    			<tr> <td> <label> Edad </label></td>
    				<td> <input type="number" id="edad" min="0" class="form-control" placeholder="* Edad"></td>
    			</tr>
    			<tr>
    				<td colspan="2">
    					<hr>
    					<div id="panel_respuesta"></div>
    				</td>
    			</tr>
    			<tr>
    				<td colspan="2" align="center">
    					<button class="btn btn-success btn-md" onclick="btn_guardar_dato();"> Registrar </button>
    				</td>
    			</tr>
    			
    		</table>

    	</div>
    	
    </div>
    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Listado de Datos </h3>
    	<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>
        <button class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal_selector"> Selector </button>
    	<div id="panel_listado">
    		<!-- Panel de datos -->

    	</div>
    </div>
	</div>

</body>
</html>

<!-- Modal -->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Selector </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion </p>
        <select class="form-control" id="select_usuario" onchange="select_usuario();">
        <option value=""> Seleccione </option>
            <?php

            require '../conector/conexion.php';

            $sql_s = mysql_query("SELECT * FROM usuario ORDER BY ID_usuario");
            while ($row_s = mysql_fetch_array($sql_s)) {
                $ID_usuario = $row_s['ID_usuario'];
                $nombre = $row_s['nombre'];
                ?>

                <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

                <?php
            }

            ?>
        </select>
        <div id="panel_selector"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="btn_eliminar_dato();"> Eliminar </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
       
      </div>
    </div>

  </div>
</div>