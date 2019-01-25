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

</head>

<body>
    
   

<div class="ch-container">
    <div class="row">
        
            <?php 
                include "sidebar.php";
            ?>
  
  
            <div class="col-md-10">
                <div class="addteacher">
              <h1>ADD ADMIN</h1>
                    <form action="db.php" method="POST">
                        <ul>
                  <h2>Basic Details</h2>
                            <li>
                            <label><b>First Name</b></label>
                            <input type="text" name="fname" placeholder="First Name" class="add fname" pattern="[A-Za-z]{2,}"  title="Enter valide name">
                            <label><b>Last Name</b></label>
                            <input type="text" name="lname" placeholder="Last Name" class="add lname" pattern="[A-Za-z]{2,}"  title="Enter valide name"><br>
                            </li>
                            <li>
                            <label><b>Full Name</b></label>
                            <input type="text" name="funame" placeholder="Full Name" class="add full" pattern="[A-Za-z ]{5,}" title="Enter valide name"><br>
                           </li>
                           <li>
                             <label><b>NIC Number</b></label>
                            <input type="text" name="nic" placeholder="NIC Number" class="add nic" minlength="10" maxlength="10" pattern="[0-9]+[v]" title="Like 963170823v"><br>
                           </li>
                           <li>
                            <label for="birthday" ><b>Birthday</b></label>
                            <input type="date" name="birthday" placeholder="Birthday" class="add birthday">
                            <label for="gender"><b>Gender</b></label>
                            <select name="gender" class="add op" >
                              <option value="male" class="add op">Male</option>
                              <option value="Female" class="add op">Female</option>
                            </select>
                               </li>
                        <li>
                           <label><b>Nationality</b></label>
                            <input type="text" name="nationality" placeholder="Nationality" class="add nationality" pattern="[A-Za-z]{2,}"  title="Enter valide name">
                            <label for="position"><b>Position</b></label>
                            <select name="position" class="add op" >
                              <option value="maried" class="add op">Maried</option>
                              <option value="single" class="add op">Single</option>
                            </select>
                        </li>
                        <h2>Contact Details</h2>
                               <li>
                                 <label><b>Email</b></label>
                           <input type="email" name="email" placeholder="Email " class="add" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title ="example@example.domain">
                            <label><b>Phone</b></label>
                           <input type="fa-phone" name="phone" placeholder="Phone" class="add phone" pattern="[0-9]{10}" title="Like 0777313899">
                           <br>
                             </li>
                            <li>
                               <label><b>Address</b></label>
                            <input type="text" class="add address" name="address" placeholder="Address">
                            <br>
                            </li>
                          <h2>Bank Deatails</h2>
                          <li>
                             <label><b>Bank Name</b></label>
                           <select name="bank" class="add op" >
                              <option value="BOC Bank" class="add op">BOC Bank</option>
                              <option value="People's Bank" class="add op">People's Bank</option>
                            </select>
                            <label><b>Acc Number</b></label>
                           <input type="text" name="accnum" placeholder="Account Number" class="add accnum" pattern="[0-9]{5,20}" title="Enter valid acc number"><br>
                           </li>
                            <li>
                               <label><b>Branch Name</b></label>
                            <input type="text" class="add branch" name="branch" placeholder="Branch Name" pattern="[A-Za-z]{3,}" ><br>
                            </li>
                            <li>
                           <button onclick="location.href='index.php'" class="btn1 bbb"><span>CANCLE</span> </button>  
                           <button type="submit" class="btn1" name="addadmin" "><span>ADD </span></button>
                           </li>
                        </ul>                           
                    </form>
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


