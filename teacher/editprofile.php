<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EDIT PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
     <?php
        include "header.php";
		require "Images.php";
		
    ?>
<script src="js/jquery.min.js"></script>
<script src="browsfile.js"> </script>

</head>

<body>
   

<div class="ch-container">
    <div class="row">
        
        <?php 
            include "sidebar.php";
			
         ?>

<div id="content" class="col-lg-10 col-sm-10">
            <h1 align="center" ><b>Edit Profile</b></h1>
<div class=" row" align="center">
	<div class="col-md-8">
	</div>
	<div class="col-md-2" align="right">
			<a onclick="document.getElementById('id01').style.display='block'"" id="show-project-a">
				<div class="img-box">
					<div class="img" align="left">
                              <?php
								$display = new Images('teacher');
								$display->display();
								?>
								
                           </div>
				</div>
			</a>
	
	</div>
	<div class="col-md-8">
	</div>
	
<!-- start popup form -->
<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
<form action=dbchangeprofilepic.php method="POST" enctype="multipart/form-data"  class="modal-content animate">
	<h1>Change Profile Photo</h1>
    <div class="imgcontainer">
      <?php
	
		
		
			$dataconnect = new DbConnect();
				$database=$dataconnect->connect();
			$query = "SELECT photo FROM teacher WHERE nic='{$_SESSION['nic']}' ";
			$result = mysqli_query($database,$query);
			while($row = mysqli_fetch_array($result)){
				if($row['photo']!=null){
				echo '<img  height="300" width="300" alt="Avatar" src="data:photo;base64,'.$row['photo'].'" >';
				}
				else{
					echo '<img  height="300" width="300" alt="Avatar" src="img\user.png" alt="Avatar">';
				}
			}
	?>
    </div>

    <div class="container"">
      <div>
      <input type="file" name="image" class="btn1" id="fileLoader" style="display:none;"/></input>
		
		</div>

      <div class= "col-md-8">
	  
		<input type="button" id="btnOpenFileDialog" value="Browse Photo" onclick="openfileDialog();" class="btn1" />
		<button type="submit" value="update" name="update" class="btn1"><span>UPLOAD</span></button>
		
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn1">Cancel</button>
	  
		</div>
		
	  <div class="col-md-4">
	  </div>
	  
      
      
    </div>
	
    
  </form>
</div> 
<!-- end popup form -->


	<div class="col-lg-10" align="left">
	<?php
		
		$dataconnect = new DbConnect();
		$database=$dataconnect->connect();
		$query="select * from teacher where nic='{$_SESSION['nic']}'";
		
		$result = mysqli_query($database,$query);
		
		if($row = mysqli_fetch_assoc($result)){
		?>
<form action=dbprofile.php method="POST" class="editprofile" enctype="multipart/form-data">
	<table style='margin-top:50px;'>
			
            <tr>
                <td class="lcolumn" width="20%"><label for="full name">First Name </label> :</td>
                <td><?php echo '<input type="textarea" name="firstname" value='.$row['fname'].' pattern="[A-Za-z]{2,}" title = "Name Only can Contains letters" class="add1" ></br>'?></td>
				
            </tr>
			<tr>
                <td class="lcolumn" width="20%"><label for="full name">Last Name </label> :</td>
                <td><?php echo '<input type="textarea" name="lastname" value='.$row['lname'].' pattern="[A-Za-z]{2,}" title = "Name Only can Contains letters" class="add1" ></br>'?></td>
            </tr>
			
            <tr>
                <td class="lcolumn" ><label for="id">NIC Number </label> :</td>
                <td><?php echo '<label  name="nic" class="add1">'.$row['nic'].'</label></br>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="email">E-Mail </label> :</td>
                <td><?php echo '<input type="text" name="email" value='.$row['email'].' class="add1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title ="example@example.domain"></br>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="birthday">Birthday </label> :</td>
                <td><?php echo '<label  name="birthday" class="add1">'.$row['birthday'].'</label></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="gender">Sex </label> :</td>
                <td><?php echo '<label  name="gender" class="add1">'.$row['gender'].'</label></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label >Maritual Status </label> :</td>
                <td><?php echo '<select name="position" class="add1 op" placeholder="Maritual Status" required>
                            <option value=""selected data-default hidden>Pleace Choose one</option>
                              <option value="Married" class="addop">Married</option>
                              <option value="Single" class="addop">Single</option>
                              
                            </select></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="telephone">TP Number </label> :</td>
                <td><?php echo '<input type="text" name="telephone" value='.$row['phone'].' class="add1" minlength="10" maxlength="10" pattern="[0-9]{2,}" title=" Only numbers can add "></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="bankname">Bank Name </label> :</td>
                <td><?php echo '<label  name="bankname" class="add1">'.$row['bank'].'</label></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="accnum">Acc Number</label> :</td>
                <td><?php echo '<label  name="accnum" class="add1">'.$row['accnum'].'</label></br>'?></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="branch">Branch </label> :</td>
                <td><?php echo '<label  name="branch" class="add1">'.$row['branch'].'</label></br>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="adress">Address </label> :</td>
                <td><?php echo '<input type="text" name="address" value='.$row['address'].' class="add1" ></br>'?></td>
            </tr>
			
            <tr>
                <td class="bottom" colspan="2"><button type="submit" value="update" name="update" class="btn1"><span>UPDATE</span></button></td>
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

<script type=text/javascript>
	function openfileDialog() {
    $("#fileLoader").click();
}
</script>