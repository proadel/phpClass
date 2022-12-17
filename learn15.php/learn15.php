<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn15.php | Arrays.php</title>
</head>
<body>
    <?php
    /* learn15.php | Arrays.php and explode() Function
    //=========================================================
     // An array stores multiple values in one single variable:
      Example:
      <?php
      $car1 = "KIA";
      $car2 = "Volvo";
      $car3 = "NISSAN";
      echo "i like " , $car1 + $car2 + $car3 ..... etc 
      ?>
      //------------------------------------------------>>>>>>>
      // look here ...
      <?php
      $cars = array("Volvo", "BMW", "Toyota");
      echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
      ?>
    //==================================================
    // In PHP, the array() function is used to create 
       an array:   array();
        In PHP, there are three types of arrays:
       - Indexed arrays - Arrays with a numeric index
       - Associative arrays - Arrays with named keys
       - Multidimensional arrays - Arrays containing 
         one or more arrays 
    //==================================================
       Get The Length of an Array - The count() Function
       The count() function is used to return the length 
       (the number of elements) of an array:

       Example
       <?php
       $cars = array("Volvo", "BMW", "Toyota");
       echo count($cars);
       */
     //=================================================
     // https://www.w3schools.com/php/php_arrays.asp
     //=================================================
     // Example of arrays
     /*
     echo "<h2>Example1 of Arrays</h2>";
     $names1 = array('Adel','Mohammed','Dawood','Mohammed','Salman','Ziad');
     echo ($names1[3]),'<br>';
     echo "==================================== <br>";
     echo "<h2>Example2 of Arrays</h2>";
     $names2 = array('name'=>'Adel','age'=>'43');
     echo ($names2['name']);
     */
     //=================================================
     // Example to explode string to arrayes
     // The explode() function breaks a string into an array.
     // Note: The "separator" parameter cannot be an empty string.
     // Note: This function is binary-safe.
     echo "<h1>Example of Explode to Arrays</h1><hr><br>"; 
     $info = "address of learning PHP 2022";
     $x = explode(" ", $info);
     print_r($x);
     echo "<br>";
     echo " OR like This :::: <br><hr>";
     echo "<pre>";
     print_r($x);
     echo "</pre>";
     //----------------------------------------------------
     /*The explode() function breaks a string into an array.
     Note: The "separator" parameter cannot be an empty string.
     Note: This function is binary-safe.

       Syntax
                 explode(separator,string,limit)
     */
     //=========================================================
     // https://www.php.net/manual/en/function.explode.php
     //=========================================================
    ?>
</body>
</html>