<?php session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['login']))
{
   $sq="select * from admin_login where username='".$_POST['user']."' and password='".$_POST['pass']."'";
        
        $qu=mysqli_query($conn,$sq);
        if(mysqli_num_rows($qu)>0)
        {
            $row=  mysqli_fetch_assoc($qu);
            $_SESSION['user']=$row['username'];
            $_SESSION['login']='yes';
            header('location:admin_dashboard.php');
        }
 else {
     $var="username or password invalid";
 }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css1/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Admin Login</h1>
      <form method="post">
        <p><input type="text" name="user" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
       
        <p class="submit"><input type="submit" name="login" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      
    </div>
  </section>

 
</body>
</html>
