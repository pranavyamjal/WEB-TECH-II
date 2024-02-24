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
        <select multiple name="Languages[]">
            <option value="oracle" <?php if ($_GET['Languages'] && in_array('oracle', $_GET['Languages'])) echo 'selected'; ?>>Oracle</option>
            <option value="C++" <?php if ($_GET['Languages'] && in_array('C++', $_GET['Languages'])) echo 'selected'; ?>>C++</option>
            <option value="mysql" <?php if ($_GET['Languages'] && in_array('mysql', $_GET['Languages'])) echo 'selected'; ?>>Mysql</option>
            <option value="msaccess" <?php if ($_GET['Languages'] && in_array('msaccess', $_GET['Languages'])) echo 'selected'; ?>>MS-access</option>
        </select>
        <br />

        <input type="submit" name="s" value="Record my knowledge!" />
    </form>

    <?php
    if (array_key_exists('s', $_GET) && isset($_GET['Languages'])) {
        $desc = join(", ", $_GET['Languages']);
        echo "You have knowledge of the following languages: $desc";
    }
    ?>

</body>

</html>
