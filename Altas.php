<?php 
  session_start();

  unset($_SESSION['consulta']);
  require_once"menu_principal.html";

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>

</script>
	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>


      <form>
      <div class="modal-body">
        <label>NUMERO DE CONTROL:</label>
          <input type="text" name="" id="txt_Num_Control" class="form-control input-sm" >
        	<label>NOMBRE:</label>
        	<input type="text" name="" id="txt_Nombre" class="form-control input-sm" >
        	<label>APELLIDO PATERNO:</label>
        	<input type="text" name="" id="txt_Apellido_Paterno" class="form-control input-sm" > 
        	<label>APELLIDO MATERNO:</label>
        	<input type="text" name="" id="txt_Apellido_Materno" class="form-control input-sm" >
        	<label>EDAD:</label>
        	<input type="text" name="" id="txt_Edad" class="form-control input-sm" >
          <label>SEMESTRE:</label>
          <input type="text" name="" id="txt_Semestre" class="form-control input-sm" >
          <label>CARRERA:</label>
          <input type="text" name="" id="txt_Carrera" class="form-control input-sm" >
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="guardarnuevo">
        Agregar
        </button>
       </div>
     </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" name="" id="txt_Num_Control_Modificaciones" class="form-control input-sm" 
          disabled="true">
          <label>NOMBRE:</label>
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm">
          <label>APELLIDO PATERNO:</label>
          <input type="text" name="" id="txt_Apellido_Paterno_Modificaciones" class="form-control input-sm"> 
          <label>APELLIDO MATERNO:</label>
          <input type="text" name="" id="txt_Apellido_Materno_Modificaciones" class="form-control input-sm">
          <label>EDAD:</label>
          <input type="text" name="" id="txt_Edad_Modificaciones" class="form-control input-sm">
          <label>SEMESTRE:</label>
          <input type="text" name="" id="txt_Semestre_Modificaciones" class="form-control input-sm">
          <label>CARRERA:</label>
          <input type="text" name="" id="txt_Carrera_Modificaciones" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript"src="js/validar_alta.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#guardarnuevo').click(function(){
          txt_Num_Control=$('#txt_Num_Control').val();
          txt_Nombre=$('#txt_Nombre').val();
          txt_Apellido_Paterno=$('#txt_Apellido_Paterno').val();
          txt_Apellido_Materno=$('#txt_Apellido_Materno').val();
          txt_Edad=$('#txt_Edad').val();
          txt_Semestre=$('#txt_Semestre').val();
          txt_Carrera=$('#txt_Carrera').val();

            agregardatos(txt_Num_Control,txt_Nombre,txt_Apellido_Paterno,txt_Apellido_Materno,txt_Edad,txt_Semestre,txt_Carrera);
        });




        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });

</script>