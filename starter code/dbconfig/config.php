<?php
$con = mysqli_connect("localhost:3308", "root", "") or die("Unable to connect");
// Use the line below if you're on MAMP
//$con = mysqli_connect("localhost:8889", "root", "root") or die("Unable to connect"); 
mysqli_select_db($con, "testdb");
?>