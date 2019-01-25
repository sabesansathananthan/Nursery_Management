
<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
if(isset($_POST["addteacher"])){
	$date = explode ("-",$_POST['birthday']);
	$birthday =mktime(0,0,0,$date[1],$date[2],$date[0]);
	$difference = time()-$birthday;
	$age = $difference/31556926;
	if($age>18){
		mysqli_query($link, "insert into teacher values('','$_POST[fname]','$_POST[lname]','$_POST[funame]','$_POST[nic]','$_POST[birthday]','$_POST[gender]','$_POST[nationality]','$_POST[position]','$_POST[email]', $_POST[phone],'$_POST[address]','$_POST[bank]',$_POST[accnum],'$_POST[branch]','','')");

			?>
			<script type="text/javascript">
				alert("success !");
				window.location="addteacher.php";
			</script>
			<?php
	}
	else{
		?>
			<script type="text/javascript">
				window.location="addteacher.php";
				alert("Invalide Birthday");
			</script>
			<?php
	}
}
if(isset($_POST["addkid"])){
	$date = explode ("-",$_POST['birthday']);
	$birthday =mktime(0,0,0,$date[1],$date[2],$date[0]);
	$difference = time()-$birthday;
	$age = $difference/31556926;
	if($age>3){
		mysqli_query($link, "insert into kid values('','$_POST[fname]','$_POST[lname]','$_POST[funame]','$_POST[nic]','$_POST[birthday]','$_POST[gender]','$_POST[email]', $_POST[phone],$_POST[fathername],$_POST[mothername]'$_POST[address]','$_POST[bank]',$_POST[accnum],'$_POST[branch]','','')");

			?>
			<script type="text/javascript">
				alert("success kid !");
				window.location="addteacher.php";
			</script>
			<?php
	}
	else{
		?>
			<script type="text/javascript">
				window.location="addteacher.php";
				alert("Invalide Birthday");
			</script>
			<?php
	}
}
if(isset($_POST["addadmin"])){
	$date = explode ("-",$_POST['birthday']);
	$birthday =mktime(0,0,0,$date[1],$date[2],$date[0]);
	$difference = time()-$birthday;
	$age = $difference/31556926;
	if($age>18){
		mysqli_query($link, "insert into admin values('','$_POST[fname]','$_POST[lname]','$_POST[funame]','$_POST[nic]','$_POST[birthday]','$_POST[gender]','$_POST[nationality]','$_POST[position]','$_POST[email]', $_POST[phone],'$_POST[address]','$_POST[bank]',$_POST[accnum],'$_POST[branch]','')");

			?>
			 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				alert("success !");
				swal("Good job!", "You clicked the button!", "success");
				window.location="addteacher.php";
			</script>
			<?php
	}
	else{
		?>
			<script type="text/javascript">
				window.location="addteacher.php";
				alert("Invalide Birthday");
			</script>
			<?php
	}
}

if(isset($_POST["pay"])){
	$date = getdate(date("U"));
	$mydate ="$date[year]-$date[mon]-$date[mday]";
	mysqli_query($link, "insert into paymenthistoryteacher values('','$_POST[fname]','$_POST[nic]','$_POST[amount]','{$mydate}')");



	?>
		<script type="text/javascript">
			alert("Successfuly paid!");
			window.location="finance.php";
		</script>
	<?php
}



if(isset($_POST["send"])){
	$sender =$_SESSION["teacher"];
	mysqli_query($link, "insert into massages values('','$_POST[body]','$sender','$_POST[sender]',0,0)");
	?>
	<script type="text/javascript">
		window.location="msg.php";
	</script>>
	<?php

}


?>




