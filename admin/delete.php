<?php

$link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
$sql ="DELETE FROM teachers WHERE nic= '".$_POST["nic"]."'";
if(mysqli_query($link,$sql)){
	echo "Delete data";
}


?>