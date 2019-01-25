<?php
	class DbConnect{
		public function connect(){
			$database= @mysqli_connect("localhost","root","","semesterproject") or die ("SORRY!!! Server Problem");
			return $database;
		}
		
	}


?>