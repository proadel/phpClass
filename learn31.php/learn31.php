<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn31.php | $this Keyword OOP </title>
</head>
<body>
    <h1>learn31.php | The $this Keyword</h1>
    <hr>
    <br><br>
    <?php
    //---------------------------------------------------
    // learn31.php | The $this Keyword
    //---------------------------------------------------
    //
    // Example 
    class info{
        public $learn = "Welcome To OOP-PHP-THIS CLASS2022/DEC25";
        function DaTe(){
            echo $this -> learn."----> FROM inside class";
            echo "Happy NEW YEAR 2023 :: Thanks To MF. and others ++iphoneX"; 
        } 
    }
    $printo = new info();
    //to print class - use echo
    echo $printo -> learn." -----> From outside class";
    echo "<br>";
    //to print var - function use the var directly 
    $printo -> DaTe();
    
    //==========================================================
    /* $this refers to the current object. 
       $this is a pseudo-variable (also a reserved keyword) which 
         is only available inside methods. And, it refers to the 
         object of the current method.
         -----------------------
         PHP - The $this Keyword : So, where can we change the 
         value of the $name property? There are two ways:

          1. Inside the class 
          (by adding a set_name() method and use $this)
          
          2. Outside the class 
          (by directly changing the property value):

    */
    //==========================================================
    ?>
</body>
</html>