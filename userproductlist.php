
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
<input name="user" type="submit" id="user" value="Back">
</form>

<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <form name="form1" method="post" action="">
            <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td colspan="4" bgcolor="#FFFFFF"><strong>List of Products</strong> </td>
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



if(isset($_POST['user']))
{
header("Location:user.php");
}

?>








