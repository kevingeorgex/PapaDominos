<?php

include_once 'db_connect.php';

$con = connect_db();

	$name = $_GET['product'];
	
	
	// the table name is "babynames"
	if ($name == '*'){
		$query = "SELECT * from products";
	}
	else{
		$query = "SELECT * from products WHERE UPPER(name) LIKE UPPER('%{$name}%')";
	}
	$rows = $con->query($query);
	
	
	$info = array();
	
	foreach($rows as $row){
		$info[] = $row['id'];
		$info[] = $row['name'];
		$info[] = $row['category'];
		$info[] = $row['price'];
		$info[] = $row['description'];
		$info[] = $row['image'];
	}
	echo json_encode($info);
	
	
	
?>