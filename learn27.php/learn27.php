<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn27.php | return Keyword</title>
</head>
<body>
    <h1>learn27.php | return Keyword</h1><hr><br>
    <!-- 
        ------------------------------------------------------------
        learn27.php | return function
        ------------------------------------------------------------
      The return keyword ends a function and, optionally, uses the 
      result of an expression as the return value of the function. 
      If return is used outside of a function, it stops PHP code in 
      the file from running.

      If the file was included using include, include_once, require 
      or require_once, the result of the expression is used as the 
      return value of the include statements.
      --------------------------------------------------------------
    -->
    <?php
    //==============================================================
    // Example 1 : Return a value from a function
    //--------------------------------------------------------------
    echo "<h4>Example 1 : Return with Function</h4><br>";
    function add1($x) {
        return $x + 1;
    }
        echo "5 + 1 is " . add1(5)."<hr><br>";
        //============================================================
    // Example 2 : print before the return but not the codes after it.
    //----------------------------------------------------------------
    function abc(){
        echo "lets","<br>";
        echo "learn","<br>";
        return; // if the condition is true as example then STOP.
        echo "PHP","<br>";
    }
    abc();

    //=============================================================
    //=============================================================
    ?>
    
</body>
</html>