<?php 
// Registering the session variable
session_start();

if(!isset($_SESSION['cnt']))
{
    $_SESSION['cnt'] = 0;
}
else
{
    $_SESSION['cnt']++;
}
?>

<?php
// Unregister a session variable
session_start();
unset($_SESSION['cnt']);
?>
