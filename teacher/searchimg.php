<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emergency</title>
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
                <div class="col-md-5">

                    <form action="checksearchimg.php" method="POST">
                        <ul>
                            <h2>Emergency Case</h2>
                            <li></br></br>
                                <label><b>Last Name</b></label></br></br>
                                <input type="text" name="lname" placeholder="Last Name" class="add lname" pattern="[A-Za-z]{2,}"  title="Enter valide name"><br>
								
                            </li>

                           <button type="submit" class="btn1" name="addadmin" "><span>SEARCH </span></button>
                           </li>
                        </ul>                           
                    </form>
                </div>
				
        </div>    
    </div>
</div>



 </script>
</body>
</html>
