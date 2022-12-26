<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn36.php | OOP project 1</title>
</head>
<body>
    <h1>learn36.php | OOP-PHP-EXAMPLE1</h1><hr><br><br>
    <!-- 
    
    ====================================================================
    -->
    <?PHP
    echo "Exampl 1 <br>";
    class students{
        public $stud_number;
        public $stud_name;

        function printo(){
            $num = $this -> stud_number;
            $nam = $this -> stud_name;
            echo "<h5>$num</h5> <h5>$nam</h5>";
        }
    } 
    if (isset($_POST['name'])){
        // now create object for all codes above named $all
        $all = new students();
        $all -> stud_number = 1;
        $all -> stud_name = 'ADEL';
        $all -> printo();
    }
    //------------------------------------------------------
    ?>

    <form method="POST">
        <input type="submit" value="send" name="send">
    </form>
    
</body>
</html>