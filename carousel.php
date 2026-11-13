<?php
$galeria_items = [];
if (!empty($json_galeria) && file_exists($json_galeria)) {
    $contenido = file_get_contents($json_galeria);
    $galeria_items = json_decode($contenido, true);
}
?>

<?php if (!empty($galeria_items) && is_array($galeria_items)): ?>
<section class="ig-carousel" data-json="<?= htmlspecialchars($json_galeria, ENT_QUOTES, 'UTF-8') ?>">
    <button type="button" class="ig-carousel__btn ig-carousel__btn--prev" aria-label="Anterior">&#10094;</button>
    
    <div class="ig-carousel__track">
        //Recorre cada elemento del archivo JSON, saca el ID y obtiene la dirección de la imagen al igual que el nombre
        <?php foreach ($galeria_items as $item): ?>
            <article class="ig-carousel__item" data-id="<?= htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8') ?>">
                <img class="ig-carousel__img" 
                     src="<?= htmlspecialchars($item['imagen'], ENT_QUOTES, 'UTF-8') ?>" 
                     alt="<?= htmlspecialchars($item['nombre'], ENT_QUOTES, 'UTF-8') ?>"
                     loading="lazy">
                
                <div class="ig-carousel__overlay">
                    <span class="ig-carousel__caption"><?= htmlspecialchars($item['nombre'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <button type="button" class="ig-carousel__btn ig-carousel__btn--next" aria-label="Siguiente">&#10095;</button>
</section>
<?php endif; ?>