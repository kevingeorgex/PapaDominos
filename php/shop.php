<?php
	include_once 'db_connect.php';

    $con = connect_db();

	$categ = $_GET['category'];
	
	
	// the table name is "babynames"
	$query = "SELECT * from products WHERE category = '$categ'";
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