<?php
session_start();
require_once('users.php');
if (isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    header('Location: HPg.php');
}

if (isset($_POST['usrName']) && isset($_POST['password'])) {
    
    $_userId = 0;
    $_email  = $_POST['usrName'];
    $_pass   = sha1($_POST['password']);
    $_fname  = "";
    $_lname  = "";
    $user    = new User();
    $user->__set("_email", $_email);
    $user->__set("_pass", $_pass);
    var_dump($user);
    $LoginUserObject = $user->validateLogin($user);
    
    $d = false;
    if ($LoginUserObject != null) {
        //this is system's user
        $_SESSION['userID']  = $LoginUserObject[0]['id'];
        $_SESSION['UsrName'] = $LoginUserObject[0]['fname'] . ' ' . $LoginUserObject[0]['lname'];
        
        $d = true;
        
        // header("Location: HPg.php");
    } else {
        $d = false;
        // header("Location: index.php");
    }
    echo $d;
}

?>