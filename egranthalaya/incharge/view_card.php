<?php $conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_member_record";
$que=mysqli_query($conn,$sq);
while($fet=mysqli_fetch_assoc($que))
{
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
<div id="shw"style="margin-left:20px;margin-top:10px">
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
   
    <p style="margin-top:-15px">
        <?php echo "<b>Category</b>"." ".$fet['category']?>
    </p>
    <p style="margin-top:-15px">
        <b>Phone:</b> <?php echo $fet['phone']?>
    </p>
    <p style="margin-top:-15px">
        <b>Admission Date:</b> <?php echo $fet['add_date']?>
    </p>
    <p style="margin-top:-15px">
       <b>Validity Date :</b><?php echo $fet['closing_date']?> 
      
    </p>
    </div>
    <div id="shw12">
        <img src="<?php echo $fet['file']?>" height="70px" width="70px">
        <p>
            signature
        </p>
    </div>
</div>


<?php } ?>