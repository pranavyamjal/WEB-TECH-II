<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Information</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        Select the computer language you know:<br />
        <Select multiple name="Languages[]">
            <option value="oracle">Oracle</option>
            <option value="C++">C++</option>
            <option value="mysql">Mysql</option>
            <option value="msaccess">MS-access</option>
        </Select>
        <br />

        <input type="submit" name="s" value="Record my knowledge!" />
    </form>

    <?php
    if (array_key_exists('s', $_GET)) 
    {
        $desc = join(", ", $_GET['Languages']);
        echo "You have knowledge of the following languages: $desc";
    }
    ?>
 
</body>

</html>