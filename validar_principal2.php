<?php
$carrera = htmlspecialchars(trim($_POST['carrera']));
$turno = htmlspecialchars(trim($_POST['turno']));
   
   include('conexion.php');
   // Realizar la consulta
   $sql = "SELECT * FROM inscripcion WHERE carrera = '$carrera' AND turno = '$turno'";
   
   $result = $conexion->query($sql);
   ?>
   <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/principal_2.css">
	<title>Registro de Alumnos</title>
</head>
<body>
	<header>
		<nav>
			<section class="container nav">
				<div class="img">
					<img src="img/logo1.png">
				</div>
				<div class="enlaces-header">
					<a href="#4">Ayuda</a>
				</div>
			</section>
		</nav>
	</header>

	<div class="container"><br>
        <h1>Buscar Registros de Alumnos</h1>
        <form id="searchForm" method="POST" action="validar_principal2.php">
            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select id="carrera" name="carrera">
                <option value="Ingeniería Industrial y de Sistemas">Ingeniería Industrial y de Sistemas</option>
                    <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                    <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                    <option value="Pedagogia">Pedagogía</option>
                    <option value="PsicologÍa">Psicología</option>
                    <option value="Gastronomia">Gastronomía</option>
                    <option value="Odontologia">Odontología</option>
                    <option value="Enfermeria">Enfermería</option>
                    <option value="Arquitectura">Arquitectura</option>
                    <option value="Arte Digital">Arte Digital</option>
                    <option value="Derecho">Derecho</option>
                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                    <option value="Sisioterapia">Fisioterapia</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Relaciones Económicas Internacionales">Relaciones Económicas Internacionales</option>
                    <option value="Administración de Empresas">Administración de Empresas</option>
                    <option value="Administración de Empresas Turísticas">Administración de Empresas Turísticas</option>
                    <option value="Comercio Internacional">Comercio Internacional</option>
                    <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                    <option value="Contaduría">Contaduría</option>
                    <option value="Desarrollo Empresarial y Capital Humano">Desarrollo Empresarial y Capital Humano</option>
                    <option value="Diseño Industrial">Diseño Industrial</option>
                    <option value="Enseñanza del Idioma Inglés">Enseñanza del Idioma Inglés</option>
                    <option value="Gerontología">Gerontología</option>
                    <option value="Finanzas">Finanzas</option>
                    <option value="Mercadotecnia">Mercadotecnia</option>
                    <option value="Nutrición">Nutrición</option>
                    <option value="Seguridad Pública y Protección Ciudadana">Seguridad Pública y Protección Ciudadana </option>
                    <!-- Agrega más opciones según las carreras disponibles -->
                </select>
            </div>
            <div class="form-group">
                <label for="turno">Turno:</label>
                <select id="turno" name="turno">
                    <option value="matutino">Matutino</option>
                    <option value="vespertino">Vespertino</option>
                    <option value="sabatino">Sabatino</option>
                </select>
            </div><br>
            <button type="submit">Buscar Alumno</button>
        </form>
    </div>
</body>
</html><br><br>
   <?php
   // Verificar si hay resultados
   if ($result->num_rows > 0) {
       echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Teléfono</th><th>Correo</th><th>Fecha de Registro</th></tr>";
       // Mostrar resultados
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido_paterno"]. "</td><td>" . $row["apellido_materno"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["fecha_registro"]. "</td></tr>";
       }
       echo "</table>";
   } else {
       echo "0 resultados";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="results" class="results">
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
            <form id="searchForm" method="POST" action="principal_2.php"><br>
            <button type="submit">Regresar</button>
            </form>
    </div>
</body>
</html>
