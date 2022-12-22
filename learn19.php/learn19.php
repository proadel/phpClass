<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn19.php | send-get data to server</title>
</head>
<body>
    <!-- //learn19.php | send data to server-->
    <h1>learn19.php | send-get data to server</h1> <hr>
    <!--First lets create form inside the html body of the page
      1. METHOD="GET" :
      The GET Method sends the encoded user information appended to 
      the page request. The page and the encoded information are 
      separated by the ? character.

         http://www.test.com/index.htm?name1=value1&name2=value2

      - The GET method produces a long string that appears in your 
         server logs, in the browser's Location: box.

      - The GET method is restricted to send upto 1024 characters only.

      - Never use GET method if you have password or other sensitive 
         information to be sent to the server.

      - GET can't be used to send binary data, like images or word 
         documents, to the server.

      - The data sent by GET method can be accessed using QUERY_STRING 
         environment variable.

      - The PHP provides $_GET associative array to access all the sent 
         information using GET method. 
    
    <form method="GET">
       name1: <input type="text" name="name1">
       name2: <input type="text" name="name2">
       <button type="submit">send</button>
    </form>
    -->
  <!-- There are two ways the browser client can 
        send information to the web server.
     The GET Method and The POST Method
     Before the browser sends the information, it 
     encodes it using a scheme called URL encoding. 
     In this scheme, name/value pairs are joined with 
     equal signs and different pairs are separated 
     by the ampersand.

       name1=value1&name2=value2&name3=value3

       Spaces are removed and replaced with the + character 
       and any other nonalphanumeric characters are replaced 
       with a hexadecimal values. After the information is 
       encoded it is sent to the server.

       The POST Method :
       =================
        The POST method transfers information via HTTP headers. 
        The information is encoded as described in case of GET 
        method and put into a header called QUERY_STRING.

        - The POST method does not have any restriction on 
           data size to be sent.

        - The POST method can be used to send ASCII as well 
           as binary data.

        - The data sent by POST method goes through HTTP header 
           so security depends on HTTP protocol. By using Secure 
           HTTP you can make sure that your information is secure.

        - The PHP provides $_POST associative array to access 
           all the sent information using POST method.
  -->
  <!--
  <form method="POST">
       name1: <input type="text" name="name1">
       name2: <input type="text" name="name2">
       <button type="submit">send</button>
    </form>
-->

<form method="POST">
       name1: <input type="text" name="name1">
       name2: <input type="text" name="name2">
       <button type="submit" name="send">send</button>
    </form>
<br><br>
<h3>Please Enter Your Inputs To print Below :</h3>
<br>
<?php
// learn19.php | send data to server
// if click-on the button
/*
if(isset($_POST['send'])){
   echo $_POST['name1'].$_POST['name2'];
   //echo $_POST['name1'],$_POST['name2']; // you can use ,
}
*/
// Example 
if(isset($_POST['send'])){
   echo
   '<span style="color:green">First Name:</span>'.
   $_POST['name1']
   .'<br>'.
   '<span style="color:red">Second Name:</span>'.
   $_POST['name2'];
}
//==========================
?>
    
</body>
</html>