<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Football Store - Camisetas</title>
    <style>
        body { font-family: sans-serif; background: #f0f0f0; padding: 20px; }
        .tienda { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .card { background: white; border: 1px solid #ddd; padding: 15px; width: 200px; text-align: center; border-radius: 8px; }
        .precio { color: green; font-weight: bold; }
        .btn { background: #000; color: #fff; padding: 10px; text-decoration: none; display: block; margin-top: 10px; }
    </style>
</head>
<body>

    <h1 style="text-align:center;">Nuestras Camisetas</h1>

    <div class="tienda">
        <?php
        // Aquí el PHP genera el contenido dinámicamente
        $camisetas = [
            ["nombre" => "Argentina", "precio" => 90],
            ["nombre" => "España", "precio" => 85],
            ["nombre" => "Brasil", "precio" => 88]
        ];

        foreach ($camisetas as $c) {
            echo "<div class='card'>";
            echo "<h3>" . $c['nombre'] . "</h3>";
            echo "<p class='precio'>$" . $c['precio'] . "</p>";
            echo "<a href='#' class='btn'>Comprar</a>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
