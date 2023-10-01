<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tarea nº 4</h2>
    <h3>Ejercicio 1</h3>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        print  $i . "\n";
    }
    ?>
    <h3>Ejercicio 2</h3>
    <?php
    for ($i = 100; $i >= 1; $i--) {
        print  $i . "\n";
    }
    ?>
    <h3>Ejercicio 3</h3>
    <?php
    for ($i = 2; $i <= 100; $i += 2) {
        print  $i . "\n";
    }
    ?>
    <h3>Ejercicio 4</h3>
    <?php
    for ($i = 1; $i <= 100; $i += 2) {
        print  $i . "\n";
    }
    ?>
    <h3>Ejercicio 5</h3>
    <?php
    $suma = 0;
    for ($i = 1; $i <= 20; $i++) {
        $suma = $suma + $i;
    }
    print $suma;
    ?>
    <h3>Ejercicio 6</h3>
    <?php
    $suma2 = 0;
    for ($i = 2; $i <= 20; $i += 2) {
        $suma2 = $suma2 + $i;
    }
    print $suma2;
    ?>
</body>

</html>