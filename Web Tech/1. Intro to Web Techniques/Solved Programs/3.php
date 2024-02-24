<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    
    <?php
            $rno = $_COOKIE['rno'];
            $name = $_COOKIE['name'];
            $sub1 = $_POST['t1'];
            $sub2 = $_POST['t2'];
            $sub3 = $_POST['t3'];

            $total = $sub1 + $sub2 + $sub3;
            $average = $total/3;

            echo "Student Details <br>";
            echo "Roll No : $rno<br>";
            echo "Name : $name<br>";
            echo "Marks of Subject1 : $sub1<br>";
            echo "Marks of Subject2 : $sub2<br>";
            echo "Marks of Subject3 : $sub3<br>";

            echo "Total : $total<br>";
            echo "Average : $average<br>";

?>

</body>
</html>