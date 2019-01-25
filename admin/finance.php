<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <?php
        include "header.php"; 
    ?>

</head>

<body>
    
   

<div class="ch-container">
    <div class="row">
            <?php 
                include "sidebar.php";
            ?>
            <div class="col-md-10">
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                  <ul class="nav navbar-nav">
                    <li><a class="tablink" onclick="openCity('pay', this,)" id="defaultOpen">Pay to teacher</a></li>
                    <li><a class="tablink" onclick="openCity('teacherHistory', this)" >Teaches PayMent History</a></li>
                    <li><a class="tablink" onclick="openCity('kidHistory', this)" id="defaultOpen">Kids Payment</a></li>
                  </ul>
                </div>
              </nav>
            </div>

            <div id="pay" class="col-md-10 pbox tabcontent">
              <form action="db.php" method="POST">
                  <h2>Make Payment</h2>
                        <p>We alredy have teachers bank details.We always try to help you better. You can make the payment via online. Until you confirm the submition there will be no transaction.Make sure you input the correct details.</p>
                        <table>
                          <tr>
                            <td><label for="fname"><b>First Name</b></label></td>
                            <td><input type="text" name="fname" placeholder="First Name" class="add" required><br></td>
                          </tr>
                          <tr>
                            <td><label for="nic"><b>NIC No</b></label></td>
                            <td><input type="text" name="nic" placeholder="NIC No" class="add" required><br></td>
                          </tr>
                          
                          <tr>
                            <td><label for="amount"><b>Paying Amount</b> :Rs</label></td>
                            <td><input type="text" name="amount" placeholder="amount" class="add" required><br></td>
                          </tr>
                         </table>
                         <h3>Bank Details</h3>
                         <?php
                          $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
                          $sql ="select * from bankDetails";
                          $res = mysqli_query($link,$sql);
                          if($row=mysqli_fetch_assoc($res)){
                         ?>
                         <table> 
                          <tr>
                            <td><label for="cardtype"><b>Card Type: </b></label></td>
                            <td><select name="cardtype" class="add op" required>
                              <option value="visa" class="addop" selected>VISA</option>
                              <option value="Master" class="addop">Master</option>
                            </select></td>
                          </tr>
                          <tr>
                            <td><label for="cardholdername"><b>Card Holder Name: </b></label></td>
                            <td><input type="text" name="cardholdername" placeholder="Name" value=<?php  echo $row["name"];  ?> class="add" required></td>
                          </tr>
                          <tr>
                            <td><label for="cardnumber"><b>Card Number:</b></label></td>
                            <td><input type="text" name="cardnumber" placeholder="card number" value=<?php  echo $row["cardnum"];  ?> class="add" required></td>
                          </tr>
                          <tr>
                            <td><label for="Exdate"><b>Expire Date:</b></label></td>
                            <td><input type="text" name="Exdate" placeholder="yy-mm" value=<?php  echo $row["exdate"];  ?> class="add" required></td>
                          </tr>
                          <tr>
                            <td><label for="securitycode"><b>Security Code:</b></label></td>
                            <td><input type="password" name="securitycode" class="add" placeholder="" value=<?php  echo $row["seqcode"];  ?> required ></td>
                          </tr>
                          <?php
                              }
                          ?>
                          <tr>
                            <td><button onclick="location.href='index.php'" name="cancel" class="sendbtn">Back</button></td>
                            <td><button type="submit" class="sendbtn" name="pay" >PAY</button></td>
                            </tr>
                        </table>
                                           
              </form>
            </div>
            <div id="kidHistory" class="col-md-10 pbox tabcontent">
              <div class="stafftable">
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>NIC Number</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Month</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
                    $sql ="select * from kid";
                    $res = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_array($res)){
                  ?>
                  <tr>
                    <td class="fname"><?php echo $row['fname']; ?></td>
                    <td class="nic"><?php echo $row['nic']; ?></td>
                    <?php
                    $month= date("M");
                    $sqln ="SELECT * FROM paymenthistorykid WHERE nic ='$row[nic]' && month='{$month}' ";
                    $resn = mysqli_query($link,$sqln);
                    if($rown=mysqli_fetch_array($resn)){
                    ?>
                    <td class="amount"><?php echo $rown['amount']; ?></td>
                    <td class="date"><?php echo $rown['date']; ?></td>
                    <td class="month"><?php 
                      $date=explode('-',$rown['date']);
                      $monthNum  = $date[1];
                      $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                      $monthName = $dateObj->format('F');
                      echo $monthName;  
                      ?></td>
                    <td>Paid <i class="glyphicon glyphicon-ok"></i></td>
                  </tr>
                  <?php } 
                  else{
                  ?>
                  <td class="amount">---</td>
                    <td class="date">---</td>
                    <td class="month">---</td>
                    <td>Not Paid <i class="glyphicon glyphicon-ok"></i></td>
                  </tr>



                  <?php
                }

                }?>
                  </tbody>
              </table>
              </div>

            </div>
            <div id="teacherHistory" class="col-md-10 pbox tabcontent">
              <div class="stafftable">
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>NIC Number</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Month</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
                    $sql ="select * from paymenthistoryteacher";
                    $res = mysqli_query($link,$sql);
                    while($row=mysqli_fetch_array($res)){
                  ?>
                  <tr>
                    <td class="fname"><?php echo $row['fname']; ?></td>
                    <td class="nic"><?php echo $row['nic']; ?></td>
                    <td class="amount"><?php echo $row['amount']; ?></td>
                    <td class="date"><?php echo $row['date']; ?></td>
                    <td class="mount"><?php 
                      $date=explode('-',$row['date']);
                      $monthNum  = $date[1];
                      $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                      $monthName = $dateObj->format('F');
                      echo $monthName;  
                      ?></td>
                    <td>Paid <i class="glyphicon glyphicon-ok"></i></td>
                  </tr>
                  <?php } ?>
                  </tbody>
              </table>
              </div>


            </div>

    </div>
</div>



<!-- external javascript -->
 <script src="js/jquery.min.js"></script>
 <script>
function openCity(cityName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    
    elmnt.style.backgroundColor = '#6f6fff';

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
