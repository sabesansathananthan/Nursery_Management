
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
    
   
<div>
<div class="ch-container msg">
    <div class="row">
        
        <?php 
            include "sidebar.php";
         ?>
         <div class="col-md-4 send">
            <form action="db.php" method="POST">
                  <h2>Make Payment</h2>
                  			<p>You can make the payment via online. Until you confirm the submition there will be no transaction.Make sure you input the correct details.</p>
                            <label for="id"><b>First Name*: </b></label>
                            <input type="int" name="id" placeholder="name" class="add" pattern="[a-zA-Z]{2,}" title=" Enter valid name" required><br>
                            <label for="date"><b>Date*</b></label>
                            <input type="date" name="date" placeholder="dd-mm-yy" class="add" required><br>
                            <label for="amount"><b>Paying Amount* :Rs</b></label>
                            <input type="text" name="amount" placeholder="amount" class="add" required><br>
  
                            <button onclick="location.href='index.php'" name="cancel" class="sendbtn">Back</button>
                            <button type="submit" class="sendbtn" name="next" ">Next</button>               
            </form>
        </div>
        
    </div>
</div>
