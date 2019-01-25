<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teacher</title>
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
         ?>

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
<div class=" row">
    <?php
        $databasecon= new DbConnect();
		$link=$databasecon->connect();
        
		$sql = "select * from massages WHERE receiver='$_SESSION[teacher]'";
        $res = mysqli_query($link, $sql);
        $countmsg=0;
        while($row=mysqli_fetch_array($res)){
            if($row["seen"]==0){
                $countmsg =$countmsg+1;
            }
        }
        $sqln = "select * from notification WHERE receiver=1";
        $resn = mysqli_query($link, $sqln);
        $countnotification=0;
        while($rown=mysqli_fetch_array($resn)){
                if($rown["seen"]==0){
                    $countnotification =$countnotification +1;
                }
            }
			
		$sqlkid = "select * from kid";
        $reskid = mysqli_query($link, $sqlkid);
        $countkid=0;
        while($rowkid=mysqli_fetch_array($reskid)){
                
                    $countkid =$countkid +1;
                
            }
        $sqlleave = "select * from leaveapp where nic='$_SESSION[nic]'";
        $resleave = mysqli_query($link, $sqlleave);
        $countleave=0;
        while($rowleave=mysqli_fetch_array($resleave)){
                
                    $countleave =$countleave +1;
                
            }
        
       

    ?>
    <div class="col-md-3 col-sm-3 col-xs-12 ">
        <a data-toggle="tooltip" class="well top-block" href="totalkids.php">
            <i class="glyphicon glyphicon-user blue"></i>
            <div>Total Kids</div>
            <span class="notification"><?php echo $countkid; ?></span>
        </a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <a data-toggle="tooltip" class="well top-block" href="leaveinformation.php">
            <i class="glyphicon glyphicon-star green"></i>
            <div>Total Leaves</div>
            <span class="notification green"><?php echo $countleave; ?></span>
        </a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <a data-toggle="tooltip" class="well top-block" href="notification.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>
            <div>Notifications</div>
            <span class="notification yellow"><?php echo $countnotification; ?></span>
        </a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <a data-toggle="tooltip" class="well top-block" href="msg.php">
            <i class="glyphicon glyphicon-envelope red"></i>
            <div>Messages</div>
			<span class="notification red"><?php echo $countmsg; ?></span>
            
        </a>
    </div>
</div>

</body>
</html>
