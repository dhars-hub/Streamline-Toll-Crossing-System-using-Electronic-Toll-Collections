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
<form name="f1" method="post" action="utransdata.php">
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
         
		<td><div align="center"><a href="srootinfo.php" class="style2">ROOT INFO</a></div></td>
		
        <td><div align="center"><a href="stransaction.php" class="style2">TRANSACTION</a></div></td>
        <td><div align="center"><a href="stranreport.php" class="style2">TRANSACTION REPORT</a></div></td>
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
				 echo "<option value=stransaction.php?id=".$r['id'].">".$r['id']."</option>";
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
          <input name="efrom" type="text" id="efrom"  value="<?php echo $row1['efrom'];?>"/>
          </label>
        </span></td>
      </tr>
       
      <tr>
        <td><span class="style8">To</span></td>
        <td><span class="style8">
            <input name="eto" type="text" id="eto"  value="<?php echo $row1['eto'];?>"/>
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

