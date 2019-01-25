<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Child's Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link href="css/master.css" rel="stylesheet">
      <?php
        include "header.php";
        require "Images.php";
      ?>
      <script src="js/jquery.min.js"></script>
      <script src="browsfile.js"> </script>
</head>
<body>
  <div class="ch-container">
    <div class="row">
      <?php 
        include "sidebar.php";
      ?>
      <div id="content" class="col-lg-10 col-sm-10">
        <h1 align="center" ><b>Edit Profile</b></h1>
        <div class=" row">
          <div class="col-md-8">
            <?php
              $dataconnect = new DbConnect();
              $database=$dataconnect->connect();
              $query="select * from kid where nic='{$_SESSION['nic']}'";
              $result = mysqli_query($database,$query);
              while($row = mysqli_fetch_array($result)){
            ?>
            <form action=dbprofile.php method="POST" class="editprofile" enctype="multipart/form-data">
              <table style='margin-top:50px;'>
                <tr>
                  <td class="lcolumn" width="40%"><label for="FirstName">First Name </label> :</td>
                  <td><?php echo '<input type="textarea" name="fname" value='.$row['fname'].' class="add" ></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="LastName">Last Name </label> :</td>
                  <td><?php echo '<input type="textarea" name="lname" value='.$row['lname'].' class="add" ></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="ID">NIC ID Number of  the Parent </label></td>
                  <td><?php echo '<label  name="nic" class="add">'.$row['nic'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="Birthday">Birthday </label> :</td>
                  <td><?php echo '<label  name="birthday" class="add">'.$row['birthday'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="Gender">Gender </label> :</td>
                  <td><?php echo '<label  name="gender" class="add">'.$row['gender'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="Email">EMail </label> :</td>
                  <td><?php echo '<input type="textarea" name="email" value='.$row['email'].' class="add" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title ="example@example.domain"></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="AdmissionDate">Date Of Admission </label> :</td>
                  <td><?php echo '<label  name="admitiondate" class="add">'.$row['admitiondate'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="LandPhoneNo">Land Phone Number </label> :</td>
                  <td><?php echo '<input type="textarea" name="phone" value='.$row['phone'].' class="add"  minlength="10" maxlength="10" pattern="[0-9]{2,}" title=" Only numbers can add "></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="adress">Address </label> :</td>
                  <td><?php echo '<input type="textarea" name="address" value='.$row['address'].' class="add" ></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="FathersName">Father's Name</label> :</td>
                  <td><?php echo '<label  name="fathername" class="add">'.$row['fathername'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="lcolumn" width="40%"><label for="FathersName">Mother's Name</label> :</td>
                  <td><?php echo '<label  name="mothername" class="add">'.$row['mothername'].'</label></br>'?></td>
                </tr>
                <tr>
                  <td class="bottom" colspan="2"><button type="submit" name="update" class="btn1"><span><b>Update</b></span></button></td>
                </tr>
        
              </table>
            </form>
  <?php
              }
  ?>
      
          </div>
          <div class="col-md-2" align="left">
          <a onclick="document.getElementById('id01').style.display='block'" id="show-project-a">
            <div class="img-box">
              <div class="img" align="left">
                <?php
                  $display = new Images('kid');
                  $display->display();
                ?>
              </div>
            </div>
          </a>
        </div>
      </div>
        
        <!-- start popup form -->
        <!-- The Modal -->
        <div id="id01" class="modal col-md-12">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <!-- Modal Content -->
          <form action=dbchangeprofilepic.php method="POST" enctype="multipart/form-data"  class="modal-content animate">
            <h1 align="center">Change Profile Photo</h1>
            <div class="imgcontainer" align="center">
              <?php
                $dataconnect = new DbConnect();
                $database=$dataconnect->connect();
                $query = " SELECT photo FROM kid WHERE nic='{$_SESSION['nic']}' ";
                $result = mysqli_query($database,$query);
                while($row = mysqli_fetch_array($result)){
                  if($row['photo']!=null){
                    echo '<img  height="200" width="200" alt="Avatar" src="data:photo;base64,'.$row['photo'].'" >';
                  }
                  else{
                    echo '<img  height="300" width="300" alt="Avatar" src="img\user.png" alt="Avatar">';
                  }
                }
              ?>
            </div>
            <div class="container" >
              <input type="file" name="image" class="btn1" id="fileLoader"style="display:none;"></input>
                <input type="button" id="btnOpenFileDialog" value="BrowsePhoto" onclick="openfileDialog();" class="btn1"></input>
                <br>
                <button type="submit" value="update" name="updatepic" class="btn3"><span>Upload</span></button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn3">Cancel</button>
            </div>  
          </form>
          <!-- end popup form --> 
        </div>
              
      </div>
    </div>
  </div>
</body>
</html>
<script type=text/javascript>
  function openfileDialog() {
    $("#fileLoader").click();
}
</script>