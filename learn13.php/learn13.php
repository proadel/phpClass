<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn13.php | Date and Time</title>
</head>
<body>
    
<?php
// Date | d = day   m = months   y = year
// use / to separate date (y/m/d)
// Time | h = houre i = minute s = seconde
// use :  to separation time (h:i:s)
//----------------------------------------
// example 1 -----------------------------
$D=date('y/m/d');
$T=date('h:i:s');
//-------------------------------------------------------
echo "<h1 style='color:red;'> $D </h1> <br>";
echo "The Time IS: ","<p style='color:green;'> $T </p>";
//-------------------------------------------------------
// example 2 --------------------------------------------
//-------------------------------------------------------
//=======================================================
?>
</body>
</html>