<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn26.php | PHP Function (Parameters)</title>
</head>
<body>
    <h1>learn26.php | Function (Parameters) </h1><hr><br><br>
    <!-- 
        learn26.php | PHP Function Parameters
        ----------------------------------------------------------------
        = function function_name(parameter_list)
        = When a function has multiple parameters, you need to separate 
          them using a comma (,).
        ----------------------------------------------------------------
           The examples defines the concat() function that concatenates 
           two strings into one: see page 
           https://www.phptutorial.net/php-tutorial/php-function-parameters/
        ----------------------------------------------------------------
        - PHP Parameterized functions are the functions with parameters. 
        - You can pass any number of parameters inside a function.
        - These passed parameters act as variables inside your function. 
        - They are specified inside the parentheses, after the function name.
        - you’ll learn about the function parameters and pass arguments by 
          value and reference.
    -->
    <?php 
    // Example 1 :
    //----------------------------------------------
    echo "Example 1 : Create Function <br><hr>"; 
    //----------------------------------------------
    function infoWelc (){
        echo "<h3>WELCOME TO LEARN PHP 2022</h3>";
    }
    infoWelc();
    //----------------------------------------------
    // Example 2 :
    //----------------------------------------------
    echo "Example 2 : Create Parameters into yorFunction <br><hr>"; 
    //----------------------------------------------
    function info ($namee , $agee){
        echo "Your Name is: ".$namee."<br>";
        echo "Your Age is: ".$agee;
    }
    info("studentName", 43);
    //=============================================================
    /* In this example, I show you the feature of passing 
       data through parameters in PHP....................
    */
    //=============================================================
    ?>
    
</body>
</html>