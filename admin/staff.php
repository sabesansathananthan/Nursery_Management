<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/searchteacher.js"></script>
    
    
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

         <div class="container col-md-10 staff">
            <h1>Our Staff</h1>  
            
            <button class="btnsearch"><i class="fa fa-search"></i>Search</button>   
            <input type="text" name="searchstaff" class="searchstaff" id="search" placeholder=" Search Staff" >
            <a class="addstaff" href="addteacher.php" ><i class="fa fa-plus"></i>Add Teachers</a>
            <div class="stafftable">
              
            </div>
        </div>
    </div>
</div>  

    
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    var txt =$(this).val();
    $.ajax({
              url:"staffData.php",
              method:"post",
              data:{search:txt},
              dataType:"text",
              success:function(data){
                $('.stafftable').html(data);
              }
          });
  $('#search').keyup(function(){
      var txt =$(this).val();
      if(txt != ''){
        $('.stafftable').html('');
        $.ajax({
            url:"staffData.php",
            method:"post",
            data:{search:txt},
            dataType:"text",
            success:function(data){
              $('.stafftable').html(data);
            }

        });
      }
      else{
        $.ajax({
            url:"staffData.php",
            method:"post",
            data:{search:txt},
            dataType:"text",
            success:function(data){
              $('.stafftable').html(data);
            }

        });
      }
    });

  


  });
</script>
</body>
</html>


