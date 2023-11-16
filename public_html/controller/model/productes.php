<?php

function getProductsByCategory($categoryId): array
{
    $conn = getConn();

    $sql = "SELECT id, nom, descriptio, img, preu
            FROM producte
            WHERE categoria_id::integer = $categoryId
            ORDER BY nom, descriptio, img, preu";
    
    $result = pg_query($conn, $sql);

    if (!$result) {
        throw new Exception("Error en la consulta SQL: " . pg_last_error($conn));
    }

    $filas = pg_fetch_all($result, PGSQL_ASSOC);
    
    if ($filas === false) {
        return [];  // Devuelve un array vacío si no hay resultados
    }

    return $filas;
}

function getProductsById($productId) {
    $conn = getConn();

    $sql = "SELECT id, nom, descriptio, img, preu, detall
            FROM producte
            WHERE id::integer = $productId";

    $result = pg_query($conn, $sql);

    if (!$result) {
        throw new Exception("Error en la consulta SQL: " . pg_last_error($conn));
    }

    $fila = pg_fetch_assoc($result); // Obtiene una sola fila, ya que el ID es único

    if ($fila === false) {
        return null; // Devuelve null si no hay resultado
    }

    return $fila;
}

?>
