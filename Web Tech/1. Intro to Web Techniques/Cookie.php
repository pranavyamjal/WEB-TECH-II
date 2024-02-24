<?php
//Set the Cookies

SETCOOKIE("cookie[three]", "three");

SETCOOKIE("cookie[two]", "two");

SETCOOKIE("cookie[one]", "one");

//After the Page reloads, print them out

if(isset($_COOKIE['cookie']))
{
    foreach($_COOKIE['cookie'] as $name => $value)
    {
        echo "$name : $value<br/>\n";
    }
}

?>