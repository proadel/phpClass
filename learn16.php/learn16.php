<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn16.php | File Creation</title>
</head>
<body>

  <?php
   // learn16.php | File Creation 
   // file_put_contents — Write data to a file
   //  file_put_contents("","",FILE_APPEND);
   //  file_put_contents("","",LOCK_EX);
   //-----------------------------------------------------------------------------------
  echo "<h1>Welcome To learn16.php | File Creation</h1> <hr><br>";
  file_put_contents("learn16.txt","Welcome To learn.16 class Of File Creation in PHP\n");
  file_put_contents("learn16.txt","learn sql in PHP\n", FILE_APPEND);
  file_put_contents("learn16.txt","learn JS in PHP\n", FILE_APPEND);
  file_put_contents("learn16.txt","learn python in PHP2022", LOCK_EX);
   /*
   The file_put_contents() function in PHP is an inbuilt function 
   which is used to write a string to a file. 
   The file_put_contents() function checks for the file in which 
   the user wants to write and if the file doesn't exist, it creates 
   a new file.
   //--------------------------------------------------------------------
   Flag	                    Description
   //--------------------------------------------------------------------
   FILE_USE_INCLUDE_PATH	Search for filename in the include directory. 
                             See include_path for more information.
   FILE_APPEND	            If file filename already exists, append the 
                             data to the file instead of overwriting it.
   LOCK_EX                	Acquire an exclusive lock on the file while 
                             proceeding to the writing. In other words, 
                             a flock() call happens between the fopen() 
                             call and the fwrite() call. This is not 
                             identical to an fopen() call with mode "x".
   */
   //====================================================================
   //====================================================================
  ?>  
</body>
</html>