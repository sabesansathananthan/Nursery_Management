<?php

class db{

	public $link;
	public function __construct(){
		$link = mysqli_connect("localhost", "root", "", "") or die("Something wrong with the server, try again later.");
		mysqli_select_db($link,"semesterproject");
	}

	public function getLink(){
		return $this->link;
	}

}



?>