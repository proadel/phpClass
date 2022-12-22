<?php
echo "<h1>leran21.php | strip_tags() Function </h1>";
echo "<h4>The Empolyee`s info page: ''should be secured!! </h4><hr><br> ";
if (isset($_POST['add'])){
    echo 
    strip_tags(($_POST['namee'])) 
    .'<br>'.
    strip_tags(($_POST['agee']))
    .'<br>'.
    $_POST['email'];
}
// see page learn21.php
// the old-codes : by this codes any one can #html codes inside the inputs.
/* if (isset($_POST['add'])){
    echo $_POST['namee']
    .'<br>'.
    $_POST['agee']
    .'<br>'.
    $_POST['email'];
*/
?>