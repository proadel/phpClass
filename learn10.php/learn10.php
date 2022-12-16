<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn10.php</title>
</head>
<body>
    <?php
    echo "<h1> Welcome To Learn10 PHP | Maths.+= var_export(PHP) </h1> <hr> ";
    //=============================================================
    //
    $num1 = 4;
    $num2 = 16;
    $num3 = 2;
    //----------------------------------------------------------
    echo $num1+$num3;
    echo "<h3>Total of num2+num1/num1:</h3>", $num2+$num1/$num1;
    //----------------------------------------------------------
    echo $num3-$num1, "<br>";
    //----------------------------------------------------------
    echo $num2 ** $num1;
    //----------------------------------------------------------
    echo "Start of example2 : <br>";
    // + - / * % ** 
    $num = 2;
    $num += 1024;
    $num -= 3.14;
    //$num /= 9.8;
    //$num *= 100;
    //$num **= 120;
    //$num -= 140;
    
    echo $num, "<br>";
    //----------------------------------------------------------
    echo "Start of Exampl3 : <br>";
    // > < != ==  | logical operators 
    // true = 1 ;
    // false = nothing to display on web browser ;
    // useing of | var_export()
    $x = 9;
    $y = 8;
    $result = $y == $x;
    $result2 = $y != $x;

    echo $result, "<br>";
    echo $result2, "<br>";
    //=================================
    // to disply the boolean values use 
    // var_export()
    echo var_export($result), "<br>";
    echo var_export($result2);
    //---------------------------------
    //----------------------------------------------------------
    ?>

   <!--  
<script>
    alert("Welcome to Learn10 PHP course | Maths.+= var_export(PHP) 2022");
</script>
     -->
</body>
</html>