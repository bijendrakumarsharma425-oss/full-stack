<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- code for Factorial-->
    <form method="get">
        <label>Enter Number</label>
        <input type="number" name="num" value=""/>
        <input type="submit" name="submit" value="click button"/>
</form>

<?php
if(isset($_GET['submit'])){
    $num = $_GET['num'];
    $fact = 1;

    for($i=1; $i <= $num; $i++){
        $fact *= $i;
    }
    echo "Factorial: $fact <br>";

}
?>

</body>
</html>