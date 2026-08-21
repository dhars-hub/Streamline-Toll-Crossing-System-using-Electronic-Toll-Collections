<?php
  include("db.php");

echo $id=$_GET['id'];

$result=mysql_query("delete from tb_root where id='$id'");

 header('location:rootview.php');
?>