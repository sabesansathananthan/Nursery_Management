<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Child's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
     <?php
        include "header.php";
		require "Images.php";
		
    ?>

</head>

<body>
    
   

<div class="ch-container">
    <div class="row">
        
        <?php 
            include "sidebar.php";
			
         ?>

<div id="content" class="col-lg-10 col-sm-10">
            <h1 align="center" ><b>Edit Profile Picture</b></h1></br></br>
<div class=" row" align="center">
	
	<?php
	
		
		
			$dataconnect = new DbConnect();
				$database=$dataconnect->connect();
			$query = "SELECT 'Photo' FROM 'childlist' WHERE ID='970060022v' ";
			$result = mysqli_query($database,$query);
			while($row = mysqli_fetch_array($result)){
				if($row['Photo']!=null){
				echo '<img  height="250" width="250" alt="Avatar" src="data:Photo;base64,'.$row['Photo'].'" >';
				}
				else{
					echo '<img  height="250" width="250" alt="Avatar" src="img\user.png" alt="Avatar">';
				}
			}
	?>
		
<form action=dbchangeprofilepic.php method="POST" class="editprofile" enctype="multipart/form-data">
	<table style='margin-top:50px;'>
			
			<tr>
                <td class="lcolumn" ><label for="image">Change Photo </label> :   </td></br>
                <td><br/><br/><input type="file" name="image" /></br></td>
            </tr>
            <tr>
                <td class="bottom" colspan="2"><button type="submit" value="update" name="update" class="btn1"><span>UPLOAD</span></button></td>
            </tr>
			
        </table>
	</form>
		
			
	</div>		
			
	
			

    
</div>
</div>
</body>
</html>