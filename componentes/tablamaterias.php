
<?php 
	session_start();
	
	require_once "../php/conexion.php";

	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center><h2>Materias</h2></center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar materias 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		
		
			<tr>
				<td>CLAVE MATERIA</td>
				<td>NOMBRE MATERIA</td>
				<td>CREDITOS MATERIA</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
$sql="SELECT clave,Nombre,creditos from materias where clave='$idp'";
}else{
						$sql="SELECT clave,Nombre,creditos from materias";
					}
				}else{
					$sql="SELECT clave,Nombre,creditos from materias";
				}
					
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||";
			 ?>

			<tr>
			<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>