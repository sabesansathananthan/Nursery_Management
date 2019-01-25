<?php
require 'dbconnect.php';
	class Images{
		private $table;
		public function __construct($table){
			$this->table=$table;
		}
		
		public function display(){
				
			$dataconnect = new DbConnect();
			$database=$dataconnect->connect();
			$nic =$_SESSION["nic"];
			$query = " SELECT photo FROM kid WHERE nic='{$nic}'";
			$result = mysqli_query($database,$query);
			while($row = mysqli_fetch_array($result)){
				if($row['photo']!=null){
				echo '<img  class="user" height="150" width="150" alt="Avatar" src="data:photo;base64,'.$row['photo'].'" >';
				}
				else{
					echo '<img  class="user" height="150" width="150" alt="Avatar" src="img\user.png" alt="Avatar">';
				}
			}
		}
		
		public function saveImage($image){
			session_start();
			$dataconnect = new DbConnect();
			$database=$dataconnect->connect();
			$nic =$_SESSION["nic"];
			$query = "UPDATE kid SET photo=('$image') WHERE nic='{$nic}'";
			$result = mysqli_query($database,$query);
			if ($result){
				echo "<script type='text/javascript'>alert('Photo Succesfully Updated')</script>";
				
			}
			else{
				echo "<script type='text/javascript'>alert('Error Occured...Please retry!!!!')</script>";
			}
		}
	}


?>