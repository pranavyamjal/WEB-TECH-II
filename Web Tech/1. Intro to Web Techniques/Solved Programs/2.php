<html>
    <body>
        <?php
        $rno = $_POST['t1'];
        $name = $_POST['t2'];
        setcookie('rno', $rno);
        setcookie('name',$name);
        echo "cookies are set";
        ?>

        <form action="3.php" method="post">
            Enter Subject1 Marks<input type="text" name="t1">
            Enter Subject2 Marks<input type="text" name="t2">
            Enter Subject3 Marks<input type="text" name="t3">

        <input type="submit" value="send">
        </form>

    </body>
</html>