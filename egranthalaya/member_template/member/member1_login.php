<?php session_start(); 
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $sq="select * from add_member_record where member_no='".$_POST['no']."' and password='".$_POST['pass']."'";
    $qu=mysqli_query($conn,$sq);
    if(mysqli_num_rows($qu)>0)
    {
        $row=mysqli_fetch_assoc($qu);
        $_SESSION['mem']=$row['member_no'];
        $_SESSION['login']='yes';
        header('location:http://localhost/template1/member_template/member/home.php');
    }
    else {
     $var=" password invalid";
 }
}
?>
<?php include'header.php';?>
<html>
          <head>
              <body>
                  <form method="post" style="margin-bottom: 80px;">
                      <center>
                          <h1 style="color:black">Member Login</h1>
                      </center>
                      <table>
                          <tr>
                              <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                                  Member No
                              </td>
                              <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                                  <input type="text" name="no" placeholder="Enter Member No">
                              </td>
                          </tr>
                          <tr>
                              <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                                  Password
                              </td>
                              <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                                  <input type="password" name="pass" placeholder="Enter Password">
                              </td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>
                                  <input type="Submit" name="sub" style="color:red">
                              </td>
                          </tr>
                      </table>
                  </form>
              </body>
          </head>
      </html>
      
