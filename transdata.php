 <?php session_start();
 $uname=$_SESSION["uname"];

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
	   $date=date('d-m-y');
  
   
 $qry="INSERT INTO  tb_book VALUES('$id','$efrom','$eto','$km','$amt','$ename','$phone','$address','$etype','$bank','$card','$date','$uname','','')";
            $status=mysql_query($qry);
            
			echo "<h1 style=color:green><br><br><center>Successfully Transaction Complete</center></h1>";
         
            
      ?>
	  <center>
	  <div style="color:#0000CC; font-size:25px">
	  Transaction ID : <?php echo $id;?><br /><br />
	  Name:<?php echo $ename;?><br /><br />
	    Vehicle No:<?php echo $phone;?><br /><br />
	  
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

