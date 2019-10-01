<?php //session_start();
include 'header1.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_member_record where member_no='".$_SESSION['mem']."'";
$que=mysqli_query($conn,$sq);
$fet=mysqli_fetch_assoc($que);
?>
<style>
    #shw
    {
        border:2px solid blue;
        width:380px;
        height:250px;
        border-radius:10px;
        float:left;
    }
    #shw11
    {
        border:2px;
        width:180px;
        height:127px;
        float:left;
    }
    #shw12
    {
        margin-left:20px;
        border:2px;
        width:180px;
        height:127px;
        float: left;
    }
    #shw1
    {
        margin-top:-35px;
        margin-left:60px;
        border:2px solid blue;
        width:400px;
        height:250px;
        border-radius:10px;
        float:left;
     
    }
</style>
<div id="shw"style="margin-left:500px;margin-top:40px">
    <center><h4 style="color:red;">
        <?php echo $fet['member_name']?>
        </h4>
       
        <p>
            Library Card
        </p>
        
    </center>
    <div id="shw11">
    <p>
        <?php echo "<b>Member Id:</b>"." ".$fet['member_no']?>
    </p>
    <br><br>
    <p style="margin-top:-15px">
        <?php echo "<b>Category</b>"." ".$fet['category']?>
    </p><br>
    <br>
    <p style="margin-top:-15px">
        <b>Phone:</b> <?php echo $fet['phone']?>
    </p><br><br>
    <p style="margin-top:-15px">
        <b>Admission Date:</b> <?php echo $fet['add_date']?>
    </p><br>
    <br>
    <p style="margin-top:-15px">
       <b>Validity Date :</b><?php echo $fet['closing_date']?> 
      
    </p><br>
    </div>
    <div id="shw12">
        <img src="../member/<?php echo $fet['file']?>"   style="margin-top:20px;" height="70px" width="70px">
        <p>
            signature
        </p>
    </div>
    <input type="button" onclick="window.print()" value="Print" style="margin-top:120px;margin-left:150px">
</div>
