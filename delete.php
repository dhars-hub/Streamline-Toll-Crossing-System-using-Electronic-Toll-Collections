<?php
  include("db.php");

echo $id=$_GET['id'];

$result=mysql_query("delete from register where id='$id'");

 header('location:employeeview.php');
?>