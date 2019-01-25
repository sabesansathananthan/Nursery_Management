<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Child's Profile</title>
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
                <h1 align="center" ><b>Child's Profile</b></h1>
                <div class=" row">
	                <div class="col-md-8">
                        <?php
                        $dataconnect = new DbConnect();
                        $database=$dataconnect->connect();
                        $nic=$_SESSION["nic"];
                        $query="select * from kid where nic='{$nic}'";
                        $result = mysqli_query($database,$query);
                        if($row = mysqli_fetch_array($result)){
                    ?>
                    <form action=editprofile.php method="POST" class="profile">
                        <table style='margin-top:50px;'>
                            <tr>
                                <td class="lcolumn" width="40%"><label for="FirstName">First Name :</label></td>
                            <td><?php echo '<label  name="FirstName" class="add">'.$row['fname'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="LastName">Last Name :</label></td>
                            <td><?php echo '<label  name="LastName" class="add">'.$row['lname'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="ID">NIC ID Number of  the Parent </label></td>
                            <td><?php echo '<label  name="ID" class="add">'.$row['nic'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="Birthday">Birthday :</label> </td>
                            <td><?php echo '<label  name="Birthday" class="add">'.$row['birthday'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="Gender">Gender :</label> </td>
                            <td><?php echo '<label  name="Gender" class="add">'.$row['gender'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="Email">E-Mail :</label></td>
                            <td><?php echo '<label  name="EMail" class="add">'.$row['email'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="AdmissionDate">Date Of Admission :</label></td>
                            <td><?php echo '<label  name="AdmissionDate" class="add">'.$row['admitiondate'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="LandPhoneNo">Land Phone Number :</label></td>
                            <td><?php echo '<label  name="LandPhoneNo" class="add">'.$row['phone'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="adress">Address :</label></td>
                            <td><?php echo '<label  name="Address" class="add">'.$row['address'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="FathersName">Father's Name:</label></td>
                            <td><?php echo '<label  name="FathersName" class="add">'.$row['fathername'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="lcolumn" width="40%"><label for="FathersName">Mother's Name:s</label></td>
                            <td><?php echo '<label  name="FathersName" class="add">'.$row['mothername'].'</label></br>'?></td>
                            </tr>
                            <tr>
                            <td class="bottom" colspan="2"><button type="submit" name="changeprofile" class="btn1" ><span><b>Change Profile</b></span></button></td>
                        </table>
                    </form>
<?php
                        }
?>
            
                    </div>
                    <div class="col-md-2" align="left">
                        <div class="img" >
                            <?php
                                $display = new Images('kid');
                                $display->display();
                                ?>
                                
                        </div>
                    </div>	
			</div>
        </div>
    </div>
</body>
</html>
