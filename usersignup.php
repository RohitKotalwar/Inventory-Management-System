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
              
                <td colspan="4" bgcolor="#FFFFFF"><strong>New Users</strong> </td>
            </tr>
            <tr>
         
                <td align="center" bgcolor="#FFFFFF"><strong>USERID</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>PASSWORD</strong></td>
                <td align="center" bgcolor="#FFFFFF"><strong>NAME</strong></td>
                
               
            </tr>
</td>
</tr>
<tr>

<td><input type=text name=USERID></td>
<td><input type=text name=PASSWORD></td>
<td><input type=text name=NAME></td>

</tr>
<tr>
<td align=center><input type=submit name=submit value=Signup></td>
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
$userid=$_POST['USERID'];
$password=$_POST['PASSWORD'];
$name=$_POST['NAME'];

$stmt=mysqli_prepare($con,"insert into user values(
?,?,?)");
mysqli_stmt_bind_param($stmt,'sss',$userid,$password,$name);
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
header("Location:index.php");
}

?>