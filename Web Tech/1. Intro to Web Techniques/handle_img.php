<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["my_image"]) && $_FILES["my_image"]["error"] == 0) 
    {
        $targetDir = "Uploads"; // Directory where you want to save the uploaded files
        $targetFile = $targetDir . basename($_FILES["my_image"]["name"]);

        // Check if the file already exists
        if (file_exists($targetFile)) 
        {
            echo "Sorry, the file already exists.";
        } 
        else 
        {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["my_image"]["tmp_name"], $targetFile)) 
            {
                echo "The file " . basename($_FILES["my_image"]["name"]) . " has been uploaded.";
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } 
    
    else 
    {
        echo "Error: " . $_FILES["my_image"]["error"];
    }
} 
else 
{
    echo "Invalid request.";
}

?>
