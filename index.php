<?php
// Conectando y seleccionado la base de datos 

$user = 'postgres';
$passwd = 'luisSANMH34';
$db = 'Cartelera';
$port = '5432';
$host = 'localhost';

$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ");
echo "Conexion exitosa <hr>";




// Realizando una consulta SQL
$query = 'SELECT * FROM peliculas';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexiÃ³n
pg_close($dbconn);
?>

<?php

