<?php include 'header.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
?>
  
<html>
    <head>
    <body>
        <?php include'side_bar.php';
        ?>
 
        <form method="post" style="margin-top: -120px;">
            <center> <h1 style="color:black"> Add Subject
                </h1></center>
            <table>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Subject
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <select name="subject" style="width:150px" >
                    <option value=""></option>
                    <?php
                    $sq="select * from add_subject";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['subject_heading']?>"><?php echo $row['subject_heading']?></option>
                    <?php
                    }
                    ?>
                    
                </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="submit" name="sub" style="color:red">
                    </td>
                </tr>
                </table>
        </form>
        <?php 
        if(isset($_POST['sub']))
{
   $sq="select * from add_books where subject='".$_POST['subject']. "'";  
   $qu=mysqli_query($conn,$sq);
   $row=mysqli_num_rows($qu);
?>
<h5 style="color:black;margin-left:200px">Total : <?php echo $row." "."books";?></h1>
<table border="1" style="width:600px;">
    <tr>
        <td style="padding:10px;background-color:rgb(101,118,235)">
            Title
        </td>
        <td style="padding:10px;background-color:rgb(101,118,235)">
            Cat No
        </td>
        <td style="padding:10px;background-color:rgb(101,118,235)">
            View Details
        </td>
    </tr>
    <tr>
<?php
   while($fet=mysqli_fetch_assoc($qu))
   {
       ?>
        <td style="padding:10px;background-color:rgb(214,215,252)">
            <?php echo $fet['title']?>
        </td>
        <td style="padding:10px;background-color:rgb(214,215,252)">
            <?php echo $fet['cat']?>
        </td>
        <td style="padding:10px;background-color:rgb(214,215,252)">
            <a href="view_details.php?id=<?php echo $fet['book_id']?>">View Details</a>
        </td>
    </tr>

<?php
   }
   
}
?>
    </body>
    </head>
</html>
