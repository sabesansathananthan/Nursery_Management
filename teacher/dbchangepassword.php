<?php

		require 'dbconnect.php';
		$databasecon= new DbConnect();
		$database=$databasecon->connect();
		session_start();
		$queryupdate = "UPDATE teacher SET psw=md5('$_POST[newpassword]') WHERE nic = '{$_SESSION['nic']}'";
		$querycheck="select * from teacher where nic='{$_SESSION['nic']}'";
		$result = mysqli_query($database,$querycheck);
		
		while($row = mysqli_fetch_array($result)){
			if($row['psw']===md5($_POST['password'])){
				if($_POST['newpassword']===$_POST['repeatnewpassword']){
					mysqli_query($database,$queryupdate);
					echo "<script type='text/javascript'>alert('Password successfully Changed!')</script>";
				}
				else{
					echo "<script type='text/javascript'>alert('Password does not matching..Please retry!!!!')</script>";
					
				}
			}
			else{
				echo "<script type='text/javascript'>alert('Current Password is WRONG!!!..Please retry!!!!')</script>";
			}
		}
		
	?>	
		<script type=text/javascript>
			window.location='changepassword.php';
			</script>
		
		

