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
    echo "Example 1 - create an OOP class & object <hr><br>";
    class name{
        public $color = 'red';
    }
    //--------------------------------------------------------------
    // here object create : the new is a cardinal sign for object . 
    //=====================-----------------------------------------------
    $p = new name();
    echo $p -> color."<br><br>"; // var after -> without $ | -> = go to.
    //--------------------------------------------------------------------
    // Example 2 : function | class and object creation 
    //------------------------
    echo "Example 2 - create an OOP class & object <hr>"; 
    class name2{
        function welcome(){
            echo "<h4>welcome to PHP - OOP learning Class</h4>";
        }
        function namee(){
            echo "Student Name";
        }
        function agee(){
            echo 43;
        }
    }
    $printo = new name2();
    $printo -> welcome();
    echo "<br>";
    $printo -> namee();
    echo "<br>";
    $printo -> agee();
    //--------------------------------------------------------------------
    // Example 3 : Father And Son | Inheritance in PHP 
    //--------------------------------------------------------------------
    /*
    echo "Example 3 - Inheritance in PHP <hr>"; 
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
    */
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