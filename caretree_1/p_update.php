

<?php
include_once 'p_connection.php';
session_start();
if (isset($_POST['update'])) {
	
	$l_name = $_POST['l_name'];
	
	
	$l_mobile = $_POST['l_mobile'];
	$l_land = $_POST['l_area'];
	$l_pincode = $_POST['l_pincode'];
	$l_city = $_POST['l_city'];
	$l_state = $_POST['l_state'];
	$id=$_SESSION['s_id'];


	$sql= "select * from pin_code where p_id=$l_land;"; 
		 $result=mysqli_query($conn,$sql);
		 
		 while($row = mysqli_fetch_assoc($result))
		 {
			$l_land=$row['p_area'];
		 }
				 
	echo $l_name." ".$l_mobile." ".$l_land." ".$l_pincode." ".$l_city." ".$l_state;
	$query= "UPDATE login SET l_name='$l_name',l_mobile='$l_mobile',l_land='$l_land',l_pincode='$l_pincode',l_city='$l_city',l_state='$l_state' WHERE l_id=$id;"; 
	// $result=mysqli_query($conn,$query);
				
	
	if (mysqli_query($conn,$query)) 
	{
	 	// $_SESSION["s_id"] =$row['l_id'];
	 	echo "<script> alert('update sucess....');</script>";
        echo "<script type='text/javascript' language='Javascript'>window.open('myaccount.php', '_self');</script>";
	} 
	
}



?>

