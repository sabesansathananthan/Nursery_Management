<?php 
    session_start();
    if($_SESSION['nic'] == ""){
        ?>
            <script type="text/javascript">
                window.location = "/semester3";
            </script>
        <?php
    }
 ?>
    

    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
        <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Happy Kids</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right log">
                <button type="button" class="btn btn-default dropdown-toggle" onclick="document.getElementById('demo').style.display='block'"> 
                    <i class="glyphicon glyphicon-user"></i>
                    <span>
                        <?php
                            echo $_SESSION["kid"];
                        ?>
                    </span>
                    
                </button>
                <ul class="dropdown-menu logout" id="demo">
                        <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->

