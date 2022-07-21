<?php
include_once'connect.php';

$id = $_GET['fishId'];


$query = "DELETE FROM fish where fishId = $id";

if(mysqli_query($connect,$query)){
    echo"delete successfuly ";
}
else{
    echo" not deleted";
}
header('location:fishRecord.php');
?>
