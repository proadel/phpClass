<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn6.php | substr(php) Function</title>
</head>
<body>
    <!-- learn6.php | substr(php) Function
     =====================================================
        The substr() function returns a part of a string.
         Syntax : substr(string,start,length) see page end.
    -->
    <?php
    //----------------------------
    // readind the codes with care
    $name = "student43 Dode";
    $fonNum = "00967733477848";
    $res = substr($name,10); 
    //----------------------------------
    echo "Student Name: ",$name, "<br>";
    echo $fonNum, "<br>";
    echo "===================","<br>";
    //-------------------------------------------------
    echo "NAME OF STUDENT: ", substr($name,3), "<br>";
    echo "TELPHONE END-NUMBER :", substr($fonNum,11), "<br>";
    //-------------------------------------------------
    echo $res; 
    //-------------------------------------------------
    ?>
    <!-- The substr() function returns a part of a string.
         Syntax : substr(string,start,length)

Parameter	Description
-----------------------------------------------------------------
string	    Required. Specifies the string to return a part of
start	    Required. Specifies where to start in the string
             - A positive number - Start at a specified position 
               in the string
             - A negative number - Start at a specified position 
             from the end of the string
             - 0 - Start at the first character in string
length	    Optional. Specifies the length of the returned string. 
            Default is to the end of the string.
            - A positive number - The length to be returned from 
               the start parameter
            - Negative number - The length to be returned from the 
               end of the string
            - If the length parameter is 0, NULL, or FALSE - it 
               return an empty string
    -->
</body>
</html>