<?php
include 'header1.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_member_record where member_no='".$_SESSION['mem']."'";
$fet=mysqli_fetch_assoc(mysqli_query($conn,$sq));
?>
<form method="post">
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
if(isset($_POST['sub']))
{
    $new=$_POST['new'];
    
  $sq="update add_member_record set password='$new' where member_no='".$_SESSION['mem']."'";
    mysqli_query($conn,$sq);
   header('location:edit_profile.php');
}
?>