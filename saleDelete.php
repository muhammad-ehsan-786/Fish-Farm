<?php
include_once'connect.php';

$id = $_GET['saleId'];


$query = "DELETE FROM sale where saleId = $id";

mysqli_query($connect,$query);
header('location:saleRecord.php');
?>
