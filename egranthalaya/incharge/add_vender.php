<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $place=$_POST['place'];
    $country=$_POST['country'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    if(!empty($name)&&!empty($place)&&!empty($country)&&!empty($add)&&!empty($phone)&&!empty($email))
    {
    $sq="insert into add_vendor(ven_id,ven_name,place,country,address,phn,mail)
     values(NULL,'$name','$place','$country','$add','$phone','$email')";
        mysqli_query($conn,$sq);
        }
 else {
        echo "fields are empty";
    }
}
if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_vendor where ven_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
      //header('location:add_subject.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_vendor where ven_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_vender.php');
    }
}
if(isset($_POST['update']))
{
     $name=$_POST['name'];
    $place=$_POST['place'];
    $country=$_POST['country'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
$sq="update add_vendor set ven_name='$name',place='$place',country='$country',address='$add',phn='$phone',mail='$email' where ven_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_vender.php');
        
        
}   

?>
<?php include'header2.php';?>
<html>
    <head>

         
                
                    
                     
      <form method="post" style="margin-top:-480px">
          <center><h1>Add Vendor</h1></center>
       
    <table>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Vendor
            </td>
            
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="name" value="<?php echo $row['ven_name']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="name" style="width:250px" placeholder="Enter Vender">
            </td>
         <?php
}
?>

        
        </tr>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Place
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="place" value="<?php echo $row['place']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="place" placeholder="Enter Place">
            </td>
         <?php
}
?>
        </tr>
        
        <tr>
           
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Country
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="country" value="<?php echo $row['country']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <select name="country">
                    <option value="">-select-</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                </select>
            </td>
         <?php
}
?>

        </tr>
        
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Address
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="add" value="<?php echo $row['address']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <textarea rows="" cols="" name="add"></textarea>
            </td>
         <?php
}
?>

            </tr>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Phone
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="phone" value="<?php echo $row['phn']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="phone">
            </td>
         <?php
}
?>

        </tr>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                E-Mail
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="email" value="<?php echo $row['mail']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text3" name="email">
            </td>
         <?php
}
?>

        </tr>
        <tr>
                                                       <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
        {?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="submit" name="update"value="Update">
</td>
<?php } } else {
    ?><td>

            <td>
                <input type="submit" name="sub" style="color:red;">
            </td>
<?php

}
?>
        </tr>
        
    </table>
</form>
      <table style="border:1px solid black; width:auto;height:auto;">
            <tr>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    vendor
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                   Place
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Country
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Address
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Phone
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    E-Mail
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Action
                </td>
            </tr>
          
            <tr>
                <?php $sq="select * from add_vendor";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                
             <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['ven_name'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['place'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['country'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['address'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['phn'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['mail'];?>
                </td>
            
           <td>
                    <a href="?act=edit&&id=<?php echo $row['ven_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['ven_id']?>">Delete</a>|
                   
                </td>
           


            </tr>

                    <?php
                    }
                    ?>
          

        </table>
     
                  </div>

                    </form>
</body>
</html>

