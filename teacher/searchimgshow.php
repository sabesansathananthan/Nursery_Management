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
                <div class="addteacher">
                        <ul>
                            <h2>Emergency Case Details</h2>
                            <li>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "semesterproject");
                                // Check connection
                                if (mysqli_connect_errno()) {
                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }
                                $ln=$_GET['id'];

                               // $result = mysqli_query($link,"SELECT * FROM kid");
                                $resulta = $link->query("SELECT * FROM kid where lname='{$ln}'");
                                //$count=mysql_num_rows($resulta);
                                //$r=$resulta->fetch_object();
                                //var_dump($r->funame);
                               // die();
                                echo "<table border='1' class='table table-bordered table-striped'>


<tr>
<th> FULL NAME </th>
<th> PHONE NO </th>
<th>ADDRESS </th>
</tr>";

                                while($row = mysqli_fetch_array($resulta))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $row['funame'] . "</td>";
                                    echo "<td>" . $row['phone'] . "</td>";
                                    echo "<td>" . $row['address'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";



                                mysqli_close($link);
                                ?>


                            </li>
                            <a href="searchimg.php"
                            <a href="searchimg.php"><button type="submit" class="btn1" name="addadmin" "><span>BACK </span></button></a>
                           </li>
                        </ul>                           

                </div>
        </div>    
    </div>
</div>



<!-- external javascript -->
 <script src="js/jquery.min.js"></script>
 <script type="text/javascript">
   $(":submit").click(function(){
      //alert("all values are valied");
      alert($(fname));
   });
 </script>
</body>
</html>
