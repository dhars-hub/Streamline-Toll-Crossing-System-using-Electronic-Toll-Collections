Index.php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> STREAMLINE TOLL CROSSING SYSTEMS USING ELECTRONIC TOLL COLLECTION </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="index.html" class="style2">HOME</a></div></td>
<td><div align="center"><a href="login.html" class="style2">ADMIN</a></div></td>
<td><div align="center"><a href="userlogin.html" class="style2">USER</a></div></td>
<td><div align="center"><a href="reg.html" class="style2">REGISTRATION</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<img src="2.jpg" height="250px" /></centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Employee data

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$qry="SELECT id FROM register ORDER BY id DESC";
$set=mysql_query($qry);
$data=mysql_fetch_assoc($set);
$id1=$data['id'];
$id=$id1+1;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<?php


mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$reg=$_POST['reg'];
$ename=$_POST['ename'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$qry="INSERT INTO  register VALUES('$reg','$ename','$gender','$address','$city','$phone','$uname','$pass')";
$status=mysql_query($qry);

echo "<h1 style=color:rose><br><br><center>Successfully Saved Employee</center></h1>";

?>
</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>
Employee

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$qry="SELECT id FROM register ORDER BY id DESC";
$set=mysql_query($qry);
$data=mysql_fetch_assoc($set);
$id1=$data['id'];
$id=$id1+1;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<?php
mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$reg=$_POST['reg'];
$ename=$_POST['ename'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$qry="INSERT INTO  register VALUES('$reg','$ename','$gender','$address','$city','$phone','$uname','$pass')";
$status=mysql_query($qry);

echo "<h1 style=color:rose><br><br><center>Successfully Saved Employee</center></h1>";


?>
</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Employee view
<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<CENTER><h2 style="color:#0066CC">EMPLOYEE DETAILS</h2></CENTER>
<table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr bgcolor="#333333">
<td><span class="style9">USER Id </span></td>
<td><span class="style9">Name </span></td>
<td><span class="style9">GENDER</span></td>
<td><span class="style9">Address</span></td>
<td><span class="style9">CITY</span></td>


</tr>
<?php
$sel=mysql_query("select * from register") or die("Table Error");
while($row=mysql_fetch_array($sel))
{
?>
<tr bgcolor="#FFFFFF">
<td><span class="style11"><?php echo $row['id'];?></span></td>
<td><span class="style11"><?php echo $row['sname'];?></span></td>
<td><span class="style11"><?php echo $row['gender'];?></span></td>
<td><span class="style11"><?php echo $row['address'];?></span></td>
<td><span class="style11"><?php echo $row['city'];?></span></td>


</tr>
<?php
}
?>
</table>


</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Log data
<?php session_start();?>
<?php
echo $uname=$_POST['uname'];
echo $pass=$_POST['pass'];

if($uname=="Admin" && $pass=="123")
{
header("location:adminmain.html");
}
else
{
echo "Invalid User";

}
?>
Main page
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>

<td><div align="center"><a href="urootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="utransaction.php" class="style2">TRANSACTION</a></div></td>

<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<img src="2.jpg" height="250px" /></centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Registration data

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style8 {olor: #FFFF00;
font-weight: bold;
text-decoration:none; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<form name="f1" method="post" action="regdata.php">
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">       <tr>
<td><div align="center"><a href="index.html" class="style2">HOME</a></div></td>
<td><div align="center"><a href="login.html" class="style2">ADMIN</a></div></td>
<td><div align="center"><a href="userlogin.html" class="style2">USER</a></div></td>
<td><div align="center"><a href="reg.html" class="style2">REGISTRATION</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<table width="400" height="324" border="0" align="center">
<tr>
<td colspan="2"><div align="center"><span  style="color:#FF0000; font-weight:bold">

<?php


mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");

$ename=$_POST['ename'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$qry="INSERT INTO  tb_reg VALUES('$ename','$address','$city','$phone','$uname','$pass')";
$status=mysql_query($qry);

echo "<h1 style=color:rose><br><br><center>Successfully Register</center></h1>";


?>

</span></div></td>
</tr>


</table></td>
</tr>
</table>




</td>
</tr>
</table>
</center>
</body>
</html>




Report

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<table width="20%" border="0" height="150PX">
<tr>
<td><a href="employeeview.php" style="background:#0099FF; color:#FFFFFF; padding: 15px 25PX 15PX">EMPLOYEE VIEW </a></td>

</tr>
<tr>
<td><a href="rootview.php" style="background:#0099FF; color:#FFFFFF; padding: 15px">ROOT INFORMATION<a></td>

</tr>
</table>

</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>
Root data

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<?php


mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$id=$_POST['id'];
$from=$_POST['from'];
$to=$_POST['to'];
$km=$_POST['km'];
$amt=$_POST['amt'];


$qry="INSERT INTO  tb_root VALUES('$id','$from','$to','$km','$amt')";
$status=mysql_query($qry);

echo "<h1 style=color:rose><br><br><center>Successfully Saved root</center></h1>";


?>
</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Root info

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$qry="SELECT id FROM tb_root ORDER BY id DESC";
$set=mysql_query($qry);
$data=mysql_fetch_assoc($set);
$id1=$data['id'];
$id=$id1+1;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
-->
</style>
</head>

<body bgcolor="#CC3366"><form action="rootdata.php" method="post">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<table width="382" height="350px" border="0" align="center"  >
<tr>
<td colspan="2"><div align="center"><span class="style8">ROOT  INFORMATION
</span></div></td>
</tr>
<tr>
<td><span class="style8">ROOT ID</span></td>
<td><span class="style8">
<label>
<input name="id" type="text" id="id"  value="<?php echo $id;?>"/>
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">FROM</span></td>
<td><span class="style8">
<label>
<input name="from" type="text" id="from" />
</label>
</span></td>
</tr>



<tr>
<td><span class="style8">TO</span></td>
<td><span class="style8">
<label>
<input name="to" type="text" id="to" />
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">KiloMeter(per)</span></td>
<td><span class="style8">
<label>
<input name="km" type="text" id="km" />
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">Amount</span></td>
<td><span class="style8">
<label>
<input name="amt" type="text" id="amt" />
</label>
</span></td>
</tr>

<tr>
<td>&nbsp;</td>
<td><label>
<input type="submit" name="Submit" value="Submit" />
</label></td>
</tr>
</table>
</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Root view

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<CENTER><h2 style="color:#0066CC">ROOT DETAILS</h2></CENTER>
<table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr bgcolor="#333333">
<td><span class="style9">ROOT ID</span></td>
<td><span class="style9">FROM </span></td>
<td><span class="style9">TO</span></td>
<td><span class="style9">KM</span></td>
<td><span class="style9">AMOUNT</span></td>


</tr>
<?php
$sel=mysql_query("select * from tb_root") or die("Table Error");
while($row=mysql_fetch_array($sel))
{
?>
<tr bgcolor="#FFFFFF">
<td><span class="style11"><?php echo $row['id'];?></span></td>
<td><span class="style11"><?php echo $row['from'];?></span></td>
<td><span class="style11"><?php echo $row['to'];?></span></td>
<td><span class="style11"><?php echo $row['km'];?></span></td>
<td><span class="style11"><?php echo $row['amt'];?></span></td>


</tr>
<?php
}
?>
</table>


</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Transaction

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>
<td><div align="center"><a href="employee.php" class="style2">EMPLOYEEE ADD</a></div></td>
<td><div align="center"><a href="rootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="transaction.php" class="style2">TRANSACTION</a></div></td>
<td><div align="center"><a href="report.php" class="style2">REPORT</a></div></td>
<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<CENTER><h2 style="color:#0066CC">TRANSACTION DETAILS</h2></CENTER>
<table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr bgcolor="#333333">
<td><span class="style9">ROOT ID </span></td>
<td><span class="style9">FROM </span></td>
<td><span class="style9">TO</span></td>
<td><span class="style9">AMT</span></td>
<td><span class="style9">NAME</span></td>
<td><span class="style9">VEHICLE NO</span></td>
<td><span class="style9">ADDRESS</span></td>
<td><span class="style9">PAYMENT TYPE</span></td>
<td><span class="style9">BANK</span></td>
<td><span class="style9">CARD</span></td>





</tr>
<?php
$sel=mysql_query("select * from tb_trans") or die("Table Error");
while($row=mysql_fetch_array($sel))
{
?>
<tr bgcolor="#FFFFFF">
<td><span class="style11"><?php echo $row['id'];?></span></td>
<td><span class="style11"><?php echo $row['efrom'];?></span></td>
<td><span class="style11"><?php echo $row['eto'];?></span></td>
<td><span class="style11"><?php echo $row['amt'];?></span></td>
<td><span class="style11"><?php echo $row['ename'];?></span></td>
<td><span class="style11"><?php echo $row['phone'];?></span></td>
<td><span class="style11"><?php echo $row['address'];?></span></td>
<td><span class="style11"><?php echo $row['etype'];?></span></td>
<td><span class="style11"><?php echo $row['bank'];?></span></td>
<td><span class="style11"><?php echo $row['card'];?></span></td>


</tr>
<?php
}
?>
</table>


</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

Trans data

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body bgcolor="#CC3366">
<center>
<form name="f1" method="post" action="trandata.php">
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>

<td><div align="center"><a href="urootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="utransaction.php" class="style2">TRANSACTION</a></div></td>

<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>

<table width="50%" height="270" border="0" align="center">

<tr>
<td>
<?php


mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$id=$_POST['id'];
$efrom=$_POST['efrom'];
$eto=$_POST['eto'];
$km=$_POST['km'];
$amt=$_POST['amt'];
$ename=$_POST['ename'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$etype=$_POST['etype'];
$bank=$_POST['bank'];
$card=$_POST['card'];



$qry="INSERT INTO  tb_trans VALUES('$id','$efrom','$eto','$km','$amt','$ename','$phone','$address','$etype','$bank','$card')";
$status=mysql_query($qry);

echo "<h1 style=color:green><br><br><center>Successfully Transaction Complete</center></h1>";


?>
</td>
</tr>
</table>


</centeR>

</td>
</tr>
</table>
</form>
</center>
</body>
</html>
User login
<?php session_start();?>
<?php
echo $uname=$_POST['uname'];
echo $pass=$_POST['pass'];

mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("tollplazz") or die("Database Error"); // Connection Database
$q=mysql_query("select * from tb_reg where uname='$uname' and pass='$pass'");   // fetch Record
$r=mysql_fetch_array($q);
if($r)
{
echo"Valid user";
echo $_SESSION["uname"]=$r[uname];
header("location:mainpage.php");
}
else
{
echo "Invalid User";

}
?>

User root info

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
</head>

<body bgcolor="#CC3366">
<center>
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>

<td><div align="center"><a href="urootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="utransaction.php" class="style2">TRANSACTION</a></div></td>

<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<CENTER><h2 style="color:#0066CC">ROOT DETAILS</h2></CENTER>
<table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr bgcolor="#333333">
<td><span class="style9">ROOT ID</span></td>
<td><span class="style9">FROM </span></td>
<td><span class="style9">TO</span></td>
<td><span class="style9">KM</span></td>
<td><span class="style9">AMOUNT</span></td>


</tr>
<?php
$sel=mysql_query("select * from tb_root") or die("Table Error");
while($row=mysql_fetch_array($sel))
{
?>
<tr bgcolor="#FFFFFF">
<td><span class="style11"><?php echo $row['id'];?></span></td>
<td><span class="style11"><?php echo $row['from'];?></span></td>
<td><span class="style11"><?php echo $row['to'];?></span></td>
<td><span class="style11"><?php echo $row['km'];?></span></td>
<td><span class="style11"><?php echo $row['amt'];?></span></td>


</tr>
<?php
}
?>
</table>


</centeR>

</td>
</tr>
</table>
</center>
</body>
</html>

User transaction

<?php session_start();
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-family: Georgia, "Times New Roman", Times, serif;
font-weight: bold;
font-size: 36px;
color:#0033CC;
text-transform:uppercase;
}
.style2 {
color: #FFFF00;
font-weight: bold;
text-decoration:none;
}

.style6 {color: #FFFFFF;font-size: 25px; }
.style9 {color: #FFFFFF;font-size: 18px; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body bgcolor="#CC3366">
<center>
<form name="f1" method="post" action="transdata.php">
<table width="98%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:15px">
<!--DWLayoutTable-->
<tr>
<td width="100%" height="111" valign="top">
<center>
<table width="90%" border="0">
<tr>
<td><img src="1.jpg" height="200px" style="border-radius:15px"/></td>
<td> <p class="style1"> ELECTRONIC TOLL PLAZAS </p></td>
</tr>
</table>

</td>
</tr>
<tr>
<td height="48" valign="top"><table width="100%" height="45" border="0" bgcolor="#000000">
<tr>

<td><div align="center"><a href="urootinfo.php" class="style2">ROOT INFO</a></div></td>
<td><div align="center"><a href="utransaction.php" class="style2">TRANSACTION</a></div></td>

<td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="330" valign="top">
<br /><br />
<centeR>
<CENTER><h2 style="color:#0066CC">Transaction Details</h2></CENTER>
<table width="382" height="470" border="0" align="center">

<tr>
<td><span class="style8">Root ID</span></td>
<td><label>

<select  name="jobs" class="text"  onchange="MM_jumpMenu('parent',this,0)">
<option>Select ID</option>
<?php
mysql_connect("localhost", "root" ,"") or die("Connection Error");
mysql_select_db("tollplazz") or die("Database Error");
$q5=mysql_query("select * from tb_root");
while($r=mysql_fetch_assoc($q5))

{
echo "<option value=utransaction.php?id=".$r['id'].">".$r['id']."</option>";
}
$id=$_REQUEST['id'];



?>
</select>
<?php $result = mysql_query("SELECT *FROM tb_root where id='$id' ");
$row1= mysql_fetch_array($result);
?>
</label></td>

</tr>

<tr>
<td><span class="style8">Root ID </span></td>
<td><span class="style8">
<label>
<input name="id" type="text" id="id"  value="<?php echo $row1['id'];?>"/>
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">From</span></td>
<td><span class="style8">
<label>
<input name="efrom" type="text" id="efrom"  value="<?php echo $row1['from'];?>"/>
</label>
</span></td>
</tr>

<tr>
<td><span class="style8">To</span></td>
<td><span class="style8">
<input name="eto" type="text" id="eto"  value="<?php echo $row1['to'];?>"/>
</span></td>
</tr>
<tr>
<td><span class="style8">Kilo Meter</span></td>
<td><span class="style8">
<label>
<input name="km" type="text" id="km" value="<?php echo $row1['km'];?>"/>
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">Amount </span></td>
<td><span class="style8">
<label>
<input name="amt" type="text" id="amt" value="<?php echo $row1['amt'];?>"/>
</label>
</span></td>
</tr>
<tr>
<td><span class="style8">Name </span></td>
<td><input name="ename" type="text" id="ename" required="required"/></td>
</tr>
<tr>
<td><span class="style8">Vehicle NO </span></td>
<td><input name="phone" type="text" id="phone" required="required"/></td>
</tr>
<tr>
<td><span class="style8">Address </span></td>
<td><textarea name="address" id="address" required="required"></textarea></td>
</tr>
<tr>
<td><span class="style8">Payment Type </span></td>
<td><select name="etype"  style="width:150px">
<option>CASH</option>
<option>CARD</option>
</select>
</td>
</tr>
<tr>
<td><span class="style8">Bank </span></td>
<td><select name="bank" id="bank" style="width:150px">
<option>SBI</option>
<option>IOB</option>
<option>ICICI</option>
</select>
</td>
</tr>
<tr>
<td><span class="style8">Card No </span></td>
<td><input name="card" type="text" id="card" required="required"/></td>
</tr>

<tr>
<td>&nbsp;</td>
<td><label>
<input type="submit" name="Submit" value="Submit" />
<input type="reset" name="Reset" value="Reset" />
</label></td>
</tr>
</table>


</centeR>

</td>
</tr>
</table>
</form>
</center>
</body>
</html>


