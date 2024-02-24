<?php
session_start();
($_SESSION['count']) ? $_SESSION['count']++ : $_SESSION['count'] = 1;
?>

<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <h1>Session (Page 2)</h1>
        <hr>
        <h3>PHPSESSID=<?php echo session_id();?></h3>
        <hr>
        <h2>You have been here <?php echo($_SESSION['count']);?> Times in this session.</h2>
        <a href="next1.php<?php echo SID; ?>">Previous Page</a>
    </body>
</html>

