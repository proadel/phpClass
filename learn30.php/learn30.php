<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn30.php | Visibility varTypes (php)</title>
</head>
<body>
    <h1>learn30.php | Var Visibility (php).class</h1>
    <hr>
    <br><br>

<?php
//---------------------------------------------------
// learn30.php | Var Types in OOP class : see below
//---------------------------------------------------
// Example 1 ========================================
//---------------------------------------------------
echo "Example 1 : Var Types in OOP.php : <br><br>";
class info{
    public $name1 = "1. public var Type : Student1";
    private $name2 = "2. private var Type : Second Name";
    protected $name3 = "3. protected var Type : Family Name";

}
$p = new info();
echo $p -> name1;
echo $p -> name2;
// Fatal error: Uncaught Error: 
// Cannot access private property info::$name2
echo $p -> name3;
// Fatal error: Uncaught Error: 
// Cannot access protected property info::$name3
//-------------------------------------------------------------------
/* When and why should I use public, private, and protected functions 
   and variables inside a class? What is the difference between them?
   ------------------------------------------------------------------
   Visibility -------------------------------------------------------
   ------------------------------------------------------------------
   The visibility of a property, a method or (as of PHP 7.1.0) a 
   constant can be defined by prefixing the declaration with the 
   keywords public, protected or private. Class members declared 
   public can be accessed everywhere. Members declared protected 
   can be accessed only within the class itself and by inheriting 
   and parent classes. Members declared as private may only be 
   accessed by the class that defines the member.
   ==================================================================
   Property Visibility ----------------------------------------------
   ==================================================================
   Class properties may be defined as public, private, or protected. 
   Properties declared without any explicit visibility keyword are 
   defined as public.
   ------------------------------------------------------------------
   to see more :
   https://www.php.net/manual/en/language.oop5.visibility.php
   ==================================================================

*/
?>

</body>
</html>