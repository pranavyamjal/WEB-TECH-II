<?php
$xml = simplexml_load_file('3.xml') or die("Cannot Load");

echo "<table border='1'>";
echo "<tr>
        <th>Ino</th>
        <th>Iname</th>
        <th>Idesc</th>
        <th>Price</th>
     </tr>";

foreach ($xml->Item as $a) 
{
    echo"<tr>
            <td>" . $a->Ino ."</td>
            <td>" . $a->Iname ."</td>
            <td>" . $a->Idesc ."</td>
            <td>" . $a->Price . "</td>
        </tr>";
}

echo "</table>";
