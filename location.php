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
.style9 {color: #FFFFFF;font-size: 18px; }

 
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
         
		<td><div align="center"><a href="urootinfo.php" class="style2">ROOT INFO</a></div></td>
		<td><div align="center"><a href="location.php" class="style2">LOCATION SEARCH</a></div></td>
        <td><div align="center"><a href="utransaction.php" class="style2">TRANSACTION</a></div></td>
        
		 <td><div align="center"><a href="index.html" class="style2">SIGN OUT</a></div></td>
		      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="330" valign="top">
	  <br /><br />
	  	 
		<center>
		<h1 style="color:#0000CC">LOCATION MAP</h1>
		 <form name="f1" method="get" action="location.php">
		<table width="30%" border="0" height="100px">
          <tr>
            <td>Location</td>
            <td><label>
              <input name="ename" type="text" class="txt" id="ename"   required="required"/>
            </label></td>
          </tr>
           
          <tr>
            
            <td colspan="2" align="center"><label>
             <input name="submit" type="submit" class="lgnbtn" value="Search">
            </label></td>
          </tr>
           
        </table></form>
		<br>
		<center>
		<br>
		<center>
		   <?php
		 	 include("db.php");
	if(isset($_GET['submit']))
{
  $ename=$_REQUEST["ename"];
  ?>
		 <table width="75%" height="75" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr bgcolor="#333333">
    <td><span class="style9">ROOT ID</span></td>
    <td><span class="style9">FROM </span></td>
    <td><span class="style9">TO</span></td>
	<td><span class="style9">KM</span></td>
    <td><span class="style9">AMOUNT</span></td>
	   <td> </td>
	 
     
  </tr>
  <?php
  $sel=mysql_query("select * from tb_root where efrom='$ename' ") or die("Table Error");
						while($row=mysql_fetch_array($sel))
						{
						?>
  <tr bgcolor="#FFFFFF">
    <td><span class="style11"><?php echo $row['id'];?></span></td>
    <td><span class="style11"><?php echo $row['efrom'];?></span></td>
    <td><span class="style11"><?php echo $row['eto'];?></span></td>
	<td><span class="style11"><?php echo $row['km'];?></span></td>
    <td><span class="style11"><?php echo $row['amt'];?></span></td>
     <td  colspan="2" align="center">
  <h3 style="color:#993333; font-size:16px;font-weight:bold"><br /><a href='https://www.google.com/maps/<?php echo $row['location'];?>' style="background:#FF0000 ;color:#FFFFFF; font-weight:bold; padding:15px;">GOOGLEMAP</a></h3>  </td>
	 </td>
	 
  </tr>
  <?php
  }
  ?>
   </table>
                   
		 
	    
	<?php
	 }
	?>				  
   <br /><br />

   
</tbody>
</table>
		
	    
     </td>
  </tr>
</table>
</center>
</body>
</html>

