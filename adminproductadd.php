<html>
<head>
</head>
<body bgcolor="lightgreen">



<form name="form5" method="post" action="">
<input name="admin" type="submit" id="admin" value="Back">
</form>  
    <tr>
        <td>
            <form name="form1" method="post" action="">
            <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              
                <td colspan="4" bgcolor="#FFFFFF"><strong>Adding the products in the Inventory</strong> </td>
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
<td align=center><input type=submit name=submit value=ADD></td>
<td align=center><input type=reset name=reset value=Clear></td>
</tr>


</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","Capgemini");
if(mysqli_connect_errno($con))
{
echo "Failed to connect to MYSQl:".mysqli_connect_error();
}
else
{
$productid=$_POST['ProductID'];
$productname=$_POST['ProductName'];
$productprice=$_POST['ProductPrice'];
$productquantity=$_POST['ProductQuantity'];
$stmt=mysqli_prepare($con,"insert into product values(
?,?,?,?)");
mysqli_stmt_bind_param($stmt,'ssss',$productid,$productname,$productprice,$productquantity);
mysqli_stmt_execute($stmt);

if($stmt)
{
echo "Details successfully added";
}
else
{
echo "Details not Added";
}
mysqli_close($con);
}
}

if(isset($_POST['admin']))
{
header("Location:admin.php");
}

?>