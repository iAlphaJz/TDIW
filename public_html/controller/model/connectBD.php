<?php

function getConn()
{
    $servidor = "127.0.0.1";
    $port = "5432";
    $DBnom = "tdiw-i1";  
    $usuari = "tdiw-i1"; 
    $clau = "ZUhbZ_LV";  
    
    $connexio = pg_connect("host=$servidor port=$port dbname=$DBnom user=$usuari password=$clau");
    if (!$connexio) {
        throw new Exception("Could not connect to database: " . pg_last_error());
    }
    return $connexio;
}

?>
