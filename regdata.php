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
    <td> <p class="style1"> STREAMLINE TOLL CROSSING SYSTEMS USING ELECTRONIC TOLL COLLECTION </p></td>
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

