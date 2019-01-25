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

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
<div class=" row">
    <?php
        $link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
        $receiver = $_SESSION["admin"];
        $sql = "select * from massages WHERE receiver='".$receiver."'";
        $res = mysqli_query($link, $sql);
        $countmsg=0;
        while($row=mysqli_fetch_array($res)){
            if($row["seen"]==0){
                $countmsg =$countmsg+1;
            }
        }
        $sqln = "select * from notification WHERE receiver=0";
        $resn = mysqli_query($link, $sqln);
        $countnotification=0;
        while($rown=mysqli_fetch_array($resn)){
                if($rown['seen']==0){
                    $countnotification =$countnotification +1;
                }
            }
    ?>
    <div class="col-md-3 col-sm-3 col-xs-6 ">
        <a data-toggle="tooltip" title="100 total kids." class="well top-block" href="kid.php">
            <i class="glyphicon glyphicon-user blue"></i>
            <div>Total Kids</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new Emals." class="well top-block" href="leaveapp.php">
            <i class="glyphicon glyphicon-user green"></i>
            <div>Leave Application</div>
            <span class="notification green">10</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="34 new notifications." class="well top-block" href="notification.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>
            <div>Notifications</div>
            <span class="notification yellow"><?php echo $countnotification; ?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  title="" class="well top-block" href="msg.php">
            <i class="glyphicon glyphicon-envelope red"></i>
            <div>Messages</div>
            <span class="notification red"> <?php echo $countmsg; ?></span>
        </a>
    </div>
</div>

</body>
</html>
