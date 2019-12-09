<?php
$conn_string = "host=localhost port=5432 dbname=PUESTOS user=postgres password=kevinlopez2000";
$dbconn = pg_connect($conn_string);
if ($dbconn==false){
    echo "Ocurrió un error en la coneccion";
    exit;
}
?>