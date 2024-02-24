<?php
if (isset($_COOKIE['firstname'])) {
    $user = $_COOKIE['firstname'];
    $color = $_COOKIE['fontcolor'];
} else {
    $user = isset($_POST['Username']) ? $_POST['Username'] : '';
    $color = isset($_POST['fcolor']) ? $_POST['fcolor'] : '';
}
?>

<html>
<head>
    <title>Setting username and font color using cookies</title>
</head>
<body>
    <h1>Cookie Stuff</h1>
    <hr>

    <h2>Hello: <?php echo $user; ?></h2>
    <h2>Your color: <?php echo $color; ?></h2>
    <hr>
    <br/>

    <?php
    echo("<br/>");
    echo("<pre>");
    echo("Cookie Info:\n");
    print_r($_COOKIE);
    echo("</pre>");
    ?>
</body>
</html>
