<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn32.php | </title>
</head>
<body>
    <h1>learn32.php | The __construct Function </h1>
    <hr>
    <br><br>
    <?php
    //-------------------------------------------------------------------------
    /* PHP - The __construct Function
       ------------------------------------------------------------------------
       A constructor allows you to initialize an object's properties upon 
          creation of the object.
       
       If you create a __construct() function, PHP will automatically call 
          this function when you create an object from a class.

        - Notice that the construct function starts with two underscores (__)!

         # We see in the example below, that using a constructor saves us from 
           calling the set_name() method which reduces the amount of code
       ------------------------------------------------------------------------   
    */
    //-------------------------------------------------
    echo "Example : The __construct Function <hr><br>";
    class info{
        #function name(){
        function __construct(){
            echo "Student1";
        }
    }
    $p = new info();
    #$p -> name();
    //================================================
    //================================================
    ?>

    
</body>
</html>