<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn40.php | PHP delete SQL</title>
</head>
<body>
    <h1>learn40.php | PHP SQL delete</h1> <hr><br><br>
    <!-- 
        1. creat Data base by SQL.
        2. DELETE data from table of db
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
        #$insert="insert into student values(4,'Osama Salman Dawood','YEMEN')";
        #$update = "update student set name='Ahmed Salman Dawood' where id=4";
        $delete = "delete from student where id=1";
        $q = mysqli_query($conn, $delete);
        //----------------------------------------------
        #@$conn = mysqli_connect($host,$user,$pass,$db);
        //----------------------------------------------
        if ($q){
            echo "Delete Complete, Your NEW updates SAVED ";
        }else{
            echo mysqli_error($conn);
        }
    }

    ?>
    
</body>
</html>