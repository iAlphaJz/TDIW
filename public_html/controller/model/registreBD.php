<?php
require 'connectBD.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    registreSubmit();
}

function registreSubmit() {
    $conn = getConn();

    $nom = pg_escape_string($conn, $_POST['Uname']);
    $email = pg_escape_string($conn, $_POST['email']);
    $pass = pg_escape_string($conn, $_POST['pass']);
    $dir = pg_escape_string($conn, $_POST['dir']);
    $poblacio = pg_escape_string($conn, $_POST['poblacio']);
    $CP = pg_escape_string($conn, $_POST['cp']);

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuari (id, email, password, direccion, poblacio, cp) 
    VALUES ($1, $2, $3, $4, $5, $6)";
    $params = array($nom, $email, $hashed_pass, $dir, $poblacio, $CP);

    $result = pg_query_params($conn, $query, $params);
    if ($result) {
        header('Location: https://tdiw-i1.deic-docencia.uab.cat');
        exit;
        } else {
        echo "Error: " . pg_last_error($conn);
    }
    pg_close($conn);
}
?>  