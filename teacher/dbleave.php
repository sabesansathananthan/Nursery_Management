<?php

		require 'dbconnect.php';
		$databasecon= new DbConnect();
		$database=$databasecon->connect();
		
		if(isset($_POST["request"])){
			
			if($_POST["type"]=='Long Leave'){
				//date validation
				session_start();
				$leavefrom = explode ("-",$_POST['leavefrom']);
				$leaveto = explode ("-",$_POST['leaveto']);
				$leavefrom_mk =mktime(0,0,0,$leavefrom[1],$leavefrom[2],$leavefrom[0]);
				$leaveto_mk =mktime(0,0,0,$leaveto[1],$leaveto[2],$leaveto[0]);
				$difference = $leaveto_mk - $leavefrom_mk;
				$today = time();
				$differencefrom = $today - $leavefrom_mk;
				$differenceto = $today - $leaveto_mk;
				//end date validation
				if($differencefrom>0){
					echo "<script type='text/javascript'>alert('You Can not Enter Past days!! Pleace RETRY!!!')</script>";
				}
				else{
					if($differenceto>0){
						echo "<script type='text/javascript'>alert('You Can not Enter Past days!! Pleace RETRY!!!')</script>";
					}
					else{
						if($difference<0){
							echo "<script type='text/javascript'>alert('Invalid Leave Dates!! Pleace RETRY!!!')</script>";
						}
						else{
							mysqli_query($database,"insert into leaveapp values('','$_POST[fname]','$_POST[nic]','$_POST[email]','$_POST[type]','$_POST[leavefrom]','$_POST[leaveto]','$_POST[reason]','')" );
							echo "<script type='text/javascript'>alert('Request Succesfully Created!!! We Will Inform You Soon!!')</script>";
							}
						}
					}	
			}
			else{
				mysqli_query($database,"insert into leaveapp values('','$_POST[fname]','$_POST[nic]','$_POST[email]','$_POST[type]','$_POST[leavefrom]','','$_POST[reason]','')" );
				
				echo "<script type='text/javascript'>alert('Request Succesfully Created!!! We Will Inform You Soon!!')</script>";
			}
		
		?>
			<script type=text/javascript>
			window.location='leave.php';
			</script>
		<?php
		} 

    ?>