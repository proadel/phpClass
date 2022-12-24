<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn25.php | Functions-PHP</title>
</head>
<body>
    <h1>learn25.php | Function (php)</h1>
    <hr>
    <br><br>
    <!--
        learn25.php | Function (php)
        ---------------------------------------------------------
        - To save when writing code 
        - usually use the function to avoid writing the same code 
          multiple times. 
        - We just call the function that contains all the codes 
          for this function.
          =====> function nameyour-function (){
            your codes
          }
          then call the function any where you need it .........
    -->
    <?php
    // Example 1 :
    //--------------------------------------------- 
    function hello(){
        echo "GOOD!! welcome to learn25.php class"."<br>";
    }
    //---------------------------------
    // here you can call your Functions
    hello();
    //=============================================
    // Example 2 : add new function ...
    //---------------------------------
    function calCul(){
        $x = 3.14;
        $y = 9.8;
        $res = $x + $y;
        echo "The Result is: ".$res;
    }
    calCul ();
    //==============================================
    ?>
    
</body>
</html>