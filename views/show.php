<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>show</title>
    </head>
    <body>
        <h1>Detalle de Un Producto</h1>
        <ul>
        <?php
            print "<li>ID:" . $product[0] .
             "</li><li>descripcion: " .$product[1] . "</li>";
        ?>
        </ul>
    </body>
    </html>