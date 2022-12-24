<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn28.php | OOP in PHP</title>
</head>
<body>
    <h1>learn28.php | OOP & php</h1><hr><br><br>
    <?php
    //--------------------------------------------------------------------
    //learn28.php | OOP with PHP
    //--------------------------------------------------------------------
    // Example 1 : class and object creation
    // class create : ++public vs. privet var. class 
    //------------------------
    echo " Example 1 - create an OOP class & object <hr><br>";
    class name{
        public $color = 'red';
    }
    //--------------------------------------------------------------
    // here object create : the new is a cardinal sign for object . 
    //=====================-----------------------------------------
    $p = new name();
    echo $p -> color; // var after -> without $ | -> = go to. 
    //--------------------------------------------------------------
    ?>
    <!--  
        // learn28.php | OOP in PHP>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
      //---------------------------------------------------------------------
    OOP stands for Object-Oriented Programming. Procedural programming is 
    about writing procedures or functions that perform operations on the 
    data, while object-oriented programming is about creating objects that 
    contain both data and functions.
    ------------------------------
    PHP OOP - Classes and Objects
    ------------------------------
    A class is a template for objects, and an object is an instance of class.
    Let's assume we have a class named Fruit. A Fruit can have properties like 
    name, color, weight, etc. We can define variables like $name, $color, and 
    $weight to hold the values of these properties.

    When the individual objects (apple, banana, etc.) are created, they inherit 
    all the properties and behaviors from the class, but each object will have 
    different values for the properties.
    --------------================================================
    Define a Class
    --------------================================================
    A class is defined by using the class keyword, followed by the 
    name of the class and a pair of curly braces ({}). All its 
    properties and methods go inside the braces.
    ===============================================================
    Note: In a class, variables are called properties and functions 
    ::::: are called methods!
    ===============================================================
    --------------=================================================
    Define Objects
    --------------=================================================
    Classes are nothing without objects! We can create multiple objects from a 
    class. Each object has all the properties and methods defined in the class, 
    but they will have different property values. Objects of a class are created 
    using the new keyword.
    -->
</body>
</html>