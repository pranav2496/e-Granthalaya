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
    $code=$_POST['code'];
    $name=$_POST['name'];
    
 //  if(!($code)&&!empty($name))
   //{
 
$sq="insert into add_bib(bib_id,bib_code,bib_name)
        values(NULL,'$code','$name')";
             mysqli_query($conn,$sq);
       /*      }
 else {
        echo "fields are empty";
    }*/
}


if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_bib where bib_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=  mysqli_fetch_assoc($qu);
    }
}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_bib where bib_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:add_bibliographic.php');
    }
}
if(isset($_POST['update']))
{
     $code=$_POST['code'];
    $name=$_POST['name'];

    
    
$sq="update add_bib set bib_code='$code',bib_name='$name' where bib_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:add_bibliographic.php');
        
        
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
                <h2>Bibliographic Level</h2>
                <div class="block">
                     <form method="post" style="margin-top:0px">
            
       
            <table>
       
        <tr>
            <td>
                CODE
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="code" value="<?php echo $row['bib_code']?>"></td>
            <?php
    }
}
 else {
    ?>
            <td>
                <input type="text" name="code" placeholder="Enter Code">
            </td>
          <?php
}
?>
            
        </tr>
        <tr>
           
            <td>
                NAME
            </td>
            <?php 
            if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        ?><td><input type="text" name="name" value="<?php echo $row['bib_name']?>"></td>
            <?php
    }
}
 else {
    ?>
            <td>
                <input type="text" name="name" placeholder="Enter Name">
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
        
    </table>
</form>
        <table style="border:1px solid black; width:auto;height:auto;">
            <tr>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Id
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                     Code
                </td>
                
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                     Name
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    Action
                </td>

            </tr>
            <tr>
                <?php $sq="select * from add_bib";
                $qu=mysqli_query($conn,$sq);
                while($row=mysqli_fetch_assoc($qu))
                 {
                        ?>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['bib_id'];?>
                </td>
             <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['bib_code'];?>
                </td>
                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <?php echo $row['bib_name'];?>
                </td>
                 

                <td style="padding:2px;font-size:15px; border-right:1px solid black;border-bottom:1px solid black;">
                    <a href="?act=edit&&id=<?php echo $row['bib_id']?>">Edit</a>|
                    <a href="?act=del&&id=<?php echo $row['bib_id']?>">Delete</a>
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
            Copyright <a href="#">e-Granthalaya</a>. 
        </p>
    </div>
</body>
</html>
