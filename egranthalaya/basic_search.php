<?php include'header.php';
$conn=mysqli_connect("localhost","root","","egranthalaya");
?>
<html>
    <head>
       
    <?php include 'side_bar.php';
   ?>
        <form method="post" style="margin-top:-120px">
            <center>
                <h1 style="color:black">Basic Search</h1>
            </center>
            <table>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Bib Level
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <select name="bib" style="width:100px" >
                    <option value="">-----select-----</option>
                    <?php
                    $sq="select * from add_bib";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['bib_name']?>"><?php echo $row['bib_name']?></option>
                    <?php
                    }
                    ?>
                    
                </select>

                    </td>
                </tr>
                    <td>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Material Level
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <select name="materials" style="width:100px">
                    <option value="">-----select-----</option>
                    <?php
                    $sq="select * from add_mat";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['mat_name']?>"><?php echo $row['mat_name']?></option>
                    <?php
                    }
                    ?>
                    
                </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        Title
                    </td>
                    <td style="padding:5px;width:156px;color:white;background-color:rgb(101,118,235)">
                        <input type="text" name="title" style="width:250px" placeholder="Enter Title">
                    </td>
                </tr>
                <tr><td></td>
                    
                    
                    <td>
                        <input type="submit" name="sub" style="color:red;">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        
        
        
        if(isset($_POST['sub']))
{
   $sq="select * from add_books where bib='".$_POST['bib']."' and material='".$_POST['materials']."' and title='".$_POST['title']."'";
    $qu=mysqli_query($conn,$sq);
    $cou=mysqli_num_rows($qu);
    
?>
<h1>Total : <?php echo $cou;?></h1>
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