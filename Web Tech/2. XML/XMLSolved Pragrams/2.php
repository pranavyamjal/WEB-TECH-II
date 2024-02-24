<?php
if (! $xml = simplexml_load_file("2.xml")) 
{
    echo "Unable to load file";
} 
else 
{
    //echo $xml->getName() . ",<br/>";   Prints book
    echo "<table border='1'>
    <tr>
        <th>BOOKCODE</th>
        <th>BOOKNAME</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Price</th>
    </tr>";
foreach($xml -> children() as $child)
{
echo "<tr>";
//echo $child->getName() . ":" .$child . "<br/>"; Prints book

foreach($child->children() as $innerchild)
{
    echo "<td>".$innerchild."</td>";

}
echo "</tr>";
}
echo "</table>";
}

?>