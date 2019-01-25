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
    <style type="text/css">
        #error{
            color: red;
            border: solid 2px #ff5766;
            background-color: #ffa016;}
    </style>
</head>

<body>
    
   

<div class="ch-container">
    <div class="row">
        
            <?php 
                include "sidebar.php";
            ?>
  
  
            <div class="col-md-10">
                <div class="addteacher">

                    <form action="checksearchimg.php" method="POST">
                        <ul>
                            <h2>Emergency Case</h2>
                            <li>
                                <label><b>Last Name</b></label>
                                <input type="text" name="lname" id="error"placeholder="Reenter Last Name" class="add lname" pattern="[A-Za-z]{2,}"  title="Enter valide name"><br>

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
