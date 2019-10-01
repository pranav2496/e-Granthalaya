<?php
/*$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $cat=$_POST['cat'];
    $search=$_POST['search'];
    $title=$_POST['title'];
    $author1=$_POST['author1'];
    $author2=$_POST['author2'];
    $corp=$_POST['corp'];
    $total=$_POST['total'];
    $pub=$_POST['pub'];
    $id=$_POST['id'];
    $catno=$_POST['catno'];
    $pro=$_POST['pro'];
    $app=$_POST['app'];
    $date=$_POST['date'];
    $volume=$_POST['volume'];
    $memo=$_POST['memo'];
    $memodate=$_POST['memodate'];
    $proposed=$_POST['proposed'];
    $currency=$_POST['currency'];
    $price=$_POST['price'];
    $setprice=$_POST['setprice'];
    $dateadded=$_POST['dateadded'];
    $modified=$_POST['modified'];
    if(!empty($cat)&&!empty($search)&&!empty($title)&&!empty($author1)&&!empty($author2)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email)&&!empty($email))
    {
    $sq="insert into gen_aqu(gen_id,cat,search,title,aut1,aut2,corp,multi,total,pub,acq,catno,process,appno,appdate,volume,memono,memodate,copy,currency,itemprice,steprice,date,modified)
     values(NULL,'$cat','$search','$title','$author1','$author2','$corp','$total','$pub','$id','$catno','$pro','$app','$date','$volume,'$memo','$memodate,'$proposed','$currency','$price','$setprice','$dateadded','$modified)";
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
        $sq="select * from gen_aqu where gen_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=mysqli_fetch_assoc($qu);
      //header('location:add_subject.php');
    }
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from gen_aqu where gen_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:generate_acquisition.php');
    }
}
if(isset($_POST['update']))
{
     $cat=$_POST['cat'];
    $search=$_POST['search'];
    $title=$_POST['title'];
    $author1=$_POST['author1'];
    $author2=$_POST['author2'];
    $corp=$_POST['corp'];
    $total=$_POST['total'];
    $pub=$_POST['pub'];
    $id=$_POST['id'];
    $catno=$_POST['catno'];
    $pro=$_POST['pro'];
    $app=$_POST['app'];
    $date=$_POST['date'];
    $volume=$_POST['volume'];
    $memo=$_POST['memo'];
    $memodate=$_POST['memodate'];
    $proposed=$_POST['proposed'];
    $currency=$_POST['currency'];
    $price=$_POST['price'];
    $setprice=$_POST['setprice'];
    $dateadded=$_POST['dateadded'];
    $modified=$_POST['modified'];
    
$sq="update gen_acu set cat='$cat',search='$search',title='$title',aut1='$author1',aut2='$author2',corp='$corp',total='$total',pub='$pub',acq='$id',catno='$catno',process='$pro',appno='$app',appdate='$date',volume='$volume',memono='$memo',memodate='$memodate',copy='$proposed',currency='$currency',itemprice='$price',setprice='$setprice',dateadded='$dateadded',datemodified='$datemodified' where ven_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:generate_acquisition.php');
        
        
} */  

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
      
        <html>
    <head>
    <body>
     <form method="post" style="margin-top:0px">
            <h1 style="margin-top:0px;float:none;">Generate acquisition</h1>

          
            <table>
                <tr>
                    <td>
                        Cat No
                    </td>
                     <?php 
       /*     if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="name" value="<?php echo $row['ven_name']?>"></td>
            <?php
    }
}
 else {
    ?>

                    <td>
                        <input type="text" name="cat" >
                    </td>
                    
                    <td>
                        Search
                    </td>
         <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="name" value="<?php echo $row['ven_name']?>"></td>
            <?php
    }
}
 else { */
    ?>

                    <td>
                        <input type="text" name="search" style="width:200px">
                    </td>
                    <td>
                        <select name="" style="width:200px">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="sub" value="Search">
                    </td>
                </tr>
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <input type="text" name="title" style="width:300px"
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Author1
                    </td>
                    <td>
                        <input type="text" name="author1" >
                    </td>
                    <td>
                        Author2
                    </td>
                    <td>
                        <input type="text" name="author2">
                    </td>
                </tr>
                <tr>
                    <td>
                        Corp Author
                    </td>
                    <td>
                        <input type="text" name="corp" style="width:200px">
                    </td>
                </tr>
                <tr>
                    <td>
                        Multi-Vol
                    </td>
                    <td>
                        <input type="text" name="multi" style="width:50px">
                    </td>
                    <td>
                        Total-Vol
                    </td>
                    <td>
                        <input type="text" name="total" style="width:100px">
                    </td>
                    <td>
                        Publisher
                    </td>
                    <td>
                        <input type="text" name="pub" style="width:250px">
                    </td>
                </tr>
                <tr>
                    <td>
                        Acq ID
                    </td>
                    <td>
                        <input type="text" name="id">
                    </td>
                    <td>
                        Cat No
                    </td>
                    <td>
                        <input type="text" name="catno">
                    </td>
                    <td>
                        Process Status
                    </td>
                    <td>
                        <input type="text" name="status" >
                    </td>
                </tr>
                <tr>
                    <td>
                        APP NO
                    </td>
                    <td>
                        <input type="text" name="app" style="width:150px">
                    </td>
                    <td>
                        APP Date
                    </td>
                    <td>
                        <input type="text" name="date" style="width:90px">
                    </td>
                    <td>
                        Volume
                    </td>
                    <td>
                        <input type="text" name="volume" style="width:70px">
                    </td>
                </tr>
                <tr>
                    <td>
                        Memo No
                    </td>
                    <td>
                        <input type="text" name="memo" style="width:250px">
                    </td>
                    <td>
                        Memo Date
                    </td>
                    <td>
                        <input type="text" name="memodate" >
                    </td>
                    <td>
                        Copy Proposed
                    </td>
                    <td>
                        <input type="text" name="proposed" style="width:60px">
                    </td>
                </tr>
                <tr>
                    <td>
                        Currency
                    </td>
                    <td>
                        <select name="currency" style="width:200px">
                            <option value=""></option>
                             <option value="Indian Rupees">Indian Rupees</option>
                        </select>
                    </td>
                    <td>
                        Item Price
                    </td>
                    <td>
                        <input type="text" name="price">
                    </td>
                    <td>
                        Set Price
                    </td>
                    <td>
                        <input type="text" name="setprice">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Added
                    </td>
                    <td>
                        <input type="text" name="dateadded">
                    </td>
                    <td>
                        Date Modified
                    </td>
                    <td>
                        <input type="text" name="modified">
                    </td>
                </tr>
                
            </table>
       
      </div>
  <div id="footer"></div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
