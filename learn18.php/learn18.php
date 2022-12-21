<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn18.php | rm- mk directory(Function)</title>
</head>
<body>
  
<?php
// The mkdir() function creates a directory specified by a pathname.
// Syntax mkdir(path, mode, recursive, context)
/* Parameter	Description
   path	        Required. Specifies the directory path to create
   mode	        Optional. Specifies permissions. By default, the mode 
                is 0777 (widest possible access).
                 Note: The mode parameters 
                 is ignored on Windows platforms!

            The mode parameter consists of four numbers:

                - The first number is always zero
                - The second number specifies permissions for the owner
                - The third number specifies permissions for the owner's 
                  user group
                - The fourth number specifies permissions for everybody else

                 Possible values (to set multiple permissions, 
                 add up the following numbers):

                 1 = execute permissions
                 2 = write permissions
                 4 = read permissions

recursive	   Optional. Specifies if the recursive mode 
                is set (added in PHP 5)
context	       Optional. Specifies the context of the 
                file handle. Context is a set of options 
                that can modify the behavior of a stream 
                (added in PHP 5).
//=============================================================
//=============================================================
*/
//---------------------------------------
// example 1
echo "Welcome to learn18.php | rm- mkdir Function in PHP", "<hr><br>";
echo "Example 1 :: Create a directory named Tools | mkdir('tools');","<br>";
#mkdir('tools');
echo "Example 2 :: Create a new directory inside directory named Tools | mkdir ('tools/setup');","<br>";
#mkdir ('tools/setup');
echo "Example 3 :: remove a directory named Tools","<br>";
#rmdir ('tools');
echo "Example 4 :: remove a directory named setup inside tools directory","<br>";
#rmdir ('tools/setup');
echo "<hr>";
//---------------------------------------
//=============================================================
//=============================================================
?>
    
</body>
</html>