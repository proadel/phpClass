<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn4.php | Validate var Type in PHP</title>
</head>
<body>
    <!-- =======================================
        // learn4.php | validate var Type in PHP
       -----------------------------------------
             PHP basic code : $var = value;
       -----------------------------------------
       =  is_string()
       =  is_integer()
       =  is_bool()
       =  is_float() 
     --> 
<?php
$firstName = "Student";
$AgE = 43;
//-----------------------------
print(is_string($firstName));
print(is_string($AgE));
//-----------------------------
print(is_integer($firstName));
print(is_integer($AgE));
//-----------------------------
echo (is_string ($firstName));
//-----------------------------
?>

<!-- ============================================================================
<script> // this is for test only for javascript.
    alert('WELCOME to learn4.php Validate var Type in PHP class ... ThankYou!');
</script>
 ================================================================================
--> 
</body>
</html>