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
    <div id="buscadorMaterias"></div>
		<div id="tablamaterias"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva Materia</h4>
      </div>


      <form>
      <div class="modal-body">
        <label>CLAVE:</label>
          <input type="text" name="" id="txt_clave_materia" class="form-control input-sm" >
        	<label>NOMBRE:</label>
        	<input type="text" name="" id="txt_Nombre_materia" class="form-control input-sm" >
        	<label>CREDITOS:</label>
        	<input type="text" name="" id="txt_creditos_materia" class="form-control input-sm" > 
        	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="guardarMateria">
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
      		<input type="text" name="" id="txt_nombre_materia_modificaciones" class="form-control input-sm" 
          disabled="true">
          <label>NOMBRE:</label>
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm">
          <label>CREDITOS:</label>
          
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
		$('#tablamaterias').load('componentes/tablamaterias.php');
    $('#buscadorMaterias').load('componentes/buscadorMateria.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#guardarMateria').click(function(){
          txt_clave_materia=$('#txt_clave_materia').val();
          txt_Nombre_materia=$('#txt_Nombre_materia').val();
          txt_creditos_materia=$('#txt_creditos_materia').val();
          

            agregardatosMateria(txt_clave_materia,txt_Nombre_materia,txt_creditos_materia);
        });




        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });

</script>