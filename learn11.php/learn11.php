<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn11.php</title>
</head>
<body>
 <?php
 echo "<h1>welcome to learn11.php | if () {php}else ", "<br><hr></h1>";
 //------------------------------------
 // exapmle1 | if (){ } 
 //------------------------------------
 $x = 5;
 $y = 2;
 if ($x = 5){
    echo "Thats GOOD. <br>";
 }
//-------------------------------------
// exapmle2  | if () {}else{}
//------------------------------------
$z = 10;
if ($z == 11){
    echo "Thats GOOD.", "<br>";
}else{
    echo "Sorry, Try another Number!!!", "<br>";
}
//-------------------------------------
// Exapmle3  | if () {}else{}
//-------------------------------------
$fName = "Student";

if ($fName == "Stuedent"){
    echo "Welcome Enter Your password :";
}else{
    echo "Sorry! Please Enter Your Name Again:";
}
 ?>
<!--     
<script>

</script>
-->
</body>
</html>