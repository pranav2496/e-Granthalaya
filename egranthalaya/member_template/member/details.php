<?php //session_start();
include 'header1.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_return_renew where mno='".$_SESSION['mem']."'";
$que=mysqli_query($conn,$sq);
?>
<table border='1'>
    <tr>
        <td>
            Id
        </td>
        <td>
            Book
        </td>
        <td>
            Issue Date
        </td>
        <td>
            Issue Time
        </td>
        <td>
            Return Date
        </td>
        <td>
            Return Time
        </td>
        <td>
            Renew Date
        </td>
        <td>
            Fine
        </td>
    </tr>
    <tr>
<?php $x=1;
while($fet=mysqli_fetch_assoc($que))
{
   ?>
        <td>
            <?php echo $x?>
        </td>
        <td>
            <?php echo $fet['title'];?>
        </td>
        <td>
            <?php echo $fet['idate'];?>
        </td>
        <td>
            <?php echo $fet['itime'];?>
        </td>
        <td>
            <?php echo $fet['rdate'];?>
        </td>
        <td>
            <?php echo $fet['itime'];?>
        </td>
        <td>
            <?php if($fet['redate']=='')
            {
                echo "None Renewed";
           }
 else {
     echo $fet['redate'];
 }?>
        </td>
        <td>
            <?php if($fet['fdue']=='')
            {
                echo "No due";
             }
 else {
     echo $fet['fdue'];
 }
            ;?>
        </td>
       
    </tr>
        <?php $x++;
}

?>
</table>
 