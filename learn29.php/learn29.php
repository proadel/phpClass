<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn29.php | Inheritance in PHP (OOP) </title>
</head>
<body>
    <h1>learn29.php | Inheritance in PHP (OOP)</h1>
    <hr>
    <br><br>
<?php 
 /* learn29.php | Inheritance in PHP (OOP)
    ---------------------------------------
    What is Inheritance? in OOP = When a class derives from 
    another class.
    
    The child class will inherit all the public and protected 
    properties and methods from the parent class. In addition, 
    it can have its own properties and methods.

    An inherited class is defined by using the extends keyword.
    ------------------------------------------------------
    see more:
     https://www.w3schools.com/php/php_oop_inheritance.asp
     -----------------------------------------------------
    Let's look at an example:
 */ //====================================================================
//------------------------------------------------------------------------
    // Example 1 : Father And Son | Inheritance in PHP 
    //--------------------------------------------------------------------
    echo "Example 1- Inheritance in PHP <hr>"; 
    class father {
        function f_mony(){
            echo " + 1,000,000$";
        }
    }
    class son extends father{
        function s_mony(){
            echo "200$";
        }
    }
    class friend{
        function f_mony(){
            echo "3500$";
        }
    }

    $fa = new father();
    echo "Father Mony =";
    $fa -> f_mony();
    echo "<br>";
    $sn = new son();
    echo "Son Mony =";
    $sn -> s_mony();
    $sn -> f_mony();
    echo "<br>";
    $fr = new friend();
    echo "Friend Mony = ";
    $fr -> f_mony();
//=======================================================
//=======================================================
?>
    
</body>
</html>