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
      <CENTER><h2 style="color:#0066CC">TRANSACTION DETAILS</h2></CENTER>
	 <table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr bgcolor="#333333">
    <td><span class="style9">ROOT ID </span></td>
    <td><span class="style9">FROM </span></td>
    <td><span class="style9">TO</span></td>
	<td><span class="style9">AMT</span></td>
    <td><span class="style9">NAME</span></td>
	 <td><span class="style9">VEHICLE NO</span></td>
	  
	  <td><span class="style9">PAYMENT TYPE</span></td>
	  <td><span class="style9">BANK</span></td>
	  <td><span class="style9">CARD</span></td>
	 
	 
	 
	 
     
  </tr>
  <?php
  $i=1;
  $sel=mysql_query("select * from tb_book") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style11"><?php echo $i++;?></span></td>
    <td><span class="style11"><?php echo $row['efrom'];?></span></td>
    <td><span class="style11"><?php echo $row['eto'];?></span></td>
	
    <td><span class="style11"><?php echo $row['ename'];?></span></td>
	<td><span class="style11"><?php echo $row['phone'];?></span></td>
	<td><span class="style11"><?php echo $row['vno'];?></span></td>
	
	 
	<td><span class="style11"><?php echo $row['bank'];?></span></td>
	<td><span class="style11"><?php echo $row['acno'];?></span></td>
	<td><span class="style11"><?php echo $row['cvv'];?></span></td>
     
	 
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

