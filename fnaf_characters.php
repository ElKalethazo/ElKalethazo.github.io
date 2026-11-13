<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FNAF</title>
        <link rel="stylesheet" href="styles.css?v=3">
    </head>
    <body>
        <?php 
        include 'header.php'; 
        include 'tarjetero.php'; 
        $json_galeria = 'data/fnaf.json';
        ?>
        
        <main>
            <div class="box-card">
                <h2>¡Bienvenido a la sección de Five Nights at Freddy's!</h2>
                <p>Explora el TOP 5 de mis animatrónicos favoritos de la saga de juegos de Five Nights at Freddy's.</p>
            </div>
            <?php include 'carousel.php'; ?>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>