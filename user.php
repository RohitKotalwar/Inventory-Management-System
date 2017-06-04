
<html>
<body bgcolor="lightgreen">

<form name="form1" method="post" action="">	
<input name="productlist" type="submit" id="productlist" value="Product List">
</form>
<form name="form2" method="post" action="">
<input name="productcheckout" type="submit" id="productcheckout" value="Product Checkout">
</form>

<form name="form5" method="post" action="">
<input name="userlogin" type="submit" id="userlogin" value="Back">
</form>

</body>
</html>


<?php

if(isset($_POST['productlist']))
{
header("Location:userproductlist.php");
}

if(isset($_POST['productcheckout']))
{
header("Location:userproductcheckout.php");
}

if(isset($_POST['userlogin']))
{
header("Location:userlogin.php");
}





?>