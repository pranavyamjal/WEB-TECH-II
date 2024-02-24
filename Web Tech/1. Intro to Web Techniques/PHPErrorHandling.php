<?php

/* Error handling can be done using
=>> 1. Using die() method
=>> 2. Custom Error Handling

1. die() :-  The die() function print a message and exit from current code.
2. Custom Error Handling :- One can create their own error handling routine. 
   Create function that can be called when an error occurs in code.
*/

/*if(!file_exists("abc.txt"))
{
    die("file not found");
}
else
{
    $file = fopen("abc.txt", "w");
}

?>

*/


 
// Custom error declaration
function divbyZero_error($error_no, $error_msg)
{
    echo "Error: [$error_no] $error_msg";
    // on error script will stop
    die();
}

// Setting set_error_handler
set_error_handler("divbyZero_error");
$a = 10;
$b = 0;

// This will generate error
echo($a/$b);
?>
