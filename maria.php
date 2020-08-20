<?php
	$usuario = "root";
	$password = "luisSANMH34";
	$servidor = "25.113.147.187";
	$basededatos = "mydb";
	
	// creaciÃ³n de la conexiÃ³n a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor,$usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// SelecciÃ³n del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM mitabla";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la conxsulta a la base de datos");
	
	echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>";

	echo "<table class='table'>";
echo "  <thead class='thead-dark'>";
echo "    <tr>";
echo "      <th scope='col'>Nombre</th>";

echo "    </tr>";
echo "  </thead>";
echo "  <tbody>";
echo "<br>";


	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{

		echo "<tr>";
		echo "<td>" . $columna['nombre'] . "</td><td>";
		echo "</tr>";
	}
	
	echo "</tbody>";
echo "</table>";

echo "<a href='index.html' class='btn btn-secondary btn-lg active' role='button' aria-pressed='true'>Inicio</a>";

	// cerrar conexiÃ³n de base de datos
	mysqli_close( $conexion );
?>