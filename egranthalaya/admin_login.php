<?php include'header.php'; session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['login']))
{
  echo $sq="select * from admin_login where username='".$_POST['user']."' and password='".$_POST['pass']."'";
        
        $qu=mysqli_query($conn,$sq);
        if(mysqli_num_rows($qu)>0)
        {
            $row=  mysqli_fetch_assoc($qu);
            $_SESSION['user']=$row['username'];
            header('location:http://localhost/e_granthalaya/Admin/admin_dashboard.php');
        }
 else {
     $var="username or password invalid";
 }
}
?>
 <html>
    <head>
         <table style="border:1px solid blue; margin-left:-180px; ">
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Basic Search
                </td>
            </tr>
           
           
            
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Subject-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Year-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                   Publisher-Wise 
                </td>
            </tr>
            
            <tr>
                <td style="padding:5px;width:120px;color:white;background-color:rgb(101,118,235)">
                    Author-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white;background-color:rgb(101,118,235)">
                    Recent Arrivals
                </td>
            </tr>
        </table>
    </form>
    <body>
     <form method="post" style="margin-top:-100px">
           

         <table>
             
    <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Username
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="user" placeholder="Enter Username">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Password
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="password" name="pass" placeholder="Enter password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login" style="color:red">
                    </td>
                </tr>
                <tr>
                    <?php if(isset($_POST['sub']))
                    {
                        echo $var;
                    }
?>
                </tr>
            </table>
        </form>
    </body>
    </head>
</html>
