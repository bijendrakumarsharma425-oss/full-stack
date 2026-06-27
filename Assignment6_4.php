<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--code for Prime number-->
    <form method="get">
        <label>Enter Number</label>
        <input type="number" name="num" value=""/>
        <input type="submit" name="submit" value="Click button" />

</form>

<?php
if(isset($_GET['submit'])){ 
    $num = $_GET['num'];
     
    if($num % 2 ==0){
        echo " $num:number is prime";
    }
    else{
        echo "$num:number is not prime";
    }
}
?>
</body>
</html>