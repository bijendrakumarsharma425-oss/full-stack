<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--code for table-->
    <form method="get">
        <label>Enter Number</label>
        <input type="Number" name="num" value=""/>
        <input type="submit" name="submit" value="click button"/>
     </form>

        <?php
        if(isset($_GET['submit'])){
            $num = $_GET['num'];
    
             echo "Table:<br><br>";

            for($i = 1; $i <= 10; $i++){
            
                echo " $num X $i = " . ($num * $i) . "<br><br>";
            }
        }
        ?>
</body>
</html>