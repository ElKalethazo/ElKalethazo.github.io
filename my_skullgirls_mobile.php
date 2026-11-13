<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skullgirls</title>
        <link rel="stylesheet" href="styles.css?v=3">
    </head>
    <body>
        <?php 
        include 'header.php'; 
        include 'tarjetero.php'; 
        $json_galeria = 'data/skullgirls.json';
        ?>
        <main>
            <div class="box-card">
                <h2>Bienvenido a la sección de Skullgirls!</h2>
                <p>Explora el TOP 5 de variantes favoritas de Skullgirls Mobile.</p>         
            </div>
            <?php include 'carousel.php'; ?>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>