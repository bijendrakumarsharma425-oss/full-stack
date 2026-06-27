<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- code for cube-->
    <form method="get">
        <label>Enter Number</label>
        <input type="number" name="num" value="" placeholder="Enter Number" />
        <input type="submit" name="submit" value="click button" />
     </form>
        <?php
        if(isset($_GET['submit'])){

        $num = $_GET['num'];

        $cube = $num * $num * $num;
        
        echo " Cube: $cube";

        }
        ?>
</body>
</html>