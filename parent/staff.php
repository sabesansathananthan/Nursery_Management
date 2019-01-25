<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
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
         ?>

         <div class="container col-md-10">
            <h1>Our Staff</h1>                                    
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NIC Number</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                  </tr>
                </thead>

                <tbody>

                <?php
                    $link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
                    mysqli_select_db($link,"semesterproject");

                    $res = mysqli_query($link, "select * from teacher");
                    while($row=mysqli_fetch_array($res)){
                        
                    ?>
                  <tr>
                    <td><?php    echo $row["fname"];  ?></td>
                    <td><?php  echo $row["lname"];  ?></td>
                    <td><?php  echo $row["nic"];    ?></td>
                    <td><?php  echo $row["email"];  ?></td>
                    <td><?php  echo $row["phone"];  ?></td>
                    <td><?php  echo $row["gender"]; ?></td>
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
