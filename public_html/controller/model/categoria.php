<?php
function getCategories(): array
{
    $conn = getConn();
    $sql = "SELECT * FROM categoria";
    $stmt = pg_query($conn, $sql);

    if (!$stmt) {
        throw new Exception("Error en la consulta SQL: " . pg_last_error($conn));
    }

    $filas = pg_fetch_all($stmt);
    
    if ($filas === false) {
        return [];  // Devuelve un array vacío si no hay resultados
    }

    return $filas;
}

function getCategoryById(int $categoryId): array
{
    $conn = getConn();  // Esta función debería devolver una conexión a PostgreSQL

    $sql = 'SELECT id, nom FROM categoria WHERE id = $1';
    $result = pg_query_params($conn, $sql, [$categoryId]);

    if (!$result) {
        throw new Exception("Error en la consulta SQL: " . pg_last_error($conn));
    }

    $fila = pg_fetch_assoc($result);
    
    if ($fila === false) {
        return [];  // Devuelve un array vacío si no hay resultados
    }

    return $fila;
}

?>
