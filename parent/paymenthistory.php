<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Payment History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
    <?php
        include "header.php"; 
    ?>

</head>
<body>
	<?php 
            include "sidebar.php";
         ?>

	<div class="col-md-6 ">
		 <div class="container col-md-12 ">
            <h1>Payment History</h1>                                    
              <table class="table table-condensed" >
                <thead>
                  <tr>
                    <th>name</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Month</th>
                  </tr>
                </thead>

                <tbody>

                <?php
                   $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
                   $nic=$_SESSION["nic"];
					$sql = mysqli_query($link, "select * from paymenthistorykid WHERE nic='{$nic}'");
					while($row=mysqli_fetch_array($sql)){
                    ?>
                  <tr>
                    <td><?php  echo $row["fname"];  ?></td>
                    <td><?php  echo $row["date"];  ?></td>
                    <td><?php  echo $row["amount"];    ?></td>
                    <td><?php  echo $row["month"];  ?></td>
                  </tr>

                   <?php
                    }
                    
                ?>

                </tbody>
              </table>
        </div>
        <button onclick="location.href='index.php'" class="sendbtn" name="back" ">Back</button> 
    <button onclick="location.href='makepayments.php'" class="sendbtn" name="pay" ">Pay</button> 
	</div>
	
</body>
</html>








            
            	