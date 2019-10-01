<?php session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    //$_SESSION['Library']=$_POST['Library'];
    $sq="select * from add_users where lib_code='".$_POST['lib']."'";
    $qu=mysqli_query($conn,$sq);
    if(mysqli_num_rows($qu))
    {
    $fet=mysqli_fetch_assoc($qu);
    $_SESSION['lib']=$fet['lib_code'];
    header('location:index1.php');    
    }
    
}

?>
<html>
    <head>
        <style>
            body{
                background-image:url('1.jpg');
            }
            #main{
                margin:0px;
                paddiing:0px;
            width:1340px;
            height:800px;
            border:2px solid blue;
            }
            #header{
                width:1340px;
                height:150px;
                background-image:url('body_bg.jpg');
                font-size:50px;
            }
            #head{
                background-color:gray;
                width:1340px;
                height:20px;
            }
            #content{
                width:1340px;
                height:500px;
            }
            #box1
            {
                border:2px solid blue;
                width:400px;
                height:500px;
                float:left;
            }
            #box11
            {
                background-color:rgb(101,118,235);
                width:400px;
                height:20px;
            }
            #box2{
               //border:2px solid blue;
                width:531px;
                height:495px;
                float:left; 
            }
            #box22
            {
                background-color:rgb(0,97,193);
                width:525px;
                height:25px;
                margin-top:20px;
                margin-left:3px;
                color:whitesmoke;
                
            }
             #box23
            {
                background-color:rgb(101,118,235);
                width:525px;
                height:25px;
                margin-top:3px;
                margin-left:3px;
                color:whitesmoke;
                
            }
             #box24
            {
                background-color:rgb(101,118,235);
                width:525px;
                height:20px;
                margin-top:3px;
                margin-left:3px;
                color:whitesmoke;
                
            }
             #box25
            {
                background-color:rgb(101,118,235);
                width:525px;
                height:20px;
                margin-top:3px;
                margin-left:3px;
                color:whitesmoke;
                
            }
            #box26{
                width:525px;
                margin-top:15px;
                border-bottom:1px solid gray;
                border-top:1px solid gray;
                margin-left:5px;
            }
            #box3{
               border:2px solid blue;
                width:400px;
                height:500px;
                float:left; 
            }
            #footer{
                width:1340px;
                height:129px;
                background-image:url('body_bg.jpg');
                font-size:50px;
            }
        </style>
    </head>
    <body>
        <div id="main">
        <div id="header">
            <center> e-Granthalaya
            </center>
        </div>
            <div id="head">
                
            </div>
            <div id="content">
                <div id="box1">
                    <div id="box11">
                        <br>
                        <div><pstyle="word-spacing:10px;">Librarians  need  to  be  aware  of  the many aspects of library management 
                            softwares and have a clear idea of the gaps in their library’s requirements so that 
                            they can form a proper technological plan for computerising and upgrading their libraries. 
                            Speaking to the participants on the need and importance of library automation and networking in 
                            the digital era, he talked the participants through the technical details of various library management 
                            softwares and introduced them to ‘eGranthalaya’ - the free library automation and networking . </p></div>  
                        
                    </div>
                </div>
                <div id="box2">
                    <div id="box22">
                        <center>e-Granthalaya</center>
                        
                    </div>
                    <div id="box23">
                        <center>
                            <form method="post">
                        <table>
                            <tr>
                                <td style="margin-left:-40px">
                                    Library
                                </td>
                                <td>
                                    <select name="lib" style="width:220px;margin-left:20px;">
                                        <option value="">---------------select library-----------------</option>
                                           <?php
                   $sq="select * from manage_lib";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['lib_code']?>"><?php echo $row['lib_name']?></option>
                    <?php
                    }
                    ?>
                    
                                    </select>
                                </td>
                            </tr>
                        
                    </table>
                        </center>
                    </div>
                     <div id="box24">
                         <center>
                             <input type="submit" name="sub" value="Submit" style="height:20px;">
                         </center>
                        
                    </div>
                            </form>
                     <div id="box25">
                         <center><i>Select Library from drop down and submit</i></center>
                        
                    </div>
                    <div id="box26">
                    <img src="2.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    </div>
                    <div id="box26">
                        <center>
                    <img src="3.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="4.jpg" style="margin-top:5px;margin-bottom: 5px;">
                    <img src="5.jpg" style="margin-top:5px;margin-bottom: 5px;">
                        </center>
                    </div>
                </div>
                <div id="box3">
                      <div id="box11">
                          
                        
                    </div>
                    <table style="border:1px solid blue;">
                              <tr>
                                  <th style="padding:5px;width:120px;background-color:gray">
                                      Library
                                  </th>
                                  <th style="padding:5px;width:120px;background-color:gray">
                                      Holdings
                                  </th>
                                  <th style="padding:5px;width:120px;background-color:gray">
                                      Members
                                  </th>
                              </tr>
                               <tr>
                                  <th>
                                      Lib1
                                  </th>
                                  <th>
                                      Holdings
                                  </th>
                                  <th>
                                      30
                                  </th>
                              </tr>
                               <tr>
                                  <th>
                                      Lib2
                                  </th>
                                  <th>
                                      Holdings
                                  </th>
                                  <th>
                                      35
                                  </th>
                              </tr>
                               <tr>
                                  <th>
                                      Lib3
                                  </th>
                                  <th>
                                      Holdings
                                  </th>
                                  <th>
                                      40
                                  </th>
                              </tr> <tr>
                                  <th>
                                      Lib4
                                  </th>
                                  <th>
                                      Holdings
                                  </th>
                                  <th>
                                      45
                                  </th>
                              </tr>
                              
                          </table>
                     <div id="box11" style="margin-top:20px;">
                          
                        
                    </div>
                </div>
               
            </div>
            <div id="footer">
                
            </div>
        </div>
    </body>
</html>