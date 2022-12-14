<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn5.php | Merge(variables) +</title>
</head>
<body>
 <?php
 $name = "L";
 $name = "E";
 $name = "A";
 $name = "R";
 $name = "N";
 echo $name, '<br>';
 echo "======================= <br>";
 //------------------------------------------------
 // add .= to other var`s for adding the new values 
 //-------------------------------------------------
 $name2 = "L";
 $name2 .= "E";
 $name2 .= "A";
 $name2 .= "R";
 $name2 .= "N";
 echo $name2, '<br>';
 echo "======================= <br>";
 //----------------------------------
 $info = "learn<hr>";
 $info .= "PHP";
 $info .= "2022";
 echo $info;
 //-----------------------------------
 
 ?>


</body>
</html>