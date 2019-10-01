<?php //session_start();
$conn=mysqli_connect("localhost","root","","egranthalaya");
if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $no=$_POST['no'];
    $date=$_POST['date'];
    $proposed=$_POST['proposed'];
    $applied=$_POST['applied'];
    $orderd=$_POST['orderd'];
    $recieved=$_POST['received'];
    $library=$_POST['library'];
    $currency=$_POST['currency'];
    $price=$_POST['price'];
    $order=$_POST['order'];
    $date1=$_POST['date1'];
    $vender=$_POST['vender'];
    $mode=$_POST['mode'];
   
 
                  
                  
    $sq="insert into `acquiston_record`(`acq_id`,`status`,app_no,app_date,proposed,applied,`order`,recieved,library,currency,price,order_no,order_date,vender,`mode`) values
          (NULL,'$no','$date','$proposed','$applied','$orderd','$recieved','$library','$currency','$price','$order','$date1','$date1','$vender','$mode')";
             mysqli_query($conn,$sq);
              
}

?>
<?php include'header2.php'?>
<html>
    <head>
        
    <body>
        <form method="post" style="margin-top:-480px" >
            <table>
                <center><h1 style="color:black;">Acquisition Record</h1></center>
            <tr>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    Acq Id
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <input type="text" name="id">
                           
                </td>
            </tr>
            <tr>
                
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    App No
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <input type="text" name="no" style="width:200px">
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    App Date
                </td>
                <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                    <input type="text" name="date" style="width:100px">
                </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                Copy Proposed
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="proposed" style="width:50px">
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Copy applied
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="applied" style="width:50px">
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Copy Orderd
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="orderd" style="width:50px">
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Copy Received
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="received" style="width:50px">
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Library
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <select name="library">
                         <option value="">----select-----</option>
                         <option value="HP Secrator">HP Secrator</option>
                         
                     </select>
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Currency
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <select name="currency">
                         <option value="">----select----</option>
                         <option value=" US Dollas">US Dollars</option>
                         <option value="">----select----</option>
                         
                     </select>
                     
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Price
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="price" style="width:100px">
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Order No
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="order" style="width:250px">
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Order Date
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <input type="text" name="date1" style="width:100px">
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Vender
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <select name="vender">
                         <option value="">---select---</option>
                         
                     </select>
                 </td>
             </tr>
             <tr>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     Acquistion Mode
                 </td>
                 <td style="padding:5px;width:120px;color:white; background-color:rgb(101,118,235)">
                     <select name="mode">
                         <option value="">----select---</option>
                         
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>
                     <input type="submit" name="sub" style="color:red;">
                 </td>
             </tr>
             
                 
            
                
               
     </table>
        </form>
    </body>
    </head>
</html>