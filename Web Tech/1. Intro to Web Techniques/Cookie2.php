<?php
// Cookie is set, we may read the cookie by accessing cookie2(1).php for up to 24 hours. After that it will expire.

$username = isset($_POST['Username']) ? $_POST['Username'] : '';
$fcolor = isset($_POST['fcolor']) ? $_POST['fcolor'] : '';
$self = $_SERVER['PHP_SELF'];

if ($username !== '' && $fcolor !== '') {
    setcookie("firstname", $username, time() + 86400); // 24 hours
    setcookie("fontcolor", $fcolor, time() + 86400);
    exit();
}
?>

<html>
<head>
    <title>Setting color and username</title>
</head>
<body>
    <h1>Setting username and font color using cookies</h1>
    <hr>
    <form action="<?php echo $self ?>" method="post">
        Please Enter Your First Name: <input type="text" name="Username" value="<?= $username ?>">
        <br><br>
        Please Choose your favorite font color: <br>
        <input type="radio" name="fcolor" value="red" <?= ($fcolor === 'red') ? 'checked' : '' ?>>red
        <input type="radio" name="fcolor" value="green" <?= ($fcolor === 'green') ? 'checked' : '' ?>>green
        <input type="radio" name="fcolor" value="blue" <?= ($fcolor === 'blue') ? 'checked' : '' ?>>blue
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
