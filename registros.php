<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tilt+Neon&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/registros.css" />
    <title>Registro</title>
</head>

<body>
    <!-- formulario de contacto en html y css -->
    <div class="contact_form">
        <div class="formulario">
            <h1>Formulario de Registro</h1>
            <form action="validar_registros.php" method="POST">
                <p>
                    <label for="nombre" class="colocar_nombre">Nombre:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tú nombre..." />
                </p>

                <p>
                    <label for="nombre" class="colocar_nombre">Apellido Materno:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="apellido-1" id="apellido-1" required="obligatorio" placeholder="Escribe tú primer apellido..." />
                </p>

                <p>
                    <label for="nombre" class="colocar_nombre">Apellido Paterno:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="apellido-2" id="apellido-2" required="obligatorio" placeholder="Escribe tú segundo apellido..." />
                </p>

                <p>
                    <label for="email" class="colocar_email">Correo:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tú correo electronico..." />
                </p>

                <p>
                    <label for="telefone" class="colocar_telefono">Teléfono:</label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Escribe tú teléfono..." />
                </p>

                <p>
                    <label for="asunto" class="colocar_asunto">Cargo que desempeña:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="cargo" id="cargo" required="obligatorio" placeholder="Escribe el cargo que desempeñas..." />
                </p>

                <p>
                    <label for="asunto" class="colocar_asunto">Contraseña:
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="password" name="password" id="password" required="obligatorio" placeholder="Escribe una contraseña..." />
                </p>

                <button type="submit">Enviar</button>
                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>
            </form>
        </div>
    </div>
</body>
</html>