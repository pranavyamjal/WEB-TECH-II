<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substrings of the string</title>
</head>
<body>
    
        <?php
                $string = $_POST['string'];
                $length = $_POST['length'];
                $substring = ceil(strlen($string)/$length);

                echo "The $length - letter substrings of $string are :<br/>\n";
                for ($i = 0; $i < $substring; $i++)
                {
                    $split = substr($string, $i * 3, 3);
                    printf("%d: %s <br/>\n", $i + 1, $split);
                }
        ?>

</body>
</html>