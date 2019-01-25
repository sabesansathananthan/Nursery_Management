<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Total Kids</title>
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
            <h1>Total Kids</h1></br></br></br>
			
			
              <table class="table table-condensed">
			
                <thead>
                  <tr>
					
                    <th>Full Name</th>
                    <th>Birthday</th>
					<th>Admission date</th>
					<th>gender</th>
					<th>Address</th>
					<th>Telephone</th>
					
                  </tr>
                </thead>
                <tbody>

                <?php
                    $result = mysqli_query($database, "select * from kid");
					
                    while($row=mysqli_fetch_array($result)){
                    ?>
					
                  <tr>
					
					<td><?php  echo $row["funame"];  ?></td>
                    <td><?php  echo $row["birthday"];  ?></td>
					<td><?php  echo $row["admitiondate"];  ?></td>
					<td><?php  echo $row["gender"];  ?></td>
					<td><?php  echo $row["address"];  ?></td>
					<td><?php  echo $row["phone"];  ?></td>
                    
                    
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
