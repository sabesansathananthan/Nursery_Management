
<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
if(!empty($_POST)){
	$ln=$_POST["lname"];
	$result_ln = $link->query("SELECT * FROM kid where lname='{$ln}'");
	$count = mysqli_num_rows($result_ln);
	if($count !=0){
		$x="Location:searchimgshow.php?id=".$_POST['lname'];
		header($x);
	}else{
		header("Location:researchimg.php");
	}


}


?>




