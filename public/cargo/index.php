<?php 
    require '../../vendor/autoload.php';

    $cargoController = new \Controllers\CargoController;

    $resultado = $cargoController->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cargos</h1>
    <hr>
    <?php echo $resultado; ?>
</body>
</html>