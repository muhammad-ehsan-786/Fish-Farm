<?php
include_once'connect.php';

$id = $_GET['harvestId'];


$query = "DELETE FROM harvest where harvestId = $id";

mysqli_query($connect,$query);
header('location:harvestRecord.php');
?>
