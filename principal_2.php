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

        <div id="results" class="results">
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
             
        </div>
    </div>
</body>
</html>