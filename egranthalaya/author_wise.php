<?php include'header.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
?>
<html>
    <head>
        <?php include'side_bar.php';
        ?>
    <body>
        <form method="post" style="margin-top:-120px; ">
            <center><h1 style="color:black;">Author Wise</h1> 
            </center>
            <table>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Author
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <select name="author" style="width:150px">
                    <option value=""></option>
                    <?php
                    $sq="select * from add_authors";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['ath_name']?>"><?php echo $row['ath_name']?></option>
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
                        <input type="submit" name="sub" style="color:red;">
                    </td>
                </tr>
                </table>
        </form>
        <?php
        if(isset($_POST['sub']))
{
    $sq="select * from add_books where author='".$_POST['author' ]. "'";  
   $qu=mysqli_query($conn,$sq);
   $cou=mysqli_num_rows($qu);
    
?>
        <h5 style="color:black;margin-left:200px">Total : <?php echo $cou." "."books";?></h1>
<table border="1">
    <tr>
        <td>
            Title
        </td>
        <td>
            Cat No
        </td>
        <td>
            View Details
        </td>
    </tr>
    <tr>
<?php
   while($fet=mysqli_fetch_assoc($qu))
   {
       ?>
        <td>
            <?php echo $fet['title']?>
        </td>
        <td>
            <?php echo $fet['cat']?>
        </td>
        <td>
            <a href="view_details.php?id=<?php echo $fet['book_id']?>">View Details</a>
        </td>
    </tr>

<?php
   }
   
}
?>
    </table>

        
    </body>
    </head>
</html>
