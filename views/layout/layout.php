<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $links ?? ''; ?>
    <title><?php echo $titulo ?? ''; ?></title>
</head>
<body>
    <?php echo $navbar ?? ''; ?>
    <?php echo $body ?? ''; ?>
</body>
</html>