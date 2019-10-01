<?php 
if(isset($_REQUEST['act'])){
    if($_REQUEST['act']=='logout'){
        session_unset($_SESSION['login']);
        header('location:add_authors.php');
    }
}
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $mail=$_POST['mail'];
    $code=$_POST['code'];
    
    echo $sq="insert into add_authors(ath_name,ath_address,ath_dob,ath_mail,ath_code)
     values(NULL,'$name','$address','$dob','$mail','$code')";
        mysqli_query($conn,$sq);
     
}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_authors where ath_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
     // header('location:add_authors.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_authors where ath_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_authors.php');
    }
}
if(isset($_POST['update']))
{
     $name=$_POST['name'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $mail=$_POST['mail'];
    $code=$_POST['code'];
    
    
$sq="update add_authors set ath_name='$name',ath_address='$address',ath_dob='$dob',ath_mail='$mail',ath_code='$code' where ath_id='".$_GET['id']."'";
mysqli_query($conn,$sq);
header('location:add_authors.php');
        
        
}   

?>
<?php include'header2.php'?>

<html>
    <head>
    <body>
        <form method="post" style="margin-top:-480px">
            <center><h1>Add Authors</h1></center>
           
       
    <table>
        <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                ID
            </td>
            
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="id" value="<?php echo $row['ath_id']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text"  name="id" style="width:60px " placeholder="Enter ID">
            </td>
         <?php
}
?>
        </tr>
        <tr>
        <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            Name
        </td>
         <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            <input type="text" name="name" value="<?php echo $row['ath_name']?>"></td>
            <?php
    }
}
 else {
    ?>
        <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            <input type="text"  name="name" style="width:200px" placeholder="Enter Name">
        </td>
        <?php
}
?>
        

        
        </tr>
        <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                Address
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            <input type="text" name="address" value="<?php echo $row['ath_address']?>">
         </td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <textArea rows="" cols="" name="address"></textArea>
            </td>
         <?php
}
?>

        </tr>
        <tr>
           
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                DOB
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="dob" value="<?php echo $row['ath_dob']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text" name="dob" placeholder="Enter DOB">
            </td>
         <?php
}
?>

        </tr>
        
        <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                E-mail
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="mail" value="<?php echo $row['ath_mail']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text" name="mail" placeholder="Enter E-mail">
            </td>
         <?php
}
?>

            </tr>
        
         <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                User Code
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
<input type="text" name="code" value="<?php echo $_SESSION['user_code']?>"style="width:100px" readonly="true"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text" name="code" placeholder="Enter user Code" value="<?php echo $_SESSION['user_code'] ?>"style="width:100px" readonly="true">
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
        {?><td >
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
      <table border="1">
            <tr>
                <td>
                    Name
                </td>
                <td>
                   Address
                </td>
                <td>
                    Dob
                </td>
                <td>
                    E-mail
                </td>
               
                <td>
                    User code
                </td>
               
                <td>
                    Action
                </td>
            </tr>
          
            <tr>
                <?php $sq="select * from add_authors";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                
             <td>
                    <?php echo $row['ath_name'];?>
                </td>
                <td>
                    <?php echo $row['ath_address'];?>
                </td>
                <td>
                    <?php echo $row['ath_dob'];?>
                </td>
                <td>
                    <?php echo $row['ath_mail'];?>
                </td>
                <td>
                    <?php echo $row['ath_code'];?>
                </td>
                
            
           <td>
                    <a href="?act=edit&&id=<?php echo $row['ath_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['ath_id']?>">Delete</a>|
                   
                </td>
           


            </tr>

                    <?php
                    }
                    ?>
          

        </table>
        

     </body>
</head>
</html>

