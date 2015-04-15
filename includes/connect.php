<?php 
//Why is this important? Why does localhost have to be first?
//This is important that it is in this order so the server, any other way no longer works
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
	//if it does not connect we want it to die
	if($mysqli->connect_error){
		die('Connect Error ('. $mysqli->connect_errno . ')'
			. $mysqli->connect_error);
	}
	else{
		echo "Connection made";
	}
	$mysqli->close();
?>