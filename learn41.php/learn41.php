<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn41.php | PHP select SQL</title>
</head>
<body>
    <h1>learn41.php | PHP SQL select</h1> <hr><br><br>
    <!-- 
        1. creat Data base by SQL.
        2. select data from table of db to display 
           in web-browser.
    -->
    <?php
    $host='localhost';
        $user='root';
        $pass='';
        $db='stud';
        //---------------------------------------------------------
        $conn = mysqli_connect($host,$user,$pass,$db);
        //---------------------------------------------------------
        $r = mysqli_query($conn, 'select * from student');
        // the var r = replay, reback, result, ... etc whatever...
        //---------------------------------------------------------
    ?>
    <form method="POST">
    <center>
    <table border='5'>
       <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Address</th>
       </tr>
       <?php
       // be careful. where to put your php codes .............
       // we use the while loop to get all (*)data one by one from table.
       while ($row=mysqli_fetch_array($r)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo '</tr>';
       }
       ?>
    </table>
    </center>
    </form>
    <br><br>
    <p>Developed By Adel MD | Umbrella Corporation</p>
    <p>HAPPY NEW YEAR 2023 FOR ALL</p>
    <!--
     //================================================================
    /*=================================================================
    if (isset($_POST['con'])){
        $host='localhost';
        $user='root';
        $pass='';
        $db='stud';
        $conn = mysqli_connect($host,$user,$pass,$db);
        #$insert="insert into student values(4,'Osama Salman Dawood','YEMEN')";
        #$update = "update student set name='Ahmed Salman Dawood' where id=4";
        #$delete = "delete from student where id=1";
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
    */ //===================================================
    //======================================================
    //======================================================
      -->  
</body>
</html>