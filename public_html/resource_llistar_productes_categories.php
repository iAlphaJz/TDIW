<html lang="ca">
<head>
 <title>Llistat de Productes - TDIW</title>
 </head>
 <body>

 <header>
    <?php require __DIR__.'/controller/menu_superior.php'; ?>
    
 </header>
 <div class="container">
    <?php require __DIR__.'/controller/llistat_categories.php'; ?>
    <?php require __DIR__.'/controller/llistat_productes_categoria.php'; ?>
 </div>

</body>
</html>