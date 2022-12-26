<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn33.php | </title>
</head>
<body>
    <h1>learn33.php | use parametrs in class OOP- PHP by __construct</h1>
    <hr>
    <br><br>
    <?php 
    //  learn33.php | PARAMETERS OOP
    //----------------------------------------------------------------------
    // pass parametrs in class OOP- PHP by __construct or non-construct
    //
    // Example1-------------------------------------------------------------
    echo "Example 1 | use __construct to pass data into the class <br><br>";
    class students{
        function __construct($namee , $agee){
            echo "Student Name: ".$namee."<br>"."Student Age: ".$agee;
        }
    }
    $x = new students('Student1' , 43);
    echo "<hr>";
    //======================================================================================
    // Example 2 | 
    //--------------------------------------------------------------------------------------
    echo "<br><br>Example 2 | use var non-constructable: pass data into the class <br><br>";
    class empolyee{
        function info ($nAme, $aGe){
            echo "Empolyee Name: ".$nAme."<br>"."Empolyee Age: ".$aGe;
        }
    }
    $y = new empolyee();
    #$y -> info(); // ERROR Fatal error: Uncaught ArgumentCountError: Too few arguments to 
    //-----------    function empolyee::info(), 0 passed .... etc.
    // we should enter the parameters ... to resolve it .
    $y -> info ('ADEL MD', 43);
    //--------------------------------------------------------------------------------------
    // to see more 
    // https://www.php.net/manual/en/language.oop5.basic.php
    //======================================================
    //======================================================
    ?>
</body>
</html>