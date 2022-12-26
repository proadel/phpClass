<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn34.php | OOP const class PHP </title>
</head>
<body>
    <h1>learn34.php |   PHP OOP - Class Const <hr></h1>
    <!-- 
        learn34.php | PHP OOP - Class Constants
        ----------------------------------------------------------------------------
        Constants cannot be changed once it is declared. Class constants can be 
        useful if you need to define some constant data within a class.

        A class constant is declared inside a class with the const keyword. Class 
        constants are case-sensitive. However, it is recommended to name the 
        constants in all uppercase letters.

        We can access a constant from outside the class by using the class name 
        followed by the scope resolution operator (::) followed by the constant name
    -->
    <?php
    //
    //-------------------------------------------------------------------------------
    // EXAMPLE 1 --------------------------------------------------------------------
    echo "EXAMPLE 1 | const and other vars <br><br>";
    class empolyee{
        const name1 = "WELCOME TO LEARN OOP in PHP 2022";
        public $name2 = "Mohammed"; 
    }
    $p = new empolyee();
    echo "Empolyee public passing Second Name: ".$p -> name2."<hr>";
    echo $p -> name1; // ERROR - look to page learn34.php
    // echo nameof class :: name of const var
    echo empolyee::name1;
    echo "<br>The const passing".empolyee::name1."<hr>";
    //===============================================================================
    // TO SEE MORE :
    // https://www.w3schools.com/php/php_oop_constants.asp
    //===============================================================================
    ?>

</body>
</html>