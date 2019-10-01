<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $bib=$_POST['bib'];
    $material=$_POST['material'];
    $document=$_POST['document'];
    $author=$_POST['author'];
    $title=$_POST['title'];
    $gender=$_POST['gender'];
    if(!empty($bib)&&!empty($material)&&!empty($document)&&!empty($author)&&!empty($title)&&!empty($gender))
    {
    $sq="insert into check_duplicate(check_id,bib_level,mat_level,doc_level,aut,title,search)
     value(NULL,'$bib','$material','$document','$author','$title','$gender')";
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
        $sq="select * from check_duplicate where check_id='".$_GET['id']."'";
        $qu=mysqli_query($conn,$qu);
        $row=mysqli_fetch_assoc($qu);
    }
}
if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']='del')
    {
        $sq="delete from check_status where check_id='".$_GET['id']."'";
        $qu=mysqli_query($conn,$sq);
        header('location:check_duplicate.php');
    }
}
if(isset($_POST['update']))
{
     $bib=$_POST['bib'];
    $material=$_POST['material'];
    $document=$_POST['document'];
    $author=$_POST['author'];
    $title=$_POST['title'];
    $gender=$_POST['gender'];
    
$sq="update check_duplicate set bib_level='$bib',mat_level='$material',doc_level='$document',aut='$author',title='$title',search='$gender' where ven_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_vender.php');
        
        
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Granthalaya</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<div id="container">
  <div id="header">
    <h1>e-Granthalaya</h1>
  </div>
  <div id="sideheader"></div>
  <div id="left_column">
    <div class="left_column_boxes">
      <h4>Navigation</h4>
      <div id="navcontainer">
        <ul id="navlist">
          <li id="active"><a href="http://all-free-download.com/free-website-templates/" id="current">Home</a></li>
          <li><a href="http://all-free-download.com/free-website-templates/">Community</a></li>
          <li><a href="http://all-free-download.com/free-website-templates/">Webshop</a></li>
          <li><a href="http://all-free-download.com/free-website-templates/">About us </a></li>
          <li><a href="http://all-free-download.com/free-website-templates/">Site map </a></li>
        </ul>
      </div>
    </div>
    <div class="left_column_boxes">
      <h4>News</h4>
      <dl>
        <dt class="news">This is a definiton list</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed quam.  Nullam gravida aliquet odio. Phasellus ullamcorper tincidunt orci.  Praesent vel purus. Sed porttitor. Proin porttitor suscipit urna. Morbi  rhoncus posuere orci.</dd>
        <dt class="news">Lists are cool</dt>
        <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed quam.  Nullam gravida aliquet odio. Phasellus ullamcorper tincidunt orci.  Praesent vel purus. Sed porttitor. Proin porttitor suscipit urna. Morbi  rhoncus posuere orci.</dd>
      </dl>
    </div>
    <div class="left_column_boxes">
      <h4>Contact us</h4>
      <form id="form1" method="post" class="contact_us" action="http://all-free-download.com/free-website-templates/">
        <p>
          <label>Name
          <input type="text" class="fields_contact_us" name="textfield" />
          </label>
          <label>E-mail
          <input type="text" class="fields_contact_us" name="textfield1" />
          </label>
          <label> Your question:
          <textarea name="textarea" cols="" rows=""></textarea>
          </label>
          <label>
          <input type="submit" class="submit_button_contact" name="Submit1" value="Submit" />
          </label>
        </p>
      </form>
    </div>
    <p class="center">Created by Dieter Schneider 2007 <a href="http://www.csstemplateheaven.com">www.csstemplateheaven.com</a></p>
  </div>
  <div id="content">
      
     
        <form method="post" style="margin-top:0px">
            <h1 style="margin-top:0px;float:none;">Check Duplicate </h1>
            <table>
                <tr>
                    <td>
                        Bib Level
                    </td>
                     <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="bib" value="<?php echo $row['bib_level']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                        <select name="bib">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
         <?php
}
?>
                    <td>
                        Material Level
                    </td>
         <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="material" value="<?php echo $row['mat_level']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                        <select name="material">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
         <?php
}
?>
                    <td>
                        Documents
                    </td>
         <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="document" value="<?php echo $row['doc_level']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                        <select name="document">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
         <?php
}
?>
                </tr>
               
                <tr><td>
                    Author
                    </td>
                     <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="author" value="<?php echo $row['aut']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                          <input type="text"  name="author" style="width:250px ">
                    </td>
         <?php
}
?>
                </tr>
                <tr>
                    <td>
                        Title
                    </td>
                     <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="title" value="<?php echo $row['title']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                          <input type="text"  name="title" style="width:250px ">
                    </td>
         <?php
}
?>
                </tr>
                <tr>
                    <td>
                        Search 
                    </td>
                     <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="gender" value="<?php echo $row['search']?>"></td>
            <?php
    }
}
 else {
    ?>
                    <td>
                        <input type="Radio" id="gende" name="gender"  value="Start with" >Start with
                         <input type="Radio" id="gender" name="gender"  value="Full Title" >Full Title
                         <input type="Radio" id="gender" name="gender"  value="Any Word" >AnyWord
                    </td>
         <?php
}
?>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="Radio" id="gender" name="gender"  value="End With" >End With
                        <input type="Radio" id="gender" name="gender"  value="Like" >Like
                        <input type="Radio" id="gender" name="gender"  value="All Words" >All words
                    </td>
                     
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
                     <input type="submit" name="sub">
            </td>
<?php

 }
?>
            </table>
        </form>
      
       <table border="1">
            <tr>
                <td>
                    Bib
                </td>
                <td>
                   Material
                </td>
                <td>
                    Document
                </td>
                <td>
                    Author
                </td>
                <td>
                    Title
                </td>
                <td>
                    Search Option
                </td>
                <td>
                    Action
                </td>
            </tr>
          
            <tr>
                <?php $sq="select * from check_duplicate";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                
             <td>
                    <?php echo $row['bib_level'];?>
                </td>
                <td>
                    <?php echo $row['mat_level'];?>
                </td>
                <td>
                    <?php echo $row['doc_level'];?>
                </td>
                <td>
                    <?php echo $row['aut'];?>
                </td>
                <td>
                    <?php echo $row['title'];?>
                </td>
                <td>
                    <?php echo $row['search'];?>
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
        

    </body>
    </head>
</html>
      
     </div>
  <div id="footer"></div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
