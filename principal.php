<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <title>Registro de Inscripción</title>
</head>
<body>
    <header>
		<nav>
			<section class="container nav">
				<div class="img">
					<img src="img/logo1.png">
				</div>
				<div class="enlaces-header">
					<a href="registros.php">Registro</a>
					<a href="principal_2.php">Buscar</a>
					<a href="principal.php">Registrar</a>
					<a href="#4">Ayuda</a>
				</div>
			</section>
		</nav>
	</header><br><br>

	<section class="form-section">
        <form action="validar.principal.php" method="POST">
            <h1>Formulario de Inscripción</h1>
            <div class="form-group">
                <label for="nombre">Nombre (s) del Alumno:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresar nombre del alumno...">
            </div>
            <div class="form-group">
                <label for="nombre">Apellido Paterno:</label>
                <input type="text" id="apellido-1" name="apellido-1" required placeholder="Ingresar apellido paterno...">
            </div>
            <div class="form-group">
                <label for="nombre">Apellido Materno:</label>
                <input type="text" id="apellido-2" name="apellido-2" required placeholder="Ingresar apellido materno...">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required placeholder="Ingresar teléfono...">
            </div>
            <div class="form-group">
                <label for="correo">Correo Personal:</label>
                <input type="email" id="email" name="email" required placeholder="Ingresar correo electónico...">
            </div>
            <div class="form-group">
                <label for="carrera">Seleccionar Carrera:</label>
                <select id="carrera" name="carrera">
                    <option>Ingeniería Industrial y de Sistemas</option>
                    <option>Ingeniería Mecatrónica</option>
                    <option>Ingeniería en Sistemas Computacionales</option>
                    <option>Pedagogía</option>
                    <option>Psicología</option>
                    <option>Gastronomía</option>
                    <option>Odontología</option>
                    <option>Enfermería</option>
                    <option>Arquitectura</option>
                    <option>Arte Digital</option>
                    <option>Derecho</option>
                    <option>Diseño Gráfico</option>
                    <option>Fisioterapia</option>
                    <option>Medicina</option>
                    <option>Relaciones Económicas Internacionales</option>
                    <option>Administración de Empresas</option>
                    <option>Administración de Empresas Turísticas</option>
                    <option>Comercio Internacional</option>
                    <option>Ciencias de la Comunicación</option>
                    <option>Contaduría</option>
                    <option>Desarrollo Empresarial y Capital Humano</option>
                    <option>Diseño Industrial</option>
                    <option>Enseñanza del Idioma Inglés</option>
                    <option>Gerontología</option>
                    <option>Finanzas</option>
                    <option>Mercadotecnia</option>
                    <option>Nutrición</option>
                    <option>Seguridad Pública y Protección Ciudadana </option>
                    <!-- Agrega más opciones según las carreras disponibles -->
                </select>
            </div>
            <div class="form-group">
                <label>Turno:</label>
                <select id="turno" name="turno">
                    <option>Matutino</option>
                    <option>Vespertino</option>
                    <option>Sabatino</option>
                </select>
            </div>
            <div class="form-group">
                <label>Documentos Entregados:</label>
                <label><input  type="checkbox" id="actaNacimiento" name="actaNacimiento" onchange="validarDocumentos()"> Acta de Nacimiento</label>
                <label><input  type="checkbox" id="curp" name="curp" onchange="validarDocumentos()"> CURP</label>
                <label><input  type="checkbox" id="ine" name="ine" onchange="validarDocumentos()"> INE</label>
                <label><input  type="checkbox" id="comprobanteDomicilio" name="comprobanteDomicilio" onchange="validarDocumentos()"> Comprobante de Domicilio</label>
                <label><input  type="checkbox" id="certificadoPreparatoria" name="certificadoPreparatoria" onchange="validarDocumentos()"> Certificado de Preparatoria</label>
            </div>
            <div class="form-group">
                <label>Tú status corresponde a:</label>
                <select id="status" name="status">
                    <option>Inscrito</option>
                    <option>Alumno</option>
                    <option>Incompleto</option>
                </select>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </section> 
</body>
</html>