<?php //session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $code=$_POST['code'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $code1=$_POST['code1'];
   
   // if(!empty($code)&&!empty($name)&&!empty($description)&&!empty($code1))
    //{
     $sq="insert into add_section(sec_id,sec_code,sec_name,sec_des,se_code1)
     values(NULL,'$code','$name','$description','$code1')";
        mysqli_query($conn,$sq);
       // }
 //else {
        //echo "fields are empty";
   // }
}
if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_section where sec_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
      //header('location:add_subject.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_section where sec_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_section.php');
    }
}
if(isset($_POST['update']))
{
     $code=$_POST['code'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $code1=$_POST['code1'];
    
    
$sq="update add_section set sec_code='$code', sec_name='$name',sec_des='$description',se_code1='$code1' where sec_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_section.php');
        
        
}   

?>
<?php include'header2.php';
?>


<html>
    <head>
    <body>
      <form method="post" style="margin-top:-280px">
          <center><h1>Library Section</h1>
          </center>
            
    <table>
        <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                Code
            </td>
            
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            <input type="text" name="code" value="<?php echo $row['sec_code']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text" name="code" placeholder="Enter Code">
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
            <input type="text" name="name" value="<?php echo $row['sec_name']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text1" name="name" placeholder="Enter Name">
            </td>
         <?php
}
?>

        </tr>
         <tr>
            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                Description
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
            <input type="text" name="description" value="<?php echo $row['sec_des']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <textarea rows="" cols="" name="description" ></textarea>
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
            <input type="text" name="code1" value="<?php echo $_SESSION['user_code']?>" readonly="true"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                <input type="text2" name="code1"value="<?php echo $_SESSION['user_code']?>" readonly="true">
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
        {?><td>
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
                    code
                </td>
                <td>
                   name
                </td>
                <td>
                    description
                </td>
                <td>
                    user code
                </td>
                
                <td>
                    Action
                </td>
            </tr>
          
            <tr>
                <?php $sq="select * from add_section";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                
             <td>
                    <?php echo $row['sec_code'];?>
                </td>
                <td>
                    <?php echo $row['sec_name'];?>
                </td>
                <td>
                    <?php echo $row['sec_des'];?>
                </td>
                <td>
                    <?php echo $row['se_code1'];?>
                </td>
               
            
           <td>
                    <a href="?act=edit&&id=<?php echo $row['sec_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['sec_id']?>">Delete</a>|
                   
                </td>
           


            </tr>

                    <?php
                    }
                    ?>
          

        </table>
        

      </body>
      </head>
</html>

