<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leave Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
     <?php
        include "header.php"; 
    ?>

</head>

<body>
    
   

<div class="ch-container">
    <div class="row">
        
        <?php 
            include "sidebar.php";
			require 'dbconnect.php';
			$databasecon= new DbConnect();
			$database=$databasecon->connect();
         ?>

         <div class="container col-md-10">
            <h1>Leave Information</h1></br></br></br>
			
			
              <table class="table table-condensed">
			
                <thead>
                  <tr>
					<th>NIC</th>
                    <th>First Name</th>
                    <th>E mail</th>
					<th>Type of leave</th>
					<th>Leave From</th>
					<th>Leave To</th>
					<th>Reason</th>
					<th>Aprrove</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $result = mysqli_query($database, "select * from leaveapp where nic='{$_SESSION['nic']}'");
					
                    while($row=mysqli_fetch_array($result)){
                    ?>
					
                  <tr>
					<td><?php  echo $row["nic"];  ?></td>
					<td><?php  echo $row["fname"];  ?></td>
                    <td><?php  echo $row["email"];  ?></td>
					<td><?php  echo $row["type"];  ?></td>
					<td><?php  echo $row["leavefrom"];  ?></td>
					<td><?php  echo $row["leaveto"];  ?></td>
					<td><?php  echo $row["reason"];  ?></td>
					<td><?php  echo $row["approve"];  ?></td>
                    
                    
                  </tr>
				   

                        <?php
                    }
                    
                ?>
				
				
                </tbody>
              </table>
        </div>
    </div>
</div>  

    
</div>
</div>
</body>
</html>
