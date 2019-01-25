<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Payment Details</title>
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
            <h1>Payment Details</h1></br></br></br>
			
			
              <table class="table table-condensed">
                <thead>
                  <tr>

                    <th>Amount ( LKR )</th>
                    <th>Date</th>
                    <th>Month</th>
                  </tr>
                </thead>
				
                <tbody>
                  <?php
					
                    $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
                    $sql ="select amount,date from paymenthistoryteacher where nic='$_SESSION[nic]'";
                    $res = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_array($res)){
                  ?>
                  <tr>

                    <td class="amount"><?php echo $row['amount']; ?></td>
                    <td class="date"><?php echo $row['date']; ?></td>
                    <td class="mount"><?php 
                      $date=explode('-',$row['date']);
                      $monthNum  = $date[1];
                      $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                      $monthName = $dateObj->format('F');
                      echo $monthName;  
                      ?></td>
                    <td>Recieved <i class="glyphicon glyphicon-ok"></i></td>
                  </tr>
                  <?php } ?>
                  </tbody>
              </table>
        </div>
    </div>
</div>  

    
</div>
</div>
</body>
</html>
