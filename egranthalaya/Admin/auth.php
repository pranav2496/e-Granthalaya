<?php session_start();
if($_SESSION['login']!='yes'){
    header('location:admin_login.php');
}
?>
