<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/jquery.min.js"></script>
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
         ?>
         <h1 align="center" ><b>Leave Application</b></h1>;
    <form action=dbleave.php method="POST" class="leaveapp">
        <table style='margin-top:50px;'>
            <tr>
			
                <td class="lcolumn" width="20%"><label for="firstname">First Name </label>* :</td>
                <td><?php echo '<input type="text" name="fname" placeholder="FirstName" title = "Name Only can Contains letters" class="add1" pattern="[A-Za-z]{2,}" title = "Name Only can Contains letters" required>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="id">ID Number </label>* :</td>
                <td><?php echo '<input type="text"  name="nic" placeholder="NIC Number" class="add1" minlength="10" maxlength="10" pattern="[0-9]+[vV]" title=" 983746534v " required>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="email">E-Mail </label>* :</td>
                <td><?php echo '<input type="text" name="email" placeholder="E-mail" class="add1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title ="example@example.domain" required>'?></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="type">Type of leave </label>* :</td>
                <td><select name="type" class="add1 op" placeholder="Leave Type" id="leave" onChange="myFunction();" required>
                            <option value="" selected data-default hidden>Pleace Choose one</option>
                              <option value="Long Leave" class="addop">Long Leave</option>
                              <option value="Half day" class="addop">Half day</option>
                              <option value="short leave" class="addop">Short leave</option>
                            </select>
                        </td>
            </tr>
			
			<tr>
                <td class="lcolumn" ><label for="from">Leave Date </label>* :</td>
                <td><input type="date" name="leavefrom" placeholder="From" class="add1" id="leavefrom" required /></td>
            </tr>
			<tr>
                <td class="lcolumn" ><label for="to">Leave until</label>* :</td>
                <td><input type="date" name="leaveto" placeholder="Untill" class="add1" id="leaveto" disabled required /></td>
            </tr>
            <tr>
                <td class="lcolumn" ><label for="reason">Reason </label>* :</td>
                <td><textarea name="reason" placeholder="Reason for leave" class="add2" row="5" required></textarea></td>
            </tr>
            <tr>
                <td class="bottom" colspan="2"><button type="submit" name="request" class="btn1"><span><b>REQUEST</b></span></button></td>
            </tr>
			
        </table>
        
        </form>
		<script>
		function myFunction() {
			
			if($('#leave').val()!="Long Leave"){
			document.getElementById("leaveto").disabled = true;
			
			}
			else{
				document.getElementById("leaveto").disabled = false;
				
			}
		}
</script>
		<span class="validity"></span>
    </div>
</div>

  

    
</div>
</div>
</body>
</html>
