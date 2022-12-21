<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn17.php | </title>
</head>
<body>
    <h1>Read Files in PHP</h1>
     <?php
     // learn17.php | read Files in PHP
     //------------------------------------------------
     //------------------------------------------------
     // First : readfile() function
     //-----------------------------
     //   code:  readfile(file, include_path, context)
     /* - Reads a file and writes it to the output buffer.
          Tip: You can use a URL as a filename with this 
          function if the fopen wrappers have been enabled 
          in the php.ini file. see below: Parameter Values
      //--------------------------------------------------------
          Parameter	     Description
      //--------------------------------------------------------
          file	         Required. Specifies the file to read.
          include_path	 Optional. Set this parameter to TRUE. 
                         if you want to search for the file in 
                         the include_path (in php.ini) as well.
          context	       Optional. Specifies the context of the 
                         file handle. Context is a set of 
                         options that can modify the behavior of 
                         a stream.
      //-----------------------------------------------
     //================================================
     */ 
     // example :
      // readfile()
      echo "<h1>Example 1 readfile() in PHP</h1>", "<br>";
      $rdFile = readfile('learn17.txt');
      echo $rdFile;
      // 
      //-----------------------------------------------
     //================================================
     // Second : file_get_contents
     // example
    echo "<h1>Example 2 file_get_contents in PHP</h1>", "<br>";     
    echo file_get_contents('learn17.txt'), "This Contents from file txt.","<br>";       
    #echo file_get_contents('https://www.google.com/');
        /*

          The file_get_contents() reads a file into a string.
            This function is the preferred way to read the 
            contents of a file into a string. It will use memory 
            mapping techniques, if this is supported by the server, 
            to enhance performance.
         
          This function is similar to file(), except that file_get_contents() 
          returns the file in a string, starting at the specified offset up to 
          length bytes. On failure, file_get_contents() will return false.

            file_get_contents() is the preferred way to read the contents of 
           a file into a string. It will use memory mapping techniques if 
           supported by your OS to enhance performance.
           Note: If you're opening a URI with special characters, such as 
           spaces, you need to encode the URI with urlencode().
       // ---------------------------------------------------------------------
          3rd:  File exists in PHP
          // This function is used to check whether a file or 
          directory exists or not.
        */ 
        //Example :
        echo "<h1>Example 3 File EXISTS in PHP</h1>", "<br>";
        $filo = 'welcome.txt';
        if (file_exists($filo)){
          echo "The File Found.";  
        }else{
          echo"<p style='color:red; background-color:black;'>Sorry, not found!!</p>";        
        }
        /*   To check whether any file is existing or not then 
          we can use the below-mentioned PHP function. To find 
          the existence of the files, we use file_exists() function.
          for more inf:
          https://www.php.net/manual/en/function.file-exists.php 
        */

        //-----------------------------------------------------------
        // 4th : dirname — Returns a parent directory's path
        // code : dirname();
        // example 4 
        echo "<h1>Example 4  directory's path in PHP</h1>", "<br>";
        echo "<h3>dirname() function :</h3>";
        echo dirname("http://localhost/phpClass/learn17.php/learn17.php"), "<br>";
        echo dirname("https://www.facebook.com"), "<br>";
        echo "<h3>This __FILE__ to read the file path :</h3>";
        echo __FILE__;
        //
        /* Given a string containing the path of a file or directory,
           this function will return the parent directory's path that 
           is levels up from the current directory. Note:dirname() 
           operates naively on the input string, and is not aware of 
           the actual filesystem, or path components such as "..".
           ::::Caution::::
           - On Windows, dirname() assumes the currently set codepage, 
             so for it to see the correct directory name with multibyte 
             character paths, the matching codepage must be set. 
             If path contains characters which are invalid for the current 
             codepage, the behavior of dirname() is undefined.

           - On other systems, dirname() assumes path to be encoded in 
             an ASCII compatible encoding. Otherwise the behavior of 
             the function is undefined.

             for more info
             https://www.php.net/manual/en/function.dirname.php
        */

    //=========================================================================
    //=========================================================================
     ?>
</body>
</html>