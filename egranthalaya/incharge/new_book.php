<?php
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    //$library=$_POST['library'];
    $title=$_POST['title'];
    $cat=$_POST['cat'];
    $bib=$_POST['bib'];
    $materials=$_POST['materials'];
    $Language=$_POST['Language'];
    $author1=$_POST['author1'];
    $author2=$_POST['author2'];
    $author3=$_POST['author3'];
    $year=$_POST['year'];
    $publisher=$_POST['publisher'];
    $place=$_POST['place'];
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $abs=$_POST['abs'];

    
 
    
  if($sq=mysqli_fetch_assoc(mysqli_query($conn,"select * from add_books where title='".$_POST['title']."'")))
  {
 echo "data exists";
}
 else {
$sq="insert into add_books(book_id,title,cat,bib,material,language,author1,author2,author,year,publisher,place,date,subject,abstract)
        values(NULL,'$title','$cat','$bib','$materials','$Language','$author1','$author2','$author3','$year','$publisher','$place','$date','$subject','$abs')";
             mysqli_query($conn,$sq);
              
     
}
}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='edit')
    {
        $sq="select * from add_books where book_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
        $row=  mysqli_fetch_assoc($qu);
    }
}

if(isset($_REQUEST['act']))
{
    if($_REQUEST['act']=='del')
    {
        $sq="delete from add_books where book_id='".$_GET['id']."'";
        $qu=  mysqli_query($conn, $sq);
      header('location:new_book.php');
    }
}
if(isset($_POST['update']))
{
     
      $library=$_POST['library'];
    $title=$_POST['title'];
    $cat=$_POST['cat'];
    $bib=$_POST['bib'];
    $materials=$_POST['materials'];
    $Language=$_POST['Language'];
    $author1=$_POST['author1'];
    $author2=$_POST['author2'];
    $author3=$_POST['author3'];
    $year=$_POST['year'];
    $publisher=$_POST['publisher'];
    $place=$_POST['place'];
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $abs=$_POST['abs'];

    
$sq="update add_books set library='$library',title='$title',cat='$cat',bib='$bib',material='$materials',Language='$Language' author1='$author1,author='$author2',author3='$author',year='$year',publisher='$publisher',place='$place',date='$date',subject='$subject',abstract='$abs' where book_id='".$_GET['id']."' ";
mysqli_query($conn,$sq);
header('location:new_book.php');
        
        
}   


?>
<?php 
if(isset($_POST['search']))
{
    $sq="select * from add_books where title='".$_POST['title']."'";
    $fet=  mysqli_fetch_assoc(mysqli_query($conn,$sq));
            
}
?>
<?php include'header2.php';
?>


<html>
    <head>
    <body>
        <form method="post" style="margin-top:-480px;">
            <center><h1>Add Books</h1>
            </center>
            <table>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    </td>
                    
                    <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Title
                    </td>
  <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="cat" value="<?php echo $fet['title']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td  style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="title" style="width:250px">
                    </td>
                    <?php } ?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="submit" name="search" value="Search">
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Cat No
                    </td>
                    <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="cat" value="<?php echo $fet['cat']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="cat">
                  </td>  <?php } ?>   
                    
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Bib Level
                    </td>
                       <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="bib" value="<?php echo $fet['bib']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                      <select name="bib" >
                    <option value="">-select-</option>
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

                        
                       
                        
                    </td><?php } ?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Materials Type
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="materials" value="<?php echo $fet['material']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                       <select name="materials" >
                    <option value="">-select-</option>
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

                           
                         
                         
                       
                    </td><?php } ?>
                  
                <tr>
                    
                        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                            Language
                        </td>
                         <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="Language" value="<?php echo $fet['language']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                        <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                            <select name="Language">
                                <option value="">-select-</option>
                                <option value="Hindi">Hindi</option>
                                <option value="English">English</option>
                            </select>
                        </td>
                    <?php } ?>                                     </tr>
                
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Author1
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="author1" value="<?php echo $fet['author1']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                      <select name="author1" >
                    <option value="">-select-</option>
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

                           
                           
                            
                        
                    
                    </td><?php } ?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Author2
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="author2" value="<?php echo $fet['author2']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <select name="author2" >
                    <option value="">-select-</option>
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
                    <?php } ?>              </tr>
                
                <tr>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Author3
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text2" name="author3" value="<?php echo $fet['author']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                       <select name="author3" >
                    <option value="">-select-</option>
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
                         
                            
                          
                          
                    </td><?php } ?></tr>                   
                   
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Year
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="year" value="<?php echo $fet['year']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="year">
                    </td>
                    <?php } ?>
                </tr>
                
                
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                   Publisher 
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="publisher" value="<?php echo $fet['publisher']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                      <select name="publisher" >
                    <option value="">-select-</option>
                    <?php
                    $sq="select * from add_publisher";
                    $qu=mysqli_query($conn,$sq);
                    while($row=mysqli_fetch_assoc($qu))
                    {
                        ?>
                    <option value="<?php echo $row['pub_name']?>"><?php echo $row['pub_name']?></option>
                    <?php
                    }
                    ?>
                    
                </select>

                          
                         
                          
                         
                   
                    </td>
                    <?php } ?>
                </tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Place
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="place" value="<?php echo $fet['place']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text" name="place">
                    </td>
                    <?php } ?>              </tr>
                <tr>
                    
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Date Added
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="date" value="<?php echo $fet['date']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="text"  name="date" style="width:100px ">
                    </td>
                    <?php } ?>              </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Subject
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="subject" value="<?php echo $fet['subject']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                       <select name="subject" >
                    <option value="">-select-</option>
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
                    <?php } ?> 
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                                          Abstract
                    </td>
                     <?php if(isset($_POST['search']))
                    {
                        ?>
                     <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                <input type="text" name="abs" value="<?php echo $fet['abstract']?>">
                               
                    </td>
                    <?php
                    } else {
?>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <textarea name="abs"></textarea>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        Book Image
                    </td>
                 
                    <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                        <input type="file" name="f1">
                               
                                                
                    </td>
                </tr>
                <tr> <?php if(isset($_POST['search']))
                    {
                        ?>
                     
                               
                    </td>
                    <?php
                    } else {
?>
                    
                    <td>
                        <input type="Submit" name="sub" style="color:red;">
                        <input type="Reset" name="button" style="color:red;">
                    </td>
                    
                    <?php } ?>
                    
                </tr>
                
                   
            </table>
        </form>
    </body>
    </head>
</html>