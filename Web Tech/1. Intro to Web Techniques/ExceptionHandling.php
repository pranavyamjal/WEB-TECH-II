<?php
/*
    PHP 5 has an exception handling model.
    When a program contains exception handling routines then the code becomes stronger and there are less chances of abrupt termination of the code.
    Exceptions are important and provides a better control over error handling.

    Exception handling is done using following keywords:
    1. Try
    2. Throw
    3. Catch
*/

/*

try
{
    $error = 'Learning Errorhandling.' ;
    thrownewException($error);
    // Code following an exception is not executed.
    echo 'Never executed';
} 
catch (Exception $e) 
{
    echo 'Caught exception:', $e->getMessage(),"\n";
}

// Continue Execution
echo 'Exception Handling DEMO';
?>

*/


/* in $e-> getMessage Function is used to get error message. Following canbe used from Exception class.

1. getMessage()
2. getCode()
3. getFile()
4. getLine()
5. getTrace()
6. getTraceAsString()
*/



/*
    CREATING CUSTOM EXCEPTION HANDLER

<?php
function exception_handler($exception)
{
    echo "Exception handling Demo: " . $exception->getMessage() . "\n";
}

set_exception_handler('exception_handler');

throw new Exception('Exception...');

echo "Not Executed \n";
?>


*/