<?php

$bgcolor = $_POST['bgcolor'] ?? '';

if ($bgcolor) {
    setcookie('bgcolor', $bgcolor, time() + (60*60*24*7));
}

$bgcolor = empty($bgcolor) ? 'gray' : $bgcolor;
?>

<body bgcolor="<?= $bgcolor ?>">

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <select name="bgcolor">
        <option value="violet">Violet</option>
        <option value="indigo">Indigo</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="yellow">Yellow</option>
        <option value="orange">Orange</option>
        <option value="red">Red</option>
    </select>
    <input type="submit"/>
</form>

</body>


