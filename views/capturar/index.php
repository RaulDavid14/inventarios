<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/inventarios/home/" method="post">
        <?php Field::input('Nombre', 'text', 'nombre', '', $required=true); ?>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>