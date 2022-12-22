<?php
echo "<h1>leran20.php | learn20.php | POST/ action='new-page'</h1>";
echo "<h4>The Empolyee`s info page: </h4><hr><br> ";
if (isset($_POST['add'])){
    echo $_POST['namee'].'<br>'.
    $_POST['agee'].'<br>'.
    $_POST['email'];
}
?>