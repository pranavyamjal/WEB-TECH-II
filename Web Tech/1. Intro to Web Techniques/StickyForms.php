<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature conversion program</title>
</head>

<body>

    <?php
    $fahr = $_GET['Fahrenheit'];
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Fahrenheit Temperature: <input type="text" name="Fahrenheit" value="<?php echo $fahr; ?>" />
        <br />
        <input type="submit" name="Conversion" /><br />
    </form>

    <?php
    if (!is_null($fahr)) {
        $celsius = ($fahr - 32) * 5 / 9;
        printf("%2.f is %2.f", $fahr, $celsius);
    }
    ?>
</body>

</html>