<?php

// index.php

$accio = $_GET['accio'] ?? NULL;

switch ($accio) {

    case 'llistar-categories':
        include __DIR__.'/resource_llistar_categories.php';
    break;
    case 'llistar-productes':
        include __DIR__.'/resource_llistar_productes_categories.php';
    break;
    case 'login':
        include __DIR__.'/controller/view/html/login.html';
    break;
    case 'register':
        include __DIR__.'/controller/registre.php';    
    break;
    case 'detall':
        include __DIR__.'/controller/detall_producte.php';    
    break;
    default:
        include __DIR__.'/resource_llistar_categories.php';
    break;

}
?>