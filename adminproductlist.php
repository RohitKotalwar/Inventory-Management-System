
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
                <td colspan="4" bgcolor="#FFFFFF"><strong>Products Available in the Inventory</strong> </td>
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
            <td></td>     
             <td><?php echo $row['productid']; ?></td>
            <td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['productprice']; ?></td>
            <td><?php echo $row['productquantity']; ?></td>

        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
 </table>
       
</body>
</html>

<html>
<head>
</head>
<body bgcolor="lightgreen">

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('Capgemini');

$query = "SELECT * FROM product";
$result = mysql_query($query) or die(mysql_error());

?>

<html>

<body bgcolor="lightgreen">
    <tr>
        <td>
            <form name="form1" method="post" action="">
            <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              
                <td colspan="4" bgcolor="#FFFFFF"><strong>Updating the product information in the Inventory</strong> </td>
            </tr>
            <tr>
         
                <td align="center" bgcolor="#FFFFFF"><strong>ProductId</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>ProductName</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>Productprice</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>Productquantity</strong></td>
               
            </tr>
</td>
</tr>
<tr>

<td><input type=text name=ProductID></td>
<td><input type=text name=ProductName></td>
<td><input type=text name=ProductPrice></td>
<td><input type=text name=ProductQuantity></td>
</tr>


<tr>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
</body>
</html>



<?php

if(isset($_POST['update']))
{

$productid = $_POST['ProductID'];
$productname = $_POST['ProductName'];
$productprice = $_POST['ProductPrice'];
$productquantity = $_POST['ProductQuantity'];


$a=2;
$sql = "UPDATE product SET productname = '$productname', productprice = '$productprice', productquantity = '$productquantity' WHERE productid = '$productid'";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
header("Location:adminproductlist.php");
}


if(isset($_POST['admin']))
{
header("Location:admin.php");
}


?>
</body>
</html>




