<?php
include_once'connect.php';

$id = $_GET['farmId'];


$query = "DELETE FROM farm where farmId = $id";

mysqli_query($connect,$query);
header('location:farmRecord.php');
?>
