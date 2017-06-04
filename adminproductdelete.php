<?php
    $dbHost = 'localhost';  //database host name
    $dbUser = 'root';       //database username
    $dbPass = '';           //database password
    $dbName = 'Capgemini'; //database name
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>
<html>
<body bgcolor="lightgreen">

    <form name="form5" method="post" action="">
<input name="admin" type="submit" id="admin" value="Back">
</form>
<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <form name="form1" method="post" action="">
            <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td colspan="4" bgcolor="#FFFFFF"><strong>Removing the Product from Inventory</strong> </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF">#</td>
                <td align="center" bgcolor="#FFFFFF"><strong>ProductId</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>ProductName</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>Productprice</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>Productquantity</strong></td>
            </tr>
              <?php
                 $query = mysqli_query($conn,"SELECT * FROM product");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['productid']; ?>"/></td>        
             <td><?php echo $row['productid']; ?></td>
            <td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['productprice']; ?></td>
            <td><?php echo $row['productquantity']; ?></td>
           
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
            </table>
       

             <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
            </form>
        </td>
    </tr>
</table>
</body>
</html>

     <?php
              if(isset($_POST['bulk_delete_submit'])){
              $idArr = $_POST['checked_id'];
              foreach($idArr as $id){
      
              mysqli_query($conn,"DELETE FROM product WHERE productid=$id");
              }
               echo 'Users have been deleted successfully.';
              header("Location:adminproductdelete.php");
               }

               if(isset($_POST['admin']))
{
header("Location:admin.php");
}

               ?>

