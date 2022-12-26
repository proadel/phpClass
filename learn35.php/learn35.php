<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn35.php | STATIC </title>
</head>
<body>
    <h1>learn35.php | STATIC public var OOP </h1>
    <!-- 

    -->
    <?php
    //
    // 1. public static var 
    //--------------------------------------------------------------------
    class students{
        const names = "const: WELCOME TO STATIC OOP - PHP 2022 CLASS";
        public $name1 = "public: Adel"; 
        public static $info = "public Static : learn OOP in PHP";
    }
    $x = new students();
    echo $x ->name1;
    echo "<br>";
    // echo students::info; Fatal error: Uncaught Error: Undefined constant students::info
    echo students::$info; // we add $ before the var name. to complete our job..
    


    ?>
    
</body>
</html>