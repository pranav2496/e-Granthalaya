<?php include 'header.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $des=$_POST['des'];
    $org=$_POST['org'];
    $add=$_POST['add'];
    $add1=$_POST['add1'];
    $phone=$_POST['phone'];
    $rphone=$_POST['rphone'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $comments=$_POST['comments'];
   
    
 
                  
                  
    $sq="insert into feedback_form(feedback_id,name,des,org,oaddress,raddress,ophone,rphone,mobile_no,mail,comments)
        values(NULL,'$name','$des','$org','$add','$add1','$phone','$rphone','$mobile','$mail','$comments')";
             mysqli_query($conn,$sq);
              
}

?>

<?php include 'side_bar.php'?>    <body>
        <form method="post" style="margin-top:-120px ">
            <center> <h1 style="color:black"> Feedback Form</center>
            </h1>
        <table>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Name
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Designation
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="des">
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Organization
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="org">
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Office Address
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <textarea rows="" cols="" name="add"></textarea>
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Residential Address
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <textarea rows="" cols="" name="add1"></textarea>
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Office Phone No.
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Residential Phone No.
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="rphone">
                </td>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Mobile No.
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="mobile">
                </td >
            </tr> 
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    E-Mail Id
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <input type="text" name="mail">
                </td>
            </tr>
            <tr>
                <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
                    Comments
                </td>
                <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
                    <textarea rows="" cols="" name="comments"></textarea>
                </td>
            </tr>
            
           
                <tr>
        <td>
            
                <img src="captcha.php" style="margin-left:50px;"/>
                <div id="div8"></div>
                 </td>
               
    </tr>
         <tr>
        <td>
        enter security code as shown
        </td>
                </tr>
    <tr>
        <td>
            <input name="captcha" type="text">
        </td>
    </tr>
    <tr>
                <td>
                    <input type="submit" name="sub" style="color:red;">
                
                
                    <input type="Reset" name="set" style="color:red;">
                </td>
            </tr>
            
            
        </table>
    </form>
    </body>
    </head>
</html>