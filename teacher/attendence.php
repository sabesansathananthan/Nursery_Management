<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Attendence</title>
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
            <h1>Mark Attendence</h1></br></br></br>
			<form method="POST" action='dbattendence.php'>
			<table>  <tr>
                <td class="lcolumn" width="20%"><label for="date">Date </label> :</td>
                <td><?php echo '<input type="date" name="date"  class="add3" ></br>'?></td>
            </tr></table></br>
              <table class="table table-condensed">
			
                <thead>
                  <tr>
					<th>ID</th>
                    <th>Full Name</th>
                    <th>Gender</th>
					<th>Attendence</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $result = mysqli_query($database, "select * from kid");
					$num=0;
					
                    while($row=mysqli_fetch_array($result)){
                    $num++;
					
                    ?>
					
                  <tr>
					<td><?php  echo $row["id"];  ?></td>
					<td><?php  echo $row["funame"];  ?></td>
                    <td><?php  echo $row["gender"];  ?></td>
                    <td>
						<input type="radio" name = "<?php echo 'attendence'.$num;?>"  value="present" checked >Present</input>
						<input type="radio" name = "<?php echo 'attendence'.$num;?>"  value="notpresent" > Not Present<br></input>
						
						</td>
                    
                  </tr>
				   

                        <?php
                    }
                    
                ?>
				<tr><td class="bottom" colspan="2"><button type="submit" name="attendence" class="btn1"><span><b>Mark</b></span></button></td></tr>
				</form>
                </tbody>
              </table>
        </div>
    </div>
</div>  

    
</div>
</div>
</body>
</html>
