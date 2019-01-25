<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Change Login</title>
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
            <h1 align="center" ><b>Change Password</b></h1>
<div class=" row" align="center">
<div class="col-md-8">
	</div>
	<div class="col-md-2" align="right">
			
				<div >
					<div class="img" align="left">
                              <?php
								$display = new Images('kid');
								$display->display();
								?>
								
                           </div>
				</div>
			
	
	</div>
	<div class="col-md-8">
	</div>
	
	<div class="col-lg-10" align="left">
	<?php
		
		$dataconnect = new DbConnect();
		$database=$dataconnect->connect();
		$nic =$_SESSION["nic"];
		$query="select * from kid where nic='{$nic}'";
		$result = mysqli_query($database,$query);
		
		while($row = mysqli_fetch_array($result)){
		?>
<form action=dbchangepassword.php method="POST" class="changepassword">
	<table style='margin-top:50px;'>
			
           
            <tr>
                <td class="lcolumn" width="30%"><label for="currentpassword">Current Password </label> :</td>
                <td><?php echo '<input type="password" name="password" placeholder="Enter Current Password" class="add" ></br>'?></td>
            </tr>
           
			<tr>
                <td class="lcolumn" width="30%"><label for="newpassword">New Password </label> :</td>
                <td><?php echo '<input type="password" placeholder="Enter new Password" name="newpassword"  class="add" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters"></br>'?></td>
            </tr>
			
            <tr>
                <td class="lcolumn" width="30%"><label for="repeatnewpassword">Re-Enter New Password </label> :</td>
                <td><?php echo '<input type="password" placeholder="Re-Enter new Password" name="repeatnewpassword" class="add" ></br>'?></td>
            </tr>
            <tr>
                <td class="bottom" colspan="2"><button type="submit" name="change" class="btn1"><span><b>Change</b></span></button></td>
            </tr>
			
        </table>
	</form>
		<?php
		}
		?>
			
	</div>		
			
	
			

    
</div>
</div>
</body>
</html>
