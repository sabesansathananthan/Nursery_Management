<?php
$link = mysqli_connect("localhost", "root", "", "semesterproject") or die("Something wrong with the server, try again later.");
$output='';
$sql ="select * from teacher WHERE funame LIKE '%".$_POST["search"]."%'";
$res = mysqli_query($link,$sql);
$output .= '<div class="stafftable">
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NIC Number</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                  </tr>
                </thead>
                <tbody>';
if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                	$output .='<tr>
                    <td class="fname">'.$row["fname"].'</td>
                    <td class="lname">'.$row["lname"].'</td>
                    <td class="nic">'.$row["nic"].'</td>
                    <td class="email">'.$row["email"].'</td>
                    <td class="phone">'.$row["phone"].'</td>
                    <td class="gender">'.$row["gender"].'</td>
                    <td class=""><button class="deleteRow" id="dele" type="button" data-id3="'.$row["nic"].'"><i class="fa fa-times"></i>Delete</button></td>
                  </tr>';

                }
                $output .='</tbody>
              </table>
            </div>';
                echo $output;
}
else{
	$sql ="select * from teacher";
$res = mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($res)){
                	$output .='<tr>
                    <td class="fname">'.$row["fname"].'</td>
                    <td class="lname">'.$row["lname"].'</td>
                    <td class="nic">'.$row["nic"].'</td>
                    <td class="email">'.$row["email"].'</td>
                    <td class="phone">'.$row["phone"].'</td>
                    <td class="gender">'.$row["gender"].'</td>
                    <td class=""><button class="deleteRow" id="dele" type="button" data-id3="'.$row["nic"].'"><i class="fa fa-times"></i>Delete</button></td>
                  </tr>';

                }
                $output .='</tbody>
              </table>
            </div>';
                echo $output;
}


?>