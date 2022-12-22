<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn21.php | strip_tags() function </title>
</head>
<body>

<h1>learn21.php | strip_tags() function</h1>
    <hr><br><br>
    <form action="emp21.php" method="POST">
        namee: <input type="text" name="namee">
        agee: <input type="text" name="agee">
        email: <input type="text" name="email">
        <button type="submit" name="add">add</button>
    </form>

    <?php
    /* The strip_tags() function strips a string from HTML, XML, 
        and PHP tags.

        Note: HTML comments are always stripped. This cannot be 
              changed with the allow parameter.

        Note: This function is binary-safe.
        -------------------------------------------------------
        Syntax =   strip_tags(string,allow)
        -------------------------------------------------------
        Parameter	   Description
        =======================================================
        string	       Required. Specifies the string to check
        allow	       Optional. Specifies allowable tags. 
                        These tags will not be removed
        =======================================================
        Example: Strip the string from HTML tags, 
                but allow <b> tags to be used:
        #echo strip_tags("Hello <b><i>world!</i></b>","<b>");
        //-----------------------------------------------------
        //=====================================================

    */
    
    
    ?>
    
</body>
</html>