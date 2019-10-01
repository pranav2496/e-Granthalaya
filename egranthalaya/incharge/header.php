<?php session_start();
if($_SESSION['login1']!='yes')
{
    header('location:http://localhost/template1/index1.php');
}
if(isset($_REQUEST['act']))
{
    session_unset($_SESSION['login1']);
    header('location:http://localhost/template1/index1.php');
} 
?>
<html>
    <head>
        <style>
            *
            {
                margin:0px auto;
            }
            body{
                background-colour:white;
            }
            #box22
            {
                background-color:rgb(0,97,193);
                width:1010px;
                height:25px;
                margin-top:20px;
                margin-left:70px;
                color:whitesmoke;
                
            }
           
             #box23
            {
                background-color:rgb(101,118,235);
                width:1010px;
                height:25px;
                margin-top:3px;
                margin-left:70px;
                color:whitesmoke;
                
            }
             #box26
            {
                //background-color:rgb(101,118,235);
                width:1000px;
                height:20px;
                //margin-top:3px;
                //margin-left:3px;
                color:whitesmoke;
                
                 
                
            }
        </style>
    </head>
    <body>
        <div  id="main">
        <div id="header">
           
        </div>
            
        </div>
        <div id="box2">
                    <div id="box22">
                        <center>e-Granthalaya</center>
                        
                        
                    </div>
            <div id="box3">
                            <div id="box24">
                        </div>
            <div id="box3">
                    <div id="box23">
                        <center>e-Granthalaya</center>
                        
                    </div>
                <table style="border:1px solid blue;margin-left:70px;margin-top:5px">
                              <tr>
                                  <th style="padding:5px;width:240px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/incharge/incharge_home.php"> Home</a>
                                  </th>
                                  <th style="padding:5px;width:240px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/incharge/add_subject.php"> Manage Library<a
                                  </th>
                                  <th style="padding:5px;width:240px;color:white;background-color:rgb(101,118,235)">
                                      <a href="editpassword.php">Edit Password</a>
                                  </th>
                                  <th style="padding:5px;width:240px;color:white;background-color:rgb(101,118,235)">
                                      <a href="?act=logout">Logout</a>
                                  </th>
                                  
                                  
                </table>
                 <div id="box26" style="margin-top:10px;margin-bottom: 10px;">
                        <center>
                    <img src="1.2.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="1.1.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="1.3.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="1.4.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="1.5.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="1.6.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    
                    <img src="1.7.jpg" style="margin-top:5px;margin-bottom: 5px;">
                        </center>
                