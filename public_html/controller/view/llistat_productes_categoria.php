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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <h2 class="mb-4"><?php echo $title; ?></h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="product-container mb-4">
                <div class="product-card">
                    <button class="product-link" data-toggle="modal" data-target="#productModal<?php echo $product['id']; ?>">Ver Detalles</button>
                    <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['nom']; ?>">
                    <div class="product-details">
                        <strong><?php echo $product['nom']; ?></strong><br>
                        <?php echo $product['descriptio']; ?><br>
                        <small><?php echo $product['preu']; ?></small>
                    </div>
                </div>
            </div>
            <!-- Modal para mostrar los detalles del producto -->
            <div class="modal fade" id="productModal<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $product['nom']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Aquí muestra los detalles del producto -->
                            <?php echo $product['descriptio']; ?><br>
                            <small><?php echo $product['preu']; ?></small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
