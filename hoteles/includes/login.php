

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/styles.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	

</head>

<body class= body>
    <nav class="nav">
        <header>
            <h2>Express reserves</h2>
        </header>
        <img class="nav--img" src="../img/logo-hotel.png" alt="">
    </nav>

    <form  action="_functions.php" method="POST">
        <div id="login" >
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="conten-carta">
                            <div class="cabecera-form">
                                <h3 class="texto-t ">Bienvenido</h3>
                            </div>
                            <div class="cartaa">
                                <div class="conten-input">
                                    <input type="text" name="nombre" id="nombre" class="input--form"  placeholder="usuario" required>
                                </div>
                                <div class="conten-input">
                                    <input type="password" name="password" id="password" class="input--form" placeholder="contraseña" required>
                                    <input type="hidden" name="accion" value="acceso_user">
                                </div>
                                <div class="">
                                    <input type="submit"class="boton" value="Iniciar sesion">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </form>
</body>
</html>