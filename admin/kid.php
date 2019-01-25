<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/searchkid.js"></script>
    
    
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
            <h1>Our Kids</h1>  
            
            <button class="btnsearch"><i class="fa fa-search"></i>Search</button>   
            <input type="text" name="searchstaff" class="searchstaff" id="search" placeholder=" Search Staff" >
            <a class="addstaff" href="addkid.php" ><i class="fa fa-plus"></i>Add Kid</a>
            <div class="kidtable">
              
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
              url:"kidData.php",
              method:"post",
              data:{search:txt},
              dataType:"text",
              success:function(data){
                $('.kidtable').html(data);
              }
          });
  $('#search').keyup(function(){
      var txt =$(this).val();
      if(txt != ''){
        $('.stafftable').html('');
        $.ajax({
            url:"kidData.php",
            method:"post",
            data:{search:txt},
            dataType:"text",
            success:function(data){
              $('.kidtable').html(data);
            }

        });
      }
      else{
        $.ajax({
            url:"kidData.php",
            method:"post",
            data:{search:txt},
            dataType:"text",
            success:function(data){
              $('.kidtable').html(data);
            }

        });
      }
    });

  


  });
</script>
</body>
</html>


