<?php
	require 'images.php';
	$display = new Images('kid');
	$databasecon= new DbConnect();
	$database=$databasecon->connect();
	session_start();
	$nic = $_SESSION['nic'];
	$fname=$_SESSION['kid'];
	$query = "UPDATE kid SET fname='$_POST[fname]',lname='$_POST[lname]',phone='$_POST[phone]',email='$_POST[email]',address='$_POST[address]' WHERE nic = '{$nic}'";
    if(isset($_POST["update"])){	
		mysqli_query($database, $query);
		$body=" ".$fname." update his profile details.";
		mysqli_query($database, "insert into notification values ('','{$body}','{$fname}',0,0,2)");
?>
		<script type='text/javascript'>
			alert('Information has been Updated')
		</script>
<?php
		}
?>
		<script type=text/javascript>
			window.location='profile.php';
		</script>
