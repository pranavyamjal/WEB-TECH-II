<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Check if the form fields are set
    if (isset($_POST['submit'])) 
    {
        $age = $_POST['age'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['add'];
        $s = $_POST['a'];
        $sal = $_POST['sal'];

        // Check if any of the required fields are empty
        if ($age == "" or $fname == "" or $lname == "" or $add == "" or $s == "" or $sal == "") 
        {
            echo "All fields are compulsory!";
        } 
        else 
        {
            // Display the submitted data
            echo "First Name: " . $fname . "<br>";
            echo "Last Name: " . $lname . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Address: " . $add . "<br>";
            echo "Salary: " . $sal . "<br>";
            echo "Sex: " . $s . "<br>";
        }
    } 
    else 
    {
        echo "Invalid form submission.";
    }
} 
else 
{
    echo "Invalid request.";
}

?>
