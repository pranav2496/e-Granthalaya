<?php include 'header.php';
 $conn=  mysqli_connect("localhost","root","","egranthalaya");
$sq="select * from add_books where book_id='".$_GET['id']."'";
$qu=mysqli_query($conn,$sq);
$fet=mysqli_fetch_assoc($qu);

?>
 <table style="border:1px solid blue; margin-left:-70px">
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Basic Search
                </td>
            </tr>
           
           
            
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Subject-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Year-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                   Publisher-Wise 
                </td>
            </tr>
            
            <tr>
                <td style="padding:5px;width:120px;color:white;background-color:rgb(101,118,235)">
                    Author-Wise
                </td>
            </tr>
            <tr>
                <td style="padding:5px;width:120px;color:white;background-color:rgb(101,118,235)">
                    Recent Arrivals
                </td>
            </tr>
        </table>
<center>
<table style="margin-top:-180px;margin-left:100px;">
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Cat No
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
            <?php echo $fet['cat']?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Book Title
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
            <?php echo $fet['title'] ?>
        </td>
    </tr>
    
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
           Author(s) 
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
              <?php echo $fet['title'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
          Bib Level  
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['bib'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Material Level
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['material'] ?>
        </td>
    </tr>
    
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Language
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['language'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Place
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['place'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Publisher
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['publisher'] ?>
        </td>
    </tr>
    
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Year
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['year'] ?>
        </td>
    </tr>
   
    
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Date Added
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['date'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            subject
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
             <?php echo $fet['subject'] ?>
        </td>
    </tr>
    <tr>
        <td style="background-color:rgb(130,130,130);width:250px;height:20px;padding:10px;">
            Abstract
        </td>
        <td style="background-color:rgb(226,226,226);width:400px;height:20px;padding:10px;">
            <?php echo $fet['abstract'] ?>
            
        </td>
    </tr>
    
</table>
</center>