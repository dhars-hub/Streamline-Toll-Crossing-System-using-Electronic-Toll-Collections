<?php session_start();?>
<?php
echo $uname=$_POST['uname'];
echo $pass=$_POST['pass'];

mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("tollplazz") or die("Database Error"); // Connection Database
$q=mysql_query("select * from register where uname='$uname' and pass='$pass'");   // fetch Record
$r=mysql_fetch_array($q);
if($r)
{
echo"Valid user";
echo $_SESSION["uname"]=$r[uname];
header("location:smainpage.php");
}


else if($uname=="Admin" && $pass=="123")
{
header("location:adminmain.html");
}



else
{
echo "Invalid User";

}
?> 