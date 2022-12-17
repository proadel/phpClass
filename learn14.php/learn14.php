<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn14.php | PHP loops</title>
</head>
<body>
    <?php
    // learn14.php | loop
    //=============================================
    // Example1------------------------------------
    // infinty loop :
    /*
    $x = 1;
    while ($x <2){
        echo "PHP";
    }
     */
    //---------------------------------------------
    // Example2------------------------------------
    /*
    $x = 1;
    while ($x < 10){
        echo "PHP","<br>";
        $x +=1;
    }
    */
    //==============================================================
    /* //PHP Loops
    //--------------------------------------------------------------
    
      - Often when you write code, you want the same block of code 
        to run over and over again a certain number of times. 
        So, instead of adding several almost equal code-lines in a 
        script, we can use loops.

      - Loops are used to execute the same block of code again and 
        again, as long as a certain condition is true.

      In PHP, we have the following loop types:

      @ while - loops through a block of code as long as the 
        specified condition is true
      @ do...while - loops through a block of code once, and 
        then repeats the loop as long as the specified 
        condition is true
      @ for - loops through a block of code a specified number 
        of times
      @ foreach - loops through a block of code for each element 
        in an array
    //=============================================================
    // https://www.w3schools.com/php/php_looping.asp
    //=============================================================
    */
    //
    //---------------------------------------------
    // Example3------------------------------------
    /*
       echo "<h1>Example 3 | PHP loops </h1>", "<hr>";
       $x = 1;
       while ($x <10){
        if ($x == 6){
            echo "====T=A=R=G=E=T==C=O=N=T=I=N=U=E==== <hr>";
            $x +=1 ;
            continue; 
        }
        echo "PHP"."<br>";
        $x +=1;
       }
       */
      //===========================
      //--------Example 4  of break
      //=========================== 
      echo "<h1>Example 4 | PHP loops </h1>", "<hr>";
       $x = 1;
       while ($x <10){
        if ($x == 6){
            echo "====T=A=R=G=E=T==B=R=E=A=K==== <hr>";
            echo "PLEASE READ CODES INSIDE learn14.php";
            $x +=1 ;
            break; // to break and stop the loop.
        }
        echo "PHP"."<br>";
        $x +=1;
        // read the codes of examples very seriously!
        //===========================================

       }
    //=============================================
    //=============================================
    ?>
    
</body>
</html>