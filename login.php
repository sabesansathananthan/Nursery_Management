<?php
require 'Db.php';
class Login {
	public function __construct(){
	
	}

	public function loginAdmin(string $name,string $pass){
		$link=mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
		$conn = "SELECT * FROM admin WHERE nic ='{$name}' && psw ='{$pass}'";
		$res=mysqli_query($link,$conn);
		if($row=mysqli_fetch_assoc($res)){
			$_SESSION["admin"] = $name;
			?>
				<script type="text/javascript">
					window.location="admin";
				</script>>
			<?php
		
		}
		else{
			?>
				<script type="text/javascript">
				alert("Your Not Admin");
					window.location="index.php";
				</script>>
			<?php
		}

	}
	public function loginParent(string $name,string $pass){
		$link=mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
		$conn = "SELECT * FROM kid WHERE nic ='{$name}' && psw =md5('{$pass}')";
		$res=mysqli_query($link,$conn);
		if($row=mysqli_fetch_assoc($res)){
			$_SESSION["kid"] = $row["fname"];
			$_SESSION["nic"] = $name;
			?>
				<script type="text/javascript">
					window.location="parent";
				</script>>
			<?php
		
		}
		else{
			?>
				<script type="text/javascript">
				alert("Password Incorrect");
					window.location="index.php";
				</script>>
			<?php
		}

	}
	public function loginTeacher(string $name,string $pass){

		$link=mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
		
		$conn = "SELECT * FROM teacher WHERE nic ='{$name}' && psw ='{$pass}'";
		$res=mysqli_query($link,$conn);
		if($row=mysqli_fetch_assoc($res)){
			$_SESSION["teacher"] = $row["fname"];
			$_SESSION["nic"] = $name;
			?>
				<script type="text/javascript">
					window.location="teacher";
				</script>>
			<?php
		
		}
		else{
			?>
				<script type="text/javascript">
				alert("Password Incorrect");
					window.location="index.php";
				</script>>
			<?php
		}

	}


}
?>