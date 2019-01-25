<?php

session_start();
if(isset($_POST["adminlogin"])){
	require 'Login.php';
	$login = new Login;
	$login ->loginAdmin($_POST['uname'],$_POST['psw']);

}
if(isset($_POST["parentlogin"])){
	require 'Login.php';
	$login = new Login;
	$login ->loginParent($_POST['uname'],$_POST['psw']);

}
if(isset($_POST["teacherlogin"])){
	require 'Login.php';
	$login = new Login;
	$login ->loginTeacher($_POST['uname'],md5($_POST['psw']));

}



if(isset($_POST["getintouch"])){
	$link=mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
		$conn = "insert into intouch values('','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[msg]')";
		mysqli_query($link,$conn);
		$name = $_POST['fname'];
		$body=$_POST['fname']." send massege to you via web. Check your inbox";
		$sqll = "insert into notification values('','{$body}','{$name}',0,0,3)";
		mysqli_query($link,$sqll);

		?>
			<script type="text/javascript">
				alert("success !");
				window.location="contact.php";
			</script>
		<?php
}
if(isset($_GET["sub"])){
	$link=mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
	mysqli_query($link,"insert into subscribe values('','$_GET[email]')");
	?>
			<script type="text/javascript">
				alert("success !");
				window.location="index.php";
			</script>
		<?php
}
?>