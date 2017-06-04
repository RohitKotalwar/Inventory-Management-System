
<html>
<body bgcolor="lightgreen">

<form name="form1" method="post" action="">	
<input name="productlist" type="submit" id="productlist" value="Product List and update">
</form>
<form name="form2" method="post" action="">
<input name="productcheckout" type="submit" id="productcheckout" value="Product Checkout">
</form>
<form name="form3" method="post" action="">
<input name="productadd" type="submit" id="productadd" value="Product ADD">
</form>
<form name="form4" method="post" action="">
<input name="productdelete" type="submit" id="productdelete" value="Product delete">
</form>

<form name="form5" method="post" action="">
<input name="adminlogin" type="submit" id="adminlogin" value="logout">
</form>

</body>
</html>


<?php

if(isset($_POST['productlist']))
{
header("Location:adminproductlist.php");
}

if(isset($_POST['productcheckout']))
{
header("Location:adminproductcheckout.php");
}

if(isset($_POST['productadd']))
{
header("Location:adminproductadd.php");
}

if(isset($_POST['productdelete']))
{
header("Location:adminproductdelete.php");
}


if(isset($_POST['adminlogin']))
{
header("Location:adminlogin.php");
}

?>