<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn8.php | strlen & _Word_count</title>
</head>
<body>

<!-- ================================================
    = strlen( ); | Get string length
    = str_word_count( ); Return information about 
      words used in a string
      See Also:::::::::::::::::::::::::::::::::::::::
      - count() - Counts all elements in an array 
         or in a Countable object
      - grapheme_strlen() - Get string length in 
         grapheme units
      - iconv_strlen() - Returns the character count 
         of string
      - mb_strlen() - Get string length
      // https://www.php.net/manual/en/function.strlen 
-->
<?php
// strlen example ---------------------------------
//-------------------------------------------------
 $name = "student";
 $adres = "yemen, Sanaa";

 echo "Start of strlen example:","<br>";
 echo "======================,","<br>";
 echo "Length of name : ", strlen($name), "<br>";
 echo "Length of address : ", strlen($adres),"<br>";
 echo "====================== ","<br>";
//=================================================
 // str word count example ------------------------
 // -----------------------------------------------
 $name2 = "CS50 class";
 $info = "lets learn PHP 2022";

 echo "Start of str word count example: ","<br>";
 echo "count of name student = ",str_word_count($name),"<br>";
 echo "count of name2 CS50... = ",str_word_count($name2),"<br>";
 echo "count of info = ",str_word_count($info),"<br>";

 //================================================================
 /* str_word_count  array|int
    Counts the number of words inside string. If the 
    optional format is not specified, then the return 
    value will be an integer representing the number 
    of words found. In the event the format is specified, 
    the return value will be an array, content of which is 
    dependent on the format. The possible value for the format 
    and the resultant outputs are listed below.

    For the purpose of this function, 'word' is defined as a 
    locale dependent string containing alphabetic characters, which 
    also may contain, but not start with "'" and "-" characters. 
    Note that multibyte locales are not supported.
  
 */
 //====== example 3 ===============
 $info1 = "lets learn PHP with HTML and Javascript";
 $count = str_word_count($info1);
 echo "The word counts on count_var : ", $count;
//==================================================================

?>

    
</body>
</html>