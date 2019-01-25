<?php
	class DbConnect{
		public function connect(){
			$link= mysqli_connect("localhost","root","","semesterproject") or die ("SORRY!!! Server Problem");
			return $link;
		}
		
	}


?>