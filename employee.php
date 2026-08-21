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

<body bgcolor="#CC3366"><form action="empdata.php" method="post">
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
        <td colspan="2"><div align="center"><span class="style8">EMPLOYEE ADD </span></div></td>
        </tr>
      <tr>
        <td><span class="style8">Register No </span></td>
        <td><span class="style8">
          <label>
          <input name="reg" type="text" id="reg"  value="<?php echo $id;?>"/>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">Name</span></td>
        <td><span class="style8">
          <label>
          <input name="ename" type="text" id="ename" />
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">Gender</span></td>
        <td><span class="style8">
          <label>
          <input name="gender" type="radio" value="Male" id="r1" />
          Male 
          <input name="gender" type="radio" value="Female" id="r2"/>
          Female        </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">Address</span></td>
        <td><span class="style8">
          <label>
          <textarea name="address" id="address"></textarea>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">City</span></td>
        <td><span class="style8">
          <label>
          <select name="city" id="city">
            <option>Trichy</option>
            <option>Chennai</option>
          </select>
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">Phone</span></td>
        <td><span class="style8">
          <label>
          <input name="phone" type="text" id="phone" />
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style8">User Name</span></td>
        <td><span class="style8">
          <label>
          <input name="uname" type="text" id="uname" />
          </label>
        </span></td>
      </tr>
     <tr>
        <td><span class="style8">Password</span></td>
        <td><span class="style8">
          <label>
          <input name="pass" type="text" id="pass" />
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

