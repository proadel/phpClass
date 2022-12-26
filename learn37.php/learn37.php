<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn37.php | PHP & SQL BASIC</title>
</head>
<body>
    <h1>learn37.php | PHP with SQL</h1> <hr><br><br>
    <!-- 
        1. how to creat Data base by SQL.
        2. how to connect to data base by sql and php
    -->
    <form method="POST">
    <center>
     <input type="submit" value="connect" name="con">
    </center>
    </form>
    <?php
    if (isset($_POST['con'])){
        $host='localhost';
        $user='root';
        $pass='';
        #$db='std'; ERROR when connction started 
        $db='stud1';
        //--------------------------------------------
        // This command to connect to DATA BASE 
        //--------------------------------------------
        $conn = mysqli_connect($host,$user,$pass,$db);
        //--------------------------------------------
        // This command to print status of connect 
        //--------------------------------------------
        if ($conn){
            echo "<h4 style='color:green' >CONNECTED</h4>";
        }else{
            #echo "<h4 style='color:red'>Sorry! NOT CONNECTED</h4>";
            die ('Sorry! NOT CONNECTED');
            // whats the diffirent between echo and die !! ??
        }
    }

    ?>
    
</body>
</html>