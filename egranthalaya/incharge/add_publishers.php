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
    $sq="insert into add_publisher(pub_id,pub_name,place,country,address,phn,mail)
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
        $sq="select * from add_publisher where pub_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
      //header('location:add_subject.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_publisher where pub_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_publishers.php');
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
    
$sq="update add_subject set pub_name='$name',place='$place',country='$country',address='$add',phn='$phone',mail='$email' where pub_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_publishers.php');
        
        
}   

?>
<?php include 'header2.php';?>

     <form method="post" style="margin-top:-480px">
          <center><h1>Add Publishers</h1>
            
    <table>
        <tr>
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Publisher Name<br></br>
            </td>
            
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="heading" value="<?php echo $row['pub_name']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="name" placeholder="Publisher Name">
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
            <input type="text" name="heading" value="<?php echo $row['place']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text1" name="place" placeholder="Enter Place">
            </td>
         <?php
}
?>

        </tr>
        <tr>
           
            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Country<br></br>
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="heading" value="<?php echo $row['country']?>"></td>
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
        ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
            <input type="text" name="heading" value="<?php echo $row['address']?>"></td>
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
            <input type="text" name="heading" value="<?php echo $row['phn']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="phone" placeholder="Enter Phone">
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
            <input type="text" name="heading" value="<?php echo $row['mail']?>"></td>
            <?php
    }
}
 else {
    ?>

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text3" name="email" placeholder="Enter E-mail">
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
    ?><td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">

            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="submit" name="sub">
            </td>
<?php

}
?>
        </tr>
        
    </table>
</form>
      <table border="1"  style="margin-top:20px">
            <tr>
                <td>
                    Publisher Name
                </td>
                <td>
                   Place
                </td>
                <td>
                    Country
                </td>
                <td>
                    Address
                </td>
                <td>
                    Phone
                </td>
                <td>
                    E-Mail
                </td>
                <td>
                    Action
                </td>
            </tr>
          
            <tr>
                <?php $sq="select * from add_publisher";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                
             <td>
                    <?php echo $row['pub_name'];?>
                </td>
                <td>
                    <?php echo $row['place'];?>
                </td>
                <td>
                    <?php echo $row['country'];?>
                </td>
                <td>
                    <?php echo $row['address'];?>
                </td>
                <td>
                    <?php echo $row['phn'];?>
                </td>
                <td>
                    <?php echo $row['mail'];?>
                </td>
            
           <td>
                    <a href="?act=edit&&id=<?php echo $row['pub_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['pub_id']?>">Delete</a>|
                   
                </td>
           


            </tr>

                    <?php
                    }
                    ?>
          

        </table>
        

      <br class="clear" />
    </div>
  </div>
</div><br></br><br></br>

        <h3>Aenean purus pede</h3>
    <p>Vivamus diam orci, bibendum eu, venenatis a, gravida et, nisl. Donec  felis tortor, rhoncus eu, convallis ac, mattis id, est. Donec commodo,  dui vel eleifend varius, lacus nunc suscipit risus, eget bibendum nunc  velit lobortis sapien. Nam sodales volutpat nibh. Cras et justo.  Praesent pede. In sed eros cursus arcu tristique congue. Nulla iaculis  ante sit amet sapien auctor tincidunt. Aliquam sit amet libero. Aliquam  mauris tellus, gravida nec, nonummy vel, tincidunt hendrerit, mi. Etiam  cursus mi et turpis. Phasellus et mi in dolor feugiat feugiat.  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices  posuere cubilia Curae; Fusce commodo. </p>
    <h3>Vivamus diam orci</h3>
    <p>Aenean purus pede, tempor ut, iaculis ac, tincidunt interdum, urna.  Pellentesque quis mauris. Morbi porttitor blandit nisl. Suspendisse  potenti. Cras sem. Maecenas sit amet eros a augue fringilla posuere. Ut  bibendum ultricies lorem. Donec interdum. In interdum ullamcorper nisl.  Mauris tortor pede, accumsan a, tempus et, fermentum et, lectus. In  congue ligula ut odio. Sed adipiscing pharetra quam. </p>
  </div>
  <div id="footer"></div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>

