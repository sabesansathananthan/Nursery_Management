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