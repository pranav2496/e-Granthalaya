<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $member=$_POST['member'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $add=$_POST['add'];
    $add1=$_POST['add1'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    $mail=$_POST['mail'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $gen=$_POST['gen'];
    $date1=$_POST['date1'];
    

    if($_FILES['f1']['name'])
    {
        move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$_FILES['f1']['name']);
       $img= "images/".$_FILES['f1']['name'];
    }
 
    
  
  $sq="insert into add_member_record(member_id,member_no,member_name,category,res_add,off_add,password,rpassword,mail,age,phone,add_date,gender,closing_date,file)
        values(NULL,'$member','$name','$category','$add','$add1','$pass','$pass1','$mail','$age','$phone','$date','$gen','$date1','$img')";
             mysqli_query($conn,$sq);
              
}

?>
<?php include'header2.php';
?>
<html>
    <head>
    <body>
        <form method="post" enctype="multipart/form-data" style="margin-top:-480px">
            <table >
                <center> <h1>Add Member Record</h1></center>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        ID
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="id">
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                   
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Member No
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="member">
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Name
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="name"  id="member">
                    </td>
                   
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Category
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="category">
                    </td>
                   <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                       
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                    
                    </td>
                    
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Res.Address
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <textarea rows="" cols="" name="add"></textarea>
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Off.Address
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <textarea rows="" cols="" name="add1"></textarea>
                    </td>
                </tr>
                <tr><td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                    Password
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="password" name="pass">
                    </td>
                   
                
                <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                    Retype Password
                </td>
                <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                    <input type="password" name="pass1">
                </td>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        E-mail
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="mail">
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Age
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="age" style="width:50px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Phone
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="phone">
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Addmission Date
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="date" value="<?php echo date('d-m-Y');?>" readonly="true">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Gender
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="radio" name="gen" value="Male">Male
                        <input type="radio" name="gen"  value="Female">Female
                               
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Closing Date
                    </td>
                    <?php //$d=date('Y-m-d');
                            $st=strtotime("+5 years");
                            $d=date('d-m-Y',$st);?>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="date1" value="<?php echo $d?>" readonly="true">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Image
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="file" name="f1">
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                       
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="submit" name="sub" style="color:red;">
                    </td>
                </tr>
                
            </table>
        </form>
    </body>
    </head>
</html>