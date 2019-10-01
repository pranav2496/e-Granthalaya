<?php include'header2.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $acc=$_POST['acc'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $date1=$_POST['date1'];
    $time1=$_POST['time1'];
    $date2=$_POST['date2'];
    $date3=$_POST['date3'];
    $due=$_POST['due'];
    $collected=$_POST['collected'];
    $added=$_POST['added'];
    $code=$_POST['code'];
    $modified=$_POST['modified'];
    $no1=$_POST['no1'];
    $name1=$_POST['name1'];
    $designation=$_POST['designation'];
    $days=$_POST['days'];
    $title2=$_POST['title2'];
    $mail2=$_POST['mail2'];
    $issued1=$_POST['issued1'];
    $group=$_POST['group'];
    $phone=$_POST['phone'];
    $day=$_POST['day'];
    $date4=$_POST['date4'];
    $date5=$_POST['date5'];
 
                  
                  
    $sq="insert into add_return_renew(`return_id`,acc_no,title,author,publisher,idate,itime,rdate,rtime,ddate,redate,fdue,fcollected,dadded,ucode,dmodified,mno,mname,designation,ddays,entitlement,mail,bissued,`group`,phone,fine_days,adate,cdate) values(NULL,'$acc','$title','$author','$publisher','$date','$time','$date1','$time1','$date2','$date3','$due','$collected','$added','$code','$modified','$no1','$name1','$designation','$days','$title2','$mail2','$issued1','$group','$phone','$day','$date4','$date5')";
             mysqli_query($conn,$sq);
              
}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="demos.css">
		<script src="jquery-1.5.1.js"></script>
		<script src="jquery.ui.core.js"></script>
		<script src="jquery.ui.widget.js"></script>
		<script src="jquery.ui.datepicker.js"></script>
                <style>
                    * {
                        font-size:14px;
                    }
                </style>
                <script src="ajax1.js">
                    </script>
    </head>
        <form method="post" style="margin-top:-480px">
            
            <table style="margin-left:200px;">
                <center>
                <h1>Add Return Renew</h1>
            </center>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Acc no.
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="acc">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                       
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Title
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="title" style="width:300px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                       
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Author
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="author" style="width:200px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Publisher
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="publisher" style="width:300px">
                    </td>
                </tr>
               
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Issue Date
                    </td>
                    
                    
                   <head>
		<script>
		
			$(function() {
				$("#defen").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date" type="text" id="defen"></td> 
			</div>
		</div>
               
        
                   
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Issue Time
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="time" style="width:100px">
                    </td>
            </tr>
            <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Return Date
                    </td>
                     <head>
		<script>
		
			$(function() {
				$("#defen1").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date1" type="text" id="defen1"></td> 
			</div>
		</div>
               
        
                  
                   
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Return Time
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="time1" style="width:100px">
                               
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Due Date
                    </td>
                     <head>
		<script>
		
			$(function() {
				$("#defen3").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date2" type="text" id="defen3"></td> 
			</div>
		</div>
               
        
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Renew Date
                    </td>
                     <head>
		<script>
		
			$(function() {
				$("#defen4").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date3" type="text" id="defen4"></td> 
			</div>
		</div>
               
        
                  
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Fine due(Rs.)
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="due" style="width:80px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Fine Collected
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="collected" style="width:80px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Date Added
                    </td>
                                 <head>
		<script>
		
			$(function() {
				$("#defen5").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date4" type="text" id="defen5"></td> 
			</div>
		</div>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        User Code
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="code" style="width:100px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Date Modified
                    </td>
                     <head>
		<script>
		
			$(function() {
				$("#defen6").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date5" type="text" id="defen6"></td> 
			</div>
		</div>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Member No.
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <select name="no1" onchange="showname(this.value)">
                            <option value="">-select--</option>
                            <?php $sq="select * from add_member_record";
                            $qu=mysqli_query($conn,$sq);
                           while($fet=mysqli_fetch_assoc($qu)){
                                ?>
                            <option value="<?php echo $fet['member_no']?>"><?php echo $fet['member_no']?></option>
                            <?php
                            }
?>
                        </select>
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Member Name
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <div id="mem"></div>
                        <div id="mem1">
                        <input type="text" name="name11" style="width:300px" id="member" readonly="true">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Designation
                    </td>
                    
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="designation" style="width:300px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Due Days
                        
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="days" style="width:80px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Entitlement
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="title2" style="width:80px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        E-mail
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="mail2">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Books Issued
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="issued1" style="width:80px">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Group
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="group" style="width:250px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Phone
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Fine Per day
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="day" style="width:100px">
                    </td>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Admission Date
                    </td>
                                 <head>
		<script>
		
			$(function() {
				$("#defen7").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date6" type="text" id="defen7"></td> 
			</div>
		</div>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Closing Date
                    </td>
                                 <head>
		<script>
		
			$(function() {
				$("#defen8").datepicker({
           changeMonth:true,
           changeYear:true,
           dateFormat:"dd MM yy"
        });
  });
		</script> 
	</head>
		<div style="width:500px; height:auto; font-size: small;">
			<div class="demo">
                            <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                <input class="text" name="date7" type="text" id="defen8"></td> 
			</div>
		</div>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" style="color:red">
                    </td>
                </tr>
                  
                
            </table>
        </form>
    </body>
    </head>
</html>