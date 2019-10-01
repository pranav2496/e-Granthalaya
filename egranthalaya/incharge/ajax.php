<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_member_record where member_no='$_REQUEST[q]'";
$fet=  mysqli_fetch_assoc(mysqli_query($conn,$sq));

 ?>

<input type="text" name="name1" style="width:300px" id="member" value="<?php echo $fet['member_name']; ?>">