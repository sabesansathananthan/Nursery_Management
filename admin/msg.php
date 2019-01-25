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
                            <textarea rows="7" placeholder="Enter message" name="body" required></textarea>
                            <br>
                            <button name="cancel" class="sendbtn">CANCEL</button>
                            <button type="submit" class="sendbtn" name="send" ">SEND</button>               
        </form>
        </div>
        


            <div class="col-md-6">


            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a class="tablink" onclick="openCity('inbox', this)" id="defaultOpen">Inbox</a></li>
                  <li><a class="tablink" onclick="openCity('sendbox', this,)">Send Box</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="db.php">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                  </div>

                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>Search</button>
                </form>
              </div>
            </nav>
            
            </div>

            <div id="inbox" class="col-md-6 mbox tabcontent">



            <h1>Inbox</h1>
            
                <?php
                    $link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
                    mysqli_select_db($link,"semesterproject");
                    $receiver = $_SESSION["admin"];

                    $res = mysqli_query($link, "select * from massages");
                    while($row=mysqli_fetch_array($res)){
                        if($row["receiver"] ==$_SESSION["admin"]){
                            

                        ?>

                        <div class="col-md-2">  
                        <div class="line"></div> 
                            <img src="img/user.png" class="user">
                        </div>
                        <div class="col-md-10 this">
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
        <div id="sendbox" class="col-md-6 tabcontent mbox">
            <h1>Send Box</h1>            
                <?php
                    $link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
                    mysqli_select_db($link,"semesterproject");
                    $receiver = $_SESSION["admin"];

                    $res = mysqli_query($link, "select * from massages");
                    while($row=mysqli_fetch_array($res)){
                        if($row["sender"] ==$_SESSION["admin"]){
                            

                        ?>

                        <div class="col-md-2">  
                        <div class="line"></div> 
                            <img src="img/user.png" class="user">
                        </div>
                        <div class="col-md-10 this">
                            <div>
                                <div class="line"></div>
                                <h3>    <?php   echo $row["receiver"]; ?> </h3>

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
    
    elmnt.style.backgroundColor = 'blue';

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


</body>
</html>
