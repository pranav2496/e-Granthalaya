<?php session_start();
if($_SESSION['login']!='yes')
{
    header('location:http://localhost/template1/index1.php');
}
if(isset($_REQUEST['act']))
{
    session_unset($_SESSION['login']);
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
                margin-left:150px;
                color:whitesmoke;
                
            }
           
             #box23
            {
                background-color:rgb(101,118,235);
                width:1010px;
                height:25px;
                margin-top:3px;
                margin-left:150px;
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
                <table style="border:1px solid blue;margin-left:150px;margin-top:5px">
                              <tr>
                                 
                                  <th style="padding:5px;width:190px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/member_template/member/home.php"> Home<a
                                  </th>
                                  
                                   
                                   <th style="padding:5px;width:190px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/member_template/member/edit_profile.php">Edit Password</a>
                                  </th>
                                   <th style="padding:5px;width:190px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/member_template/member/print_lib_card.php">Print Library Card</a>
                                  </th>
                                  <th style="padding:5px;width:190px;color:white;background-color:rgb(101,118,235)">
                                      <a href="http://localhost/template1/member_template/member/details.php">View Return/Issue details</a>
                                  </th>
                                   <th style="padding:5px;width:190px;color:white;background-color:rgb(101,118,235)">
                                      <a href="?act=logout">Logout</a>
                                  </th>
                                 

                                 

                                 
                                  
                </table>
                
            </body>
            </html>