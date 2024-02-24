<?php
session_start();

if (!isset($_SESSION['cnt'])) 
{
    $_SESSION['cnt'] = 1;
}
else 
{
    $_SESSION['cnt']++;
}

?>

<p>Hello visitor, you have seen this page <?php echo $_SESSION['cnt']; ?> times.</p>
<p>To continue, <a href="next.php <?php echo htmlspecialchars(SID); ?>">Click here</a></p>

