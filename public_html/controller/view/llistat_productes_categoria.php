<style>
    .product-container {
        width: 20%; /* Hace que cada contenedor de producto ocupe el 20% del ancho total */
        float: left; /* Asegura que los productos se alineen uno al lado del otro */
        padding: 0 10px; /* Espaciado entre cada producto */
        box-sizing: border-box; /* Para incluir el padding dentro del ancho total */
    }

    .product-card {
        height: 250px;
        border: 1px solid #e0e0e0;
        overflow: hidden;
        position: relative;
    }

    .product-card img {
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
    }

    .product-details {
        position: absolute;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        width: 100%;
        padding: 5px;
    }
</style>

<div class="container-fluid">
    <h2 class="mb-4"><?php echo $title; ?></h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <!-- Envuelve cada product-container con un enlace -->
            <a href="https://tdiw-i1.deic-docencia.uab.cat/index.php?accio=detall&product_id=<?php echo $product['id']; ?>" class="product-link">
                <div class="product-container mb-4">
                    <div class="product-card">
                        <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['nom']; ?>">
                        <div class="product-details">
                            <strong><?php echo $product['nom']; ?></strong><br>
                            <?php echo $product['descriptio']; ?><br>
                            <small><?php echo $product['preu']; ?></small>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
