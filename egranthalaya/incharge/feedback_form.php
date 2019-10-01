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


<html>
    <head>
             <table style="border:1px solid blue; margin-left:-180px ">
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <a href="http://localhost/template1/basic_search.php"> Basic Search</a>
                </td>
            </tr>
           
           
            
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <a href="http://localhost/template1/subject_wise.php"> Subject-Wise</a>
                </td>
            </tr>
           
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                   <a href="http://localhost/template1/publisher_wise.php">Publisher-Wise </a> 
                </td>
            </tr>
            
            <tr>
                <td style="padding:5px;width:120px;color:white;background-color:rgb(101,118,235)">
                    <a href="http://localhost/template1/author_wise.php"> Author-Wise</a>
                </td>
            </tr>
            
        </table>
    </form>
    <body>
    <form method="post">
        <table>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Designation
                </td>
                <td>
                    <input type="text" name="des">
                </td>
            </tr>
            <tr>
                <td>
                    Organization
                </td>
                <td>
                    <input type="text" name="org">
                </td>
            </tr>
            <tr>
                <td>
                    Office Address
                </td>
                <td>
                    <textarea rows="" cols="" name="add"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Residential Address
                </td>
                <td>
                    <textarea rows="" cols="" name="add1"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Office Phone No.
                </td>
                <td>
                    <input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    Residential Phone No.
                </td>
                <td>
                    <input type="text" name="rphone">
                </td>
            <tr>
                <td>
                    Mobile No.
                </td>
                <td>
                    <input type="text" name="mobile">
                </td>
            </tr> 
            <tr>
                <td>
                    E-Mail Id
                </td>
                <td>
                    <input type="text" name="mail">
                </td>
            </tr>
            <tr>
                <td>
                    Comments
                </td>
                <td>
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
                    <input type="submit" name="sub">
                
                
                    <input type="Reset" name="set">
                </td>
            </tr>
            
            
        </table>
    </form>
    </body>
    </head>
</html>