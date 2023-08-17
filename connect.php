<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "final";


$con = mysqli_connect($server, $user, $pw, $db);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}






mysqli_close($con);

?>