<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn12.php | Switch(){case:break,..,Default} </title>
</head>
<body>
    <?php
    // learn12.php | switch case
    // switch(){case:break,..,Default}
    //------------------------------------
    // example 1 -------------------------
    $BP = 120;
    switch($BP){
        case $BP <= 95:
            echo 'Alert Start acute Hypotension!!!';
        break;
        case $BP <=75:
            echo 'Alert RED SEVER hypotenstion! call- ICU';
        break;
        Default;
        echo 'ERROR::::';    
    }
    ?>
</body>
</html>