<?php

		
		require 'images.php';
		$display = new Images('kid');
		
		
		$databasecon= new DbConnect();
		$database=$databasecon->connect();
		if(isset($_POST["updatepic"])){	
			if(!empty($_FILES['image']['tmp_name'])){
				if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
					echo "<script type='text/javascript'>alert('Please select an Image')</script>";
				}
				else{
					$image=addslashes($_FILES['image']['tmp_name']);
					$image=file_get_contents($image);
					$image=base64_encode($image);
					$display->saveImage($image);
					
					$body=$_SESSION["kid"]." update his profile picture.";
					mysqli_query($database, "insert into notification values ('','$body','{$_SESSION["kid"]}',0,0,2)");
				}
			}
			else{
				echo "<script type='text/javascript'>alert('Please select an Image')</script>";
			}
		}
		
		
		?>
			<script type=text/javascript>
				window.location='profile.php';
			</script>
		<?php
		
		
		

    ?>