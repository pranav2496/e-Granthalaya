<?php include 'auth.php';
if(isset($_REQUEST['act'])){
    if($_REQUEST['act']=='logout'){
        session_unset($_SESSION['login']);
        header('location:admin_login.php');
    }
}
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $user1=$_POST['user1'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $code=$_POST['code'];
    if(!($user1)&&!empty($name)&&!empty($pass)&&!empty($code))
    {
  if(is_array($_POST['act']));
{
   $issue=implode(",",$_POST['act']);
} 
$sq="insert into add_users(user_id,user_code,user_name,password,lib_code,active_permission)
        values(NULL,'$user1','$name','$pass','$code','$issue')";
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
        $sq="select * from add_users where user_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=  mysqli_fetch_assoc($qu);
    }
}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_users where user_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:lib_incharge.php');
    }
}
if(isset($_POST['update']))
{
     $user1=$_POST['user1'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $code=$_POST['code'];
    $act=$_POST['act'];
    
    
$sq="update add_users set user_code='$user1',user_name='$name',password='$pass',lib_code='$code' where user_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:lib_incharge.php');
        
        
}   


?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    </div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            
                            <li><a href="?act=logout">Logout</a></li>
                        </ul>
                        <br />
                     
              
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
               <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Category</a>
                            <ul class="submenu">
                                 <li><a href="admin_dashboard.php">Home</a> </li>
                                <li><a href="add_bibliographic.php">Bib Level</a></li>
                                <li><a href="add_materials.php">Material Level</a></li>
                                <li><a href="lib_incharge.php">Add Users</a> </li>
                                <li><a href="libraby_details.php">Add Library</a> </li>
                              
                                
                              
                            </ul>
                        </li>
                     
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
            <div class="box round first" style="height:500px">
                <h2>Add Users</h2>
                <div class="block">
                       <form method="post" style="margin-top:0px">
            

            <table>
        
        <tr>
            <td>
                User Code<br></br>
            </td>
             <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="user1" value="<?php echo $row['user_code']?>"></td>
            <?php
    }
}
 else {
    ?>
 
            <td>
                <input type="text" name="user1" placeholder="Enter User Code">
            </td>
        <?php
}
?>
        </tr>
        <tr>
           
            <td>
                User Name<br></br>
            </td>
            
             <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="name" value="<?php echo $row['user_name']?>"></td>
            <?php
    }
}
 else {
    ?>
 
            <td>
                <input type="text" name="name" placeholder="Enter User Name">
            </td>
        <?php
}
?>
        </tr>
        <tr>
            <td>
                Password<br></br>
            </td>
            
             <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="password" name="pass" value="<?php echo $row['password']?>"></td>
            <?php
    }
}
 else {
    ?>
 
            <td>
                <input type="password" name="pass" placeholder="Enter Password">
               
  <?php
}
?>                      
                           
            
            </td>
        </tr>
        
        <tr>
            <td>
                Library Code<br></br>
            </td>
            
             <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="code" name="code" value="<?php echo $row['lib_code']?>"></td>
            <?php
    }
}
 else {
    ?>
            <td>
                <select name="code" >
                    <option value="">-select-</option>
                    <?php
                    $sq="select * from manage_lib";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['lib_code']?>"><?php echo $row['lib_code']?></option>
                    <?php
                    }
                    ?>
                    
                </select>
               
            </td>
        <?php
}
?>
        </tr>
        <tr>
            <td>
                Action Permission<br></br>
            </td>
            
             <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="chekbox" name="act" value="<?php echo $row['active_permission']?>"></td>
            <?php
    }
}
 else {
    ?>
 
            <td>
                <input type="checkbox" name="act[]" value="issue" placeholder="Enter Active Permission">Issue
                    <input type="checkbox" name="act[]" value="return">return
                        <input type="checkbox" name="act[]" value="reserve">Reserve
                            <input type="checkbox" name="act[]" value="search">Search
            </td>
        
        <?php
}
?>
        </tr>
        <tr>      
      <?php if(isset($_REQUEST['act']))
      {
          if($_REQUEST['act']=='edit')
          {
              ?>
            <td>
                <input type="submit" name="update"value="update">
            </td>
            <?php
          }
      }
      else
      {
?>
            <td>
                     <input type="submit" name="sub">
                         
                      
            </td>
      <?php } ?>
        </tr>
        <tr>
            
        </tr>
        
    </table>
            
            
</form>
        <table style="border:1px solid black; width:auto;height:auto;">
            <tr>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    user id
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    user code
                </td>
                
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    user name
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    password
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    library code
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    active permission
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Action
                </td>

            </tr>
            <tr>
                <?php $sq="select * from add_users";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['user_id'];?>
                </td>
             <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['user_code'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['user_name'];?>
                </td>
                 <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['password'];?>
                </td>
                 <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['lib_code'];?>
                </td>
                 <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['active_permission'];?>
                </td>




                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <a href="?act=edit&&id=<?php echo $row['user_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['user_id']?>">Delete</a>
                </td>
            </tr>
                    <?php
                    }
                    ?>

        </table>

                  </div>

                    </form>
                
            </div>
           
        </div>
        
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright <a href="#">BlueWhale Admin</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>

