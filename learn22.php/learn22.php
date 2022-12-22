<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn22.php | header() location</title>
</head>
<body>
<h1>learn22.php | header() Location</h1>
    <hr><br><br>
    <form method="POST">
    <button type="submit" name="go">google</button>
    <button type="submit" name="emp22">Empolyee</button>
    </form>
    <?php 
    if(isset($_POST['go'])){
        header('location: https://www.google.com/');
    }
    if(isset($_POST['emp22'])){
        header('location: emp22.php');
    }
    /* header — Send a raw HTTP header
       header() is used to send a raw HTTP header. 
       See the » HTTP/1.1 specification for more information 
       on HTTP headers.
       --------------------------------------------------------------------------
       header(string $header, bool $replace = true, int $response_code = 0): void
       --------------------------------------------------------------------------
       Remember that header() must be called before any actual 
        output is sent, either by normal HTML tags, blank lines 
        in a file, or from PHP. It is a very common error to read 
        code with include, or require, functions, or another file 
        access function, and have spaces or empty lines that are 
        output before header() is called. The same problem exists 
        when using a single PHP/HTML file.

        Header : The header string.
          There are two special-case header calls. 
          
          The first is a header that starts
           with the string "HTTP/" (case is not significant), which will be used to 
           figure out the HTTP status code to send. For example, if you have configured 
           Apache to use a PHP script to handle requests for missing files (using the 
           ErrorDocument directive), you may want to make sure that your script generates 
           the proper status code.

           // This example illustrates the "HTTP/" special case
           // Better alternatives in typical use cases include:
           // 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
           // (to override http status messages for clients that are still using HTTP/1.0)
           // 2. http_response_code(404); (to use the default message)
            // header("HTTP/1.1 404 Not Found");

          The second special case is the "Location:" header. 
           Not only does it send this header back to the browser, but it also returns 
           a REDIRECT (302) status code to the browser unless the 201 or a 3xx status 
           code has already been set.

           for more info ::
            https://www.php.net/manual/en/function.header.php
            ===============================================================================
            ===============================================================================

    */
    ?>
</body>
</html>