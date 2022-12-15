<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn7.php | substr replace Function </title>
</head>
<body>
    <?php
    //--------------------------------------------
    // code = substr_replace(del, add, variable);
    $name1 = "student";
    echo $name1;
    $res = substr_replace('student','ADEL', $name1);

    //==================================================
    /* The substr_replace() function
    ---------------------------------------------------
    substr_replace(string,replacement,start,length)
    ===================================================
    The substr_replace() function replaces a part of 
    a string with another string.

    Note: If the start parameter is a negative number 
    and length is less than or equal to start, 
    length becomes 0. Note: This function is binary-safe.
    ==================================================================
    Parameter	  Description
    ------------------------------------------------------------------
    string	      Required. Specifies the string to check
    replacement	  Required. Specifies the string to insert
    start	      Required. Specifies where to start 
                  replacing in the string
                 - A positive number - Start replacing at 
                 the specified position in the string
                 - Negative number - Start replacing at 
                 the specified position from the end of 
                 the string
                 - 0 - Start replacing at the first character 
                 in the string
    length	      Optional. Specifies how many characters 
                   should be replaced. Default is the same 
                   length as the string.
                 - A positive number - The length of string 
                   to be replaced
                 - A negative number - How many characters should 
                   be left at end of string after replacing
                 - 0 - Insert instead of replace
    ==================================================================
    */
    ?>
</body>
</html>