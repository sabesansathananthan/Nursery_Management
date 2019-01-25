<?php

		
		require 'dbconnect.php';
		
		
		$databasecon= new DbConnect();
		$database=$databasecon->connect();
		
		$result = mysqli_query($database, "select * from kid");
		
					$num=0;
					
					
				$markdate = explode ("-",$_POST['date']);
				$markdate_mk =mktime(0,0,0,$markdate[1],$markdate[2],$markdate[0]);
				$today = date('Y-m-d');
				$today_ex = explode ("-",$today);
				$today_mk =mktime(0,0,0,$today_ex[1],$today_ex[2],$today_ex[0]);
				
		$countrow = mysqli_num_rows(mysqli_query($database, "select * from attendence where date='$today'"));
		echo $countrow;
				
		if(isset($_POST["attendence"])){
			if($markdate_mk != $today_mk){
				echo "<script type='text/javascript'>alert('Pleace Enter a Valid Date!!')</script>";
			}
			else{
				if($countrow>0){
					echo "<script type='text/javascript'>alert('You Can Not Mark Attendence Twise!!')</script>";
				}
				else{
					$num=0;
					while($row=mysqli_fetch_array($result)){
						$num++;
						$att="attendence".$num."";
						$query = "INSERT INTO `attendence` VALUES ('$row[id]','$row[funame]','$row[gender]','$_POST[$att]','$_POST[date]','$row[nic]')";
						mysqli_query($database, $query);
				
					}
					echo "<script type='text/javascript'>alert('Succesfully Marked Attendence!!')</script>";
					}
				}
		}
		
		?>
			<script type=text/javascript>
			window.location='attendence.php';
			</script>
		