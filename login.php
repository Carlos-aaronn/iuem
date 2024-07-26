<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <section>
        <form action="validar.php" method="post">
            <h1>Iniciar Sesión</h1>
            <div class="box">
                <input type="email" id="correo" name="correo" required>
                <label for="usuario"><i style="letter-spacing: 10px;" class="fas fa-user"></i>Usuario:</label>
            </div>

            <div class="box">
                <input type="password" id="contraseña" name="contraseña" required>
                <label for="contraseña"><i style="letter-spacing: 10px;" class="fas fa-lock"></i>Contraseña:</label>
            </div>

            <div class="forget">
                <label for="recordar"><input type="checkbox" id="recordar" role="switch" checked>Recordar Contraseña</label>
            </div>
            
            <button type="submit">Iniciar</button>
            
            <div class="register">
                <p>Si eres nuevo registrate <a href="registros.php">aquí...</a></p>
            </div>
        </form>
    </section>
</body>
</html>