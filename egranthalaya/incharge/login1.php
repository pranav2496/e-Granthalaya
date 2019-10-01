<?php session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
   $sq="select * from add_users where user_name='".$_POST['user']."' and password='".$_POST['pass']."'";
        
        $qu=mysqli_query($conn,$sq);
        if(mysqli_num_rows($qu)>0)
        {
            $row=  mysqli_fetch_assoc($qu);
            $_SESSION['user']=$row['user_name'];
            header('location:add_authors.php');
        }
 else {
     $var="username or password invalid";
 }
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
  <div>
      
      <html>
    <head>
    <body>
     <form method="post" style="margin-top:0px">
            <h1 style="margin-top:0px;float:none;">Login</h1>

            <table>
             
    <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="user" placeholder="Enter Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="pass" placeholder="Enter Password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="sub">
                    </td>
                </tr>
                <tr>
                    <?php if(isset($_POST['sub']))
                    {
                        echo $var;
                    }
?>
                </tr>
            </table>
        </form>
    </body>
    </head>
</html>
  </div>

  <div id="footer"></div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
