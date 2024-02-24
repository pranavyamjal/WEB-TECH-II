<?php
session_start();
?>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <hr>
        <h3>PHPSESSID = <?php echo session_id();?></h3>
        <hr>

        <h2>Click the page and see the number of visits during this visit.</h2>

        <a href="next2.php<?php echo SID; ?>">Next Page</a>
        
    </body>
</html>
