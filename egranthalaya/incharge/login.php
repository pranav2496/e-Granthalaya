<?php session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    //$_SESSION['Library']=$_POST['Library'];
    $sq="select * from add_users where user_name='".$_POST['user']."' and password='".$_POST['pass']."'";
    $qu=mysqli_query($conn,$sq);
    if(mysqli_num_rows($qu))
    {
    $fet=mysqli_fetch_assoc($qu);
    $_SESSION['user_code']=$fet['user_code'];
    $_SESSION['login1']='yes';
    header('location:http://localhost/template1/incharge/incharge_home.php');    
    }
    
}

?><?php include "../header.php";?>
       
             <form method="post" style="margin-bottom: 80px;">
                      <center>
                          <h1 style="color:black">Incharge Login</h1>
                      </center>
            <table> <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Username
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <input type="text" name="user">
                </td>
                </tr>
                <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Password
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <input type="password" name="pass">
                </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" style="color:red">
                    </td>
                </tr>
            </table>
        </form>
    </body>