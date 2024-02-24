<?php

    echo get_magic_quotes_gpc();

    echo $_POST['lastname'];
    echo addslashes($_POST['lastname']);

    if (!get_magic_quotes_gpc())  // no longer used default function
    {
        $lastname = addslashes($_POST['lastname']);
    }
    else
    {
        $lastname = $_POST['lastname'];  
    }
    echo $lastname;
?>

//output:-  O\ 'My Dear'