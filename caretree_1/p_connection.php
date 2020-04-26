<?php

// include_once 'p_connection.php';
// ini_set( "display_errors", 0);


$conn = mysqli_connect("localhost","root","", "grow_green");
if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 



// $conn = mysqli_connect("2a02:4780:bad:c0de::13","id12211071_root","tree_care", "id12211071_tree_care");
// if ($conn->connect_error) 
// 	{
//     die("Connection failed: " . $conn->connect_error);
// 	} 

// if (isset($_POST[''])) {
// 		 = $_POST[''];

// 		$sql= "select * from pin_code;"; 
// 		$result=mysqli_query($conn,$sql);
		
// 		while($row = mysqli_fetch_assoc($result))
// 		{
// 			echo $row['p_id']." ". $row['p_area'];
// 		}
// 	}	

?>
