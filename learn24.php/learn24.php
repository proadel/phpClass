<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn24.php | include vs. require statements</title>
</head>
<body>
    <!--
        ------------------------------------- 
        learn24.php | 
        -------------------------------------
        - include function : include ()

    -->
    <h1>learn24.php | include and require statements</h1>
    <hr>
    <br><br>
    <?php
    // Example1 : include
    echo "Example1 - include";
    echo "<br>"."codes include from emp24.php page";
    include('emp24.php');
    echo "<hr>"; 
    //================================================
    // Example2 : require
    echo "Example2 - require";
    echo "<br>"."codes require from emp24.php page";
    require('emp24.php');
    echo "<hr>";
    //=========================================================
    /* The include and require statements are identical, 
    except upon failure: require will produce a fatal error 
    (E_COMPILE_ERROR) and stop the script. include will only 
    produce a warning (E_WARNING) and the script will continue.

    The include (or require) statement takes all the text/code/
    markup that exists in the specified file and copies it into 
    the file that uses the include statement.

    Including files is very useful when you want to include the 
    same PHP, HTML, or text on multiple pages of a website.
    -----------------------
    PHP include vs. require
    -----------------------
    The require statement is also used to include a file into 
    the PHP code. However, there is one big difference between 
    include and require; when a file is included with the include 
    statement and PHP cannot find it, the script will continue 
    to execute.

    If we do the same example using the require statement, the 
    echo statement will not be executed because the script execution 
    dies after the require statement returned a fatal error.
    */
    //============================================================
    /* 
       - Use require when the file is required by the application.

       - Use include when the file is not required and application 
       should continue when file is not found.
    */
    //============================================================
    ?>
    
</body>
</html>