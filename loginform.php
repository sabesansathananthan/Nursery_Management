<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<!--login form-->
         <div id="id01" class="modal">
            <form class="modal-content animate" action="connect.php" method="POST">
               <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               <div class="container">
                  <label for="uname"><b>Username</b></label><br>
                  <input type="text" placeholder="Enter Username" class="loginFeild" name="uname" required><br>

                  <label for="psw"><b>Password</b></label><br>
                  <input type="password" placeholder="Enter Password" class="loginFeild" name="psw" required><br>
                 
                  <button type="submit" class="loginButton" name="adminlogin">Login</button><br>
                  <label>
                     <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                  <span class="psw">Forgot <a href="#">password?</a></span>
               </div>
               
            </form>
         </div>
         <!--end of login form-->



         <div id="id02" class="modal">
            <form class="modal-content animate" action="connect.php" method="POST">
               <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
               <div class="container">
                  <label for="uname"><b>ID Number</b></label><br>
                  <input type="text" placeholder="Enter ID Number" class="loginFeild" name="uname" required><br>

                  <label for="psw"><b>Password</b></label><br>
                  <input type="password" placeholder="Enter Password" class="loginFeild" name="psw" required><br>
                 
                  <button type="submit" class="loginButton" name="teacherlogin">Login</button><br>
               </div>
               
            </form>
         </div>
         <!--end of login form-->



         <div id="id03" class="modal">
            <form class="modal-content animate" action="connect.php" method="POST">
               <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
               <div class="container">
                  <label for="uname"><b>ID Number</b></label><br>
                  <input type="text" placeholder="Enter ID Number" class="loginFeild" name="uname" required><br>

                  <label for="psw"><b>Password</b></label><br>
                  <input type="password" placeholder="Enter Password" class="loginFeild" name="psw" required><br>
                 
                  <button type="submit" class="loginButton" name="parentlogin">Login</button><br>
                  <label>
                     <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                  <span class="psw">Forgot <a href="#">password?</a></span>
               </div>
               
            </form>
         </div>
         <!--end of login form-->
</body>
</html>

