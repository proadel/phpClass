<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn3.php | Variables</title>
</head>
<body>

<!--  -->
<!-- learn3.php | Variables in PHP
  ----------------------------------------------------
  Variables are "containers" for storing information.
  Remember that PHP variable names are case-sensitive!
  ----------------------------------------------------
  Creating (Declaring) PHP Variables : 
      In PHP, a variable starts with the $ sign, followed 
      by the name of the variable. A variable can have a 
      short name (like x and y) or a more descriptive name 
      (age, carname, total_volume).

       (Rules for PHP variables) ::::::::::::::::::::::::::::::::
        1.string = 'text',
        2.integer number =  2 ,
        3.float dicamil numbers = 3.14, 
        4.boolean = true =1 or false = nothing = x in web-browsers ,
        5.null = undefined variables!,

     - A variable starts with the $ sign, followed by the name
      of the variable
     - A variable name must start with a letter or the underscore
      character
     - A variable name cannot start with a number
     - A variable name can only contain alpha-numeric characters 
     and underscores (A-z, 0-9, and _ )
     - Variable names are case-sensitive 
     ($age and $AGE are two different variables)
     - Remember that PHP variable names are case-sensitive!

     ==========================================
     BASIC CODE :
     $ variable = value ;
     $_varName = value ;
     ==========================================
-->
<?php
echo 'lets learn 3 PHP 2022 | Variables <hr><br>';
//-------------------------------------------------------
$name1 = "adel";
$name2 = 'Mohammed';
$nek_name1 = "proadel";
$old = 43;
$bornYer = 1979;
$Mas = 66.5;
$you_woman = false;  // false = x = nothing on webpages
$you_man = true; // true = 1
$num1 = 4;
$num2 = 10;
//------------------------------------------
print('Welcome ::::::::::::::::::::: <br>');
print('============================= <br>');
echo $name1, $name2;
echo $old;
echo $Mas,'/kg.';
// you can use , +with/out '' ""  see below ........
// or .. or . to add codes like HTML
//--------------------------------------------------
echo $you_woman.'<br>'. $bornYer."<br>";
//--------------------------------------------------
echo $you_man, '<br>','was born :', $bornYer,'<br>';
//--------------------------------------------------
echo 'total : ', $num1 + $num2 ;
//--------------------------------------------------
echo $name2 ."<br>". $you_man;
//--------------------------------------------------
//--------------------------------------------------------
//========================================================
?> 
<!--======================================================
1.string = 'text',
2.integer number =  2 ,
3.float dicamil numbers = 3.14, 
4.boolean = true or false,
5.null = undefined variables!,
       --> 
<!--======================================================
    <script> // to test only javascript ... 
    alert('Welcome To learn3.php Variables Class 2022');
</script>
 =========================================================      
-->
</body>
</html>
