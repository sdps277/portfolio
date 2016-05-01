<?php
include("dbconnect.php");
header("location: view_blog.php");
$delete_id = $_GET['del'];

$delete_query ="delete from blogs where id='$delete_id'";

if(mysql_query($delete_query)){

echo "<script>alert('Deleted');</script>";


}

?>