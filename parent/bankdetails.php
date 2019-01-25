<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bank Details</title>
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
                  <h2>Bank Details</h2>
                            <label for="cardtype"><b>Card Type: </b></label>
                            <select name="cardtype" class="add op" required>
                              <option value="visa" class="addop">VISA</option>
                              <option value="Master" class="addop">Master</option>
                            </select><br>
                            <label for="cardholdername"><b>Card Holder Name: </b></label>
                            <input type="text" name="cardholdername" placeholder="Name" class="add" required><br>
                            <label for="cardnumber"><b>Card Number:</b></label>
                            <input type="text" name="cardnumber" placeholder="Number" class="add" minlength="16" maxlength="16" pattern="[0-9]{2,}" title=" Only numbers can add " required><br>
                            <label for="Exdate"><b>Expire Date:</b></label>
                            <input type="text" name="Exdate" placeholder="mm/yy" class="add" required><br>
                            <label for="securitycode"><b>Security Code:</b></label>
                            <input type="text" name="securitycode" placeholder="***" class="add" minlength="3" maxlength="3" pattern="[0-9]{2,}" title=" Only numbers can add " required><br>
                            
  
                            <button onclick="location.href='makepayments.php'" name="back" class="sendbtn">Back</button>
                            <button  type="submit" class="sendbtn" name="sub" ">Submit</button>
                </form>          
        
        </div>
        
    </div>
</div>