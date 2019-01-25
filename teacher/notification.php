<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teacher Notification</title>
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
         <div class="col-md-10">
            <h1 class="notifi">Notification</h1>
            <?php
                    require 'dbconnect.php';
					$databasecon= new DbConnect();
					$link=$databasecon->connect();
                    $receiver = $_SESSION["teacher"];

                    $res = mysqli_query($link, "select * from notification WHERE receiver=1 order by id desc");
                    while($row=mysqli_fetch_array($res)){
                        ?>
                        <div class="col-md-2">  
                        <div class="line"></div> 
                            <img src="img/user.png" class="user">
                        </div>
                        <div class="col-md-10 this">
                            <div>
                                <div class="line"></div>
                                <h3><?php   
                                    if($row["user"]==0){
                                    echo  "Admin :  ";
                                }
                                else if($row["user"]==1){
                                    echo  "Teacher :  ";
                                }
                                else if($row["user"]==2){
                                    echo  "Parent :  ";
                                }
                                else if($row["user"]==3){
                                    echo  "User :  ";
                                }
                                    echo $row["sender"]; 
                                ?> </h3>
                                <p>     <?php   echo $row["body"];  ?> </p>

                            </div>
                        </div>
                        <?php

                    }
                    $sql ="UPDATE notification SET seen=1 WHERE receiver =1";
                    mysqli_query($link, $sql );
                    
                ?>

         </div>
    </div>
</div>
  

    
</div>
</div>
</body>
</html>
