<?php
include 'header2.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $new=$_POST['new'];
    
  $sq="update add_users set password='$new' where user_code='".$_SESSION['user_code']."'";
    mysqli_query($conn,$sq);
   //header('location:editpassword.php');
}
$sq="select * from add_users where user_code='".$_SESSION['user_code']."'";
$fet=mysqli_fetch_assoc(mysqli_query($conn,$sq));
?>
<form method="post" style="margin-top:-480px">
    <table>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Old Password
            </td>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="old" value="<?php echo $fet['password']?>" readonly="true">
            </td>
        </tr>
        
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                New Password
            </td>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="new">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="sub" value="Update" style="color:red">
            </td>
        </tr>
    </table>
</form> <?php 

?>