<html>
<head>
<title>
Inventory Management System</title>
</head>
<body bgcolor="lightgreen">
<h1 align=center>Admin Login</h1>
<table border=1 align=center>
<form method=POST> 

<tr>
<td>ADMINID</td>
<td><input type=text name=ID></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type=password name=pw></td>
</tr>
<tr><td align=center><input type=submit name=submit value=Login></td>
<td align=center><input type=reset name=reset value=Clear></td>
</tr>
<tr>
<td align=center>
<input type="button" value="Home" class="homebutton" id="btnHome" 
onClick="document.location.href='index.php'" />  
</td>
</tr>
</form>
</table>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
//$flagU=0;$flagP=0;
        if(!empty($_POST['ID']) && empty($_POST['pw']))
        {
        echo 'Password cannot be empty';
        }
        else if(empty($_POST['ID']) && !empty($_POST['pw']))
        {
        echo 'ADMINID cannot be empty';
        }
        else if(empty($_POST['ID']) && empty($_POST['pw']))
        {
        echo 'ADMINID and Password cannot be empty';
        }
        else if(!empty($_POST['ID']) && !empty($_POST['pw']))
        {
                $con=mysqli_connect("localhost","root","","Capgemini");

 
                $Uid=$_POST['ID'];
                $Upass=$_POST['pw'];
 
                $stmt=mysqli_prepare($con,"select adminid,adminpassword from admin");
                mysqli_stmt_execute($stmt);

                mysqli_stmt_bind_result($stmt,$id,$pass);
                while(mysqli_stmt_fetch($stmt))
                {
                if($id==$_POST['ID'] && ($pass==$_POST['pw']))
                {
                  echo "login sucessful";

                  header("Location:admin.php");
                }
                else
                {
                    echo "login unsuccessful";
                    echo "<br />\n";
                    echo "Incorrect id or password";
                }


                }

        }


}
?>