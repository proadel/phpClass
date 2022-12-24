<?php
if(isset($_POST['send'])){
    echo $_POST['username']
    ."<br>".
    $_POST['password'] // not secure codes
    ."<br>".
    // to encrypte thr real contents of password box. by using md5();
    md5($_POST['password']);    
}

/*
    ---------------------------------
    learn23.php | PHP md5() Function
    ---------------------------------
    - here example to encrypt the passwords
*/
?>