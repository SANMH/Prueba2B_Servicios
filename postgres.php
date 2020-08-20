<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = Cartelera";
   $credentials = "user = postgres password=luisSANMH34";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

  
   $nombres = pg_query($db, "SELECT * FROM public.peliculas");


   if(!$nombres) {
      echo pg_last_error($db);
      exit;
   } 
   echo "<table>\n";
   while($row = pg_fetch_row($nombres)) {
      echo "<table>\n";
      echo "ID = ". $row[0] . "\n";
      echo "NAME = ". $row[1] ."\n";
      echo "ADDRESS = ". $row[2] ."\n";
      echo "SALARY =  ".$row[3] ."\n\n";
      echo "</table>\n";
   }
   echo "</table>\n";
   echo "Operation done successfully\n";
   pg_close($db);

?>
