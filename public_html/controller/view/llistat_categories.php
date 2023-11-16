<style>
  .category-button {
    /* Aquí van tus estilos */
    background-color: orange; /* Color de fondo */
    padding: 10px 130px; /* Espaciado interno */
    text-align: center; /* Alineación del texto */
    font-size: 16px;
    margin:  5px 5px 5px 5px;
    cursor: pointer;

    animation-name: zoomIn;
    animation-duration: 800ms;
}
</style>

<section id="categories">
    <h2>Explora nuestras categorías</h2>
    <div class="categories-container">
        <div>
            <?php foreach ($categories as $category): ?>
                <button class="category-button" data-category-id="<?php echo $category['id']; ?>">
                    <?php echo $category['nom']; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Espera a que el contenido esté completamente cargado
    document.body.addEventListener('click', function(event) {
    // Verifica si el elemento clickeado (o uno de sus ancestros) tiene la clase "category-button"
    if (event.target.closest('.category-button')) {
        const button = event.target.closest('.category-button');
        const categoryId = button.getAttribute('data-category-id');

        fetch(`index.php?accio=llistar-productes&categoria_id=${categoryId}`)
            .then(response => response.text())
            .then(data => {
                document.body.innerHTML = data;
            })
            .catch(error => {
                console.error("Hubo un error con la petición AJAX:", error);
            });
    }
});
</script>