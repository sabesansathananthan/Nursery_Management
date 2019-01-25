<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Massage</title>
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
                  <h2>Send Massage</h2>
                            <input type="text" name="sender" placeholder="To :" class="add" required><br>
                            <textarea rows="7" placeholder="Enter message" name="body" class="" required></textarea>
                            <br>
                            <button name="cancel" class="sendbtn">CANCEL</button>
                            <button type="submit" class="sendbtn" name="send" ">SEND</button>               
        </form>
        </div>
        <div class="col-md-6 inbox">
            <h1>Inbox</h1>
            
                <?php
                    $link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
                    mysqli_select_db($link,"semesterproject");
                    $receiver = $_SESSION["kid"];

                    $res = mysqli_query($link, "select * from massages");
                    while($row=mysqli_fetch_array($res)){
                        if($row["receiver"] ==$_SESSION["admin"]){
                            

                        ?>

                        <div class="col-md-2">  
                        <div class="line"></div> 
                            <img src="img/user.png" class="user">
                        </div>
                        <div class="col-md-10">
                            <div>
                                <div class="line"></div>
                                <h3>    <?php   echo $row["sender"]; ?> </h3>

                                <p>     <?php   echo $row["body"];  ?> </p>

                            </div>
                        </div>
                        <?php
                        }
                    }

                    $sql ="UPDATE massages SET seen=1 WHERE receiver ='".$receiver."'";
                    mysqli_query($link, $sql );
                ?>
            
        </div>
    </div>
</div>
</div> 

</body>
</html>
