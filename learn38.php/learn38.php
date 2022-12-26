<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn38.php | PHP SQL insert</title>
</head>
<body>
    <h1>learn38.php | PHP SQL insert</h1> <hr><br><br>
    <!-- 
        1. creat Data base by SQL.
        2. insert into table of db
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
        $db='stud';
        $conn = mysqli_connect($host,$user,$pass,$db);
        # This command below is to ADD DATA into your_Table  
        $insert="insert into student values(4,'Osama Salman Dawood','YEMEN')";
        $q = mysqli_query($conn, $insert);
        //----------------------------------------------
        #@$conn = mysqli_connect($host,$user,$pass,$db);
        //----------------------------------------------
        if ($q){
            echo "Your NEW STUDENT DATA SAVED ";
        }else{
            echo mysqli_error($conn);
        }
    }

    ?>
    
</body>
</html>