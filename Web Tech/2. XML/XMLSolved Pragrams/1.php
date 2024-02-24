<?php
// Load the XML file
$xmlFile = '1.xml';
$xml = simplexml_load_file($xmlFile);

// Check if the XML was loaded successfully
if ($xml === false) {
    die('Error loading XML file');
}

// Print employee details in tabular format
echo '<table border="1">
        <tr>
            <th>Employee Number</th>
            <th>Employee Name</th>
            <th>Salary</th>
            <th>Designation</th>
        </tr>';

foreach ($xml as $employee) {
    echo '<tr>';
    echo '<td>', $employee->emp_no, '</td>';
    echo '<td>', $employee->emp_name, '</td>';
    echo '<td>', $employee->salary, '</td>';
    echo '<td>', $employee->designation, '</td>';
    echo '</tr>';
}

echo '</table>';
?>
