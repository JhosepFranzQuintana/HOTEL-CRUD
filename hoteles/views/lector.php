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
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/stylesLector.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


    <title>Usuarios</title>
</head>


<body class="body">

    <nav class="nav">
        <header>
            <h2>Express reserves</h2>
        </header>
        <img class="nav--img" src="../img/logo-hotel.png" alt="">
    </nav>

  	<div class="mainn">

        <div class="cabecera">
            <div class="cabecera-titulo">
                <h1 class="texto-t2">BIENVENIDO <?php echo $_SESSION['nombre']; ?></h1>
            </div>
            <div class="subtitulo">
                <h1>Lista de usuarios</h1>
            </div>
        <div class="caja-boton">
            <a class="boton" href="../includes/_sesion/cerrarSesion.php">Cerrar sesión
              <i class="fa fa-power-off" aria-hidden="true"></i>
            </a>
        </div>
              
        <section class="tabla-main">
              <table class="tabla-lector" id= "table_id">
                    <thead class="cabecera-tabla">
                      <tr>
                        <th class="cabecera-item-tabla">Nombre</th>
                        <th class="cabecera-item-tabla">Departamento</th>
                        <th class="cabecera-item-tabla">Ciudad</th>
                        <th class="cabecera-item-tabla">Hotel</th>
                        <th class="cabecera-item-tabla">Cuarto</th>
                        <th class="cabecera-item-tabla">Tiempo</th>
                      </tr>
                    </thead>
                    <tbody class="cuerpo-tabla">
                        <?php while ($row = $usuarios->fetch_assoc()) {  ?>
                            <tr>
                                <td class="cuerpo-item-tabla"><?= $row['nombre']; ?></td>
                                <td class="cuerpo-item-tabla"><?= $row['id_departamento']; ?></td>
                                <td class="cuerpo-item-tabla"><?= $row['id_ciudad']; ?></td>
                                <td class="cuerpo-item-tabla"><?= $row['id_hotel']; ?></td>
                                <td class="cuerpo-item-tabla"><?= $row['id_cuarto']; ?></td>
                                <td class="cuerpo-item-tabla"><?= $dir . $row['id_tiempo']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
              </table>
        </section>

      </div>


      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
      <script src="../js/user.js"></script>
</body>





</html>