<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actorName = $_POST["actorName"];

    // Load the XML file
    $xmlFile = '4.xml';
    $xml = simplexml_load_file($xmlFile);

    // Check if the XML was loaded successfully
    if ($xml === false) {
        die('Error loading XML file');
    }

    // Print film details of the specific actor in tabular format
    echo '<table border="1">
            <tr>
                <th>Film Number</th>
                <th>Film Name</th>
                <th>Director</th>
                <th>Producer</th>
                <th>Release Year</th>
                <th>Actor</th>
                <th>Budget</th>
            </tr>';

    foreach ($xml->film as $film) {
        if ((string)$film->Actor == $actorName) {
            echo '<tr>';
            echo '<td>', $film->FilmNo, '</td>';
            echo '<td>', $film->FilmName, '</td>';
            echo '<td>', $film->Director, '</td>';
            echo '<td>', $film->Producer, '</td>';
            echo '<td>', $film->ReleaseYear, '</td>';
            echo '<td>', $film->Actor, '</td>';
            echo '<td>', $film->Budget, '</td>';
            echo '</tr>';
        }
    }

    echo '</table>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Details</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="actorName">Enter Actor Name:</label>
        <input type="text" name="actorName" id="actorName" required>
        <input type="submit" value="Get Film Details">
    </form>

</body>

</html>
