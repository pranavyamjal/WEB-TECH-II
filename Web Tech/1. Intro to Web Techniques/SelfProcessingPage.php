<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature conversion Program</title>
</head>
<body>
    
    <?php
            if($_SERVER['REQUEST_METHOD']=='GET')
            {
    ?>
            <form action ="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Fahrenheit temperature: <input type = "text" name = "Fahrenheit"/><br/>
            <input type = "submit" name = "Conversion"/><br/>
            </form>
    
    <?php
            }

        elseif ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $fahr = $_POST['Fahrenheit'];
            $celsius = ($fahr - 32)*5/9;
            printf("%2.f is %.2f", $fahr, $celsius);
        }
        else
        {
            die("The script only works with GET and POST requests!!");
        }
    ?>

</body>
</html>