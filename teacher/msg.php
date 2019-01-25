<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/jquery.min.js"></script>
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
         <form action="dbmsg.php" method="POST">
                  <h2>Send Massage</h2>
							
							<label for="type">Type of Messagge </label> * </td>
								<td><select name="type" class="adddrop" placeholder="Select Receiver" id="receiver" onChange="myFunction();" required>
                              <option value="" selected data-default hidden>Pleace Choose one</option>
							  <option value="all" class="addop">HomeWork</option>
                              <option value="message" class="addop">Send Message</option>
                              
                            </select>
                        
            
                            <?php echo'<input type="text" name="sender" placeholder="To :  Enter the NIC" minlength="10" maxlength="10" id="to" pattern="[0-9]+[vV]" title=" eg: 983746534v " class="add" disabled required><br>'?>
                            <textarea rows="7" placeholder="Enter message" name="body" required></textarea>
                            <br>
                            <button name="cancel" class="sendbtn">CANCEL</button>
                            <button type="submit" class="sendbtn" name="send" ">SEND</button>               
        </form>
		<script>
		function myFunction() {
			
			if($('#receiver').val()!="message"){
			document.getElementById("to").disabled = true;
			
			}
			else{
				document.getElementById("to").disabled = false;
				
			}
		}
		</script>
        </div>
        


            <div class="col-md-6">


            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a class="tablink" onclick="openCity('inbox', this)" id="defaultOpen">Inbox</a></li>
                  <li><a class="tablink" onclick="openCity('sendbox', this,)">Send Box</a></li>
                </ul>
              </div>
            </nav>
            
            </div>

            <div id="inbox" class="col-md-6 mbox tabcontent">



            <h1>Inbox</h1>
            
                <?php
                    require 'dbconnect.php';
					$databasecon= new DbConnect();
					$database=$databasecon->connect();
                    $receiver = $_SESSION["teacher"];

                    $res = mysqli_query($database, "select * from massages");
                    while($row=mysqli_fetch_array($res)){
                        if($row["receiver"] ==$_SESSION["teacher"]){
                            

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
                    mysqli_query($database, $sql );
                ?>
            
        </div>
        <div id="sendbox" class="col-md-6 tabcontent mbox">
            <h1>Send Box</h1>            
                <?php
                    $link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
                    mysqli_select_db($link,"semesterproject");
                    $receiver = $_SESSION["teacher"];

                    $res = mysqli_query($link, "select * from massages");
                    while($row=mysqli_fetch_array($res)){
                        if($row["sender"] ==$_SESSION["teacher"]){
                            

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
