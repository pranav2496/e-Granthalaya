<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $heading=$_POST['heading'];
    $code=$_POST['code'];
   // if(!empty($heading)&&!empty($code))
   // {
  echo $sq="insert into add_subject(subject_id,subject_heading,keywords)
     values(NULL,'$heading','$code')";
        mysqli_query($conn,$sq);
    }
// else {
  //      echo "fields are empty";
  //  }
//}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_subject where subject_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
     // header('location:add_subject.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_subject where subject_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_subject.php');
    }
}
if(isset($_POST['update']))
{
     $heading=$_POST['heading'];
    $code=$_POST['code'];
    
$sq="update add_subject set subject_heading='$heading',keywords='$code' where subject_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_subject.php');
        
        
}   


?>
<?php include'header2.php';
?>

<html>
    <head>
    <body>
               
                
                    
                    
        <form method="post" style="margin-top:-480px">
           
            <center>  <h1>Add Subject</h1></center>
                 <table>
        <tr>
            <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Sub Heading
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="heading" value="<?php echo $row['subject_heading']?>"></td>
            <?php
    }
}
 else {
    ?>
       <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="heading">
            </td>
     <?php
}
?>
          
        </tr>
                     <tr>
                         <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                             Subject Code
                                 
                         </td>
                                     <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="code" value="<?php echo $row['keywords']?>"></td>
            <?php
    }
}
 else {
    ?>
                         <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                             <input type="text" name="code">
                                 
                                     
                         </td>
 <?php } ?></tr>
                     <tr>
                                                              <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
        {?><td>
            <input type="submit" name="update"value="Update" style="color:red">
</td>
<?php } } else {
    ?><td>
        <input type="submit" name="sub" style="color:red">
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
                    Subject id
                </td>
                <td>
                    Sub Heading
                </td>
                <td>
                    Sub Code
                </td>
                <td>
                    Action
                </td>

            </tr>
            <tr>
                <?php $sq="select * from add_subject";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                <td>
                    <?php echo $row['subject_id'];?>
                </td>
             <td>
                    <?php echo $row['subject_heading'];?>
                </td>
                <td>
                    <?php echo $row['keywords'];?>
                </td>

                <td>
                    <a href="?act=edit&&id=<?php echo $row['subject_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['subject_id']?>">Delete</a>
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
