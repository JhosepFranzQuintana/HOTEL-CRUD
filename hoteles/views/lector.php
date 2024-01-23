<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}


?>

<?php
require '../config/database.php';

$sqlusuarios = "SELECT cliente.nombre, cliente.id_departamento, cliente.id_ciudad, cliente.id_hotel, cliente.id_cuarto, cliente.id_tiempo FROM cliente";

$usuarios = $conn->query($sqlusuarios)

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

<link rel="stylesheet" href="../css/estilo.css">
<link rel="stylesheet" href="../css/es.css">
    <title>Usuarios</title>
</head>

<div class="container is-fluid">




<div class="col-xs-12">
  		<h1>Bienvenido Lector <?php echo $_SESSION['nombre']; ?></h1>
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>

      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar sesión
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>

		</div>
		<br>




           <br>


			</form>
        
        
 
      <table class="table table-striped table-dark " id= "table_id">

                   
            <thead>    
              <tr>
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Hotel</th>
                <th>Cuarto</th>
                <th>Tiempo</th>
                     
              </tr>
            </thead>
            <tbody>
                <?php while ($row = $usuarios->fetch_assoc()) {  ?>
                    <tr>
                        <td><?= $row['nombre']; ?></td>
                        <td><?= $row['id_departamento']; ?></td>
                        <td><?= $row['id_ciudad']; ?></td>
                        <td><?= $row['id_hotel']; ?></td>
                        <td><?= $row['id_cuarto']; ?></td>
                        <td><?= $dir . $row['id_tiempo']; ?></td>
                   
                    </tr>
                <?php } ?>
            </tbody>



	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>