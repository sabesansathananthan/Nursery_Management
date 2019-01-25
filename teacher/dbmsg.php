<?php
		session_start();
		require 'dbconnect.php';
		$databasecon= new DbConnect();
		$database=$databasecon->connect();
	if(isset($_POST["send"])){
		if($_POST["type"]=='message'){
			$sender =$_SESSION["teacher"];
			mysqli_query($database, "insert into massages values('','$_POST[body]','$sender','$_POST[sender]',0,0)");
		}
		else{
			mysqli_query($database, "INSERT INTO notification VALUES ('','$_POST[body]','{$_SESSION['teacher']}',2,0,1)");
		}
			?>
		
	<script type="text/javascript">
		window.location="msg.php";
	</script>
	<?php

}