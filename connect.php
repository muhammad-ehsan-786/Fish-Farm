<?php
$connect = mysqli_connect("localhost","root","","test");

if($connect){
    echo"connect successfuly";
}
else{
    echo"not connected";
}


?>