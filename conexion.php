<?php

    function conexion(){

    $host = "host=dpg-cvmpjbadbo4c7394pfeg-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=postgresql_php_dmyp";
    $user = "user=postgresql_php_dmyp_user";
    $password = "password=0coi28fdyxkr3op948MhaPFGa3bPrgBd";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
    }
?>