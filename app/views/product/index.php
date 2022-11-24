<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexProductos</title>
</head>
<body>
    <h1>Lista de usuarios</h1>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Fecha compra</th>
            <th></th>
        </tr>
        <?php foreach ($products as $key => $product) { ?>
            <tr>
                <td><?php echo $product->id ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->fecha_compra ?></td>
                <td>
                    <a href="/product/show/<?php echo $product->id ?>" 
                    class="btn btn-primary">ver</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>