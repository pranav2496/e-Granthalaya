<?php 
include 'header1.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_member_record where member_no='".$_SESSION['mem']."'";
$fet=mysqli_fetch_assoc(mysqli_query($conn,$sq));
if(isset($_POST['sub1']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $add=$_POST['add'];
    if($_FILES['f1']['name'])
    {
        move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$_FILES['f1']['name']);
        $img="images/".$_FILES['f1']['name'];
    }
    else
    {
        $img=$_POST['img'];
    }
    $sq="update add_member_record set member_name='$name',phone='$phone',mail='$mail',res_add='$add',file='$img' where member_no='".$_SESSION['mem']."'";
    mysqli_query($conn,$sq);
    header('location:home.php');
}


?>
<form method="post">
<table>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Name :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <?php  echo $fet['member_name']?>
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Address :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <?php  echo $fet['res_add']?>
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Phone No :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <?php  echo $fet['phone']?>
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Mail :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <?php  echo $fet['mail']?>
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Image :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <img src="<?php  echo "../member/".$fet['file']?>" width="100px" height="100px">
        </td>
    </tr>
    <tr>
       
        <td >
            <input type="submit" name="sub" value="Edit" style="color:red">
        </td>
    </tr>
</table>
</form>
<?php if(isset($_POST['sub']))
{
    ?>
<form method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Name :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
          <input type="text"  value="<?php  echo $fet['member_name']?>" name="name">
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Address :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <textarea name="add">  <?php  echo $fet['res_add']?></textarea>
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Phone No :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
           <input type="text" value="<?php  echo $fet['phone']?>" name="phone">
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Mail :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" value="<?php  echo $fet['mail']?>" name="mail">
        </td>
    </tr>
    <tr>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            Image :
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <img src="<?php  echo "../member/".$fet['file']?>" width="100px" height="100px">
            <input type="hidden" name="img" value="<?php  echo "../member/".$fet['file']?>">
        </td>
        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="file" name="f1">
        </td>
    </tr>
    <tr>
       
        <td>
            <input type="submit" name="sub1" value="Update" style="color:red">
        </td>
    </tr>
</table>
</form>

<?php
}

?>

