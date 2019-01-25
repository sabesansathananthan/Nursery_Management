<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");

if(isset($_POST["next"])){	
	$_SESSION['datey']=$_POST['date'];
	$_SESSION['amounty']=$_POST['amount'];
	header('location:bankdetails.php');
	

}	
if(isset($_POST["sub"])){
	$nic=$_SESSION['nic'];
	$fname =$_SESSION['kid'];
	$date=$_SESSION['datey'];
	$amount=$_SESSION['amounty'];
	$month=date("M");
	mysqli_query($link, "insert into paymenthistorykid values ('','$fname','$nic','$amount','$date','$month')");
	$body=$fname." pay for ".$month." month.";
	mysqli_query($link, "insert into notification values ('','$body','$fname',0,0,2)");
	?>
		<script type="text/javascript">
			alert("success!!!");
			window.location="paymenthistory.php";
		</script>>
	<?php
}		
?>