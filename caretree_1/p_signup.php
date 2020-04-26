<?php
session_start();
include_once "mail.php";
if(isset($_SESSION['s_id'])){
        // session_destroy();
        header("location: logout.php");
}
else
{
?>

<?php
include_once 'p_connection.php';
ini_set( "display_errors", 0);
if (isset($_POST['login'])) {
	$l_name = $_POST['l_name'];
	$l_email = $_POST['l_email'];
	$l_password =md5($_POST['l_password']);
	$l_mobile = $_POST['l_mobile'];
	// $l_house = $_POST['l_house'];
	// $l_street = $_POST['l_street'];
	$l_land = $_POST['l_area'];
	$l_pincode = $_POST['l_pincode'];
	$l_city = $_POST['l_city'];
	$l_state = $_POST['l_state'];

	$sql= "select * from pin_code where p_id=$l_land;"; 
				 $result=mysqli_query($conn,$sql);
				 
				 while($row = mysqli_fetch_assoc($result))
				 {
					$l_land=$row['p_area'];
				 }
	$f=0;
	$sql1= "SELECT l_id, l_name, l_email, l_password, l_mobile, l_land, l_pincode, l_city, l_state, l_birthdate, datetimee FROM login WHERE 1"; 
        $result1=mysqli_query($conn,$sql1);
        // echo "<script> alert('ente sucess....');</script>";
        while ($row1 = mysqli_fetch_assoc($result1)){
        	// echo "<script> alert('2 sucess....');</script>";
            if ($row1['l_email']==$l_email){
            	// echo "<script> alert('3 sucess....');</script>";
            	$f=1;

            }
         }
      if ($f==0) {
      	
     
	$query="INSERT INTO login
	(l_name,l_email,l_password,l_mobile,l_land,l_pincode,l_city,l_state,l_birthdate,datetimee) VALUES 
	('$l_name','$l_email','$l_password','$l_mobile','$l_land','$l_pincode','$l_city','$l_state',NULL,NULL);";
	//echo "$query";
	// printf("Last inserted record has id %d\n", mysql_insert_id());

	if (mysqli_query($conn, $query)) 
	{
	 	// $_SESSION["s_id"] =$row['l_id'];
	 	$_SESSION["l_email"]=$l_email;
	 	$_SESSION['l_name'] =$l_name;
	 	$subject="Welcome your registration has been recorded";
	 	$body="Congratulation,your registration has been done successfully";
	 	
	 	otpSend($_SESSION['l_email'],$_SESSION['l_name'],$subject,$body);
	 	echo "<script> alert('Registration is successfull... Please Login...');</script>";
        echo "<script type='text/javascript' language='Javascript'>window.open('login.php', '_self');</script>";
	} 
	else
	{
		echo "<script> alert('register faile....');</script>";
		 echo "<script type='text/javascript' language='Javascript'>window.open('register.php', '_self');</script>";
	}
	 }else{
	 	echo "<script> alert('email already exist.....');</script>";
        echo "<script type='text/javascript' language='Javascript'>window.open('login.php', '_self');</script>";
	 }
}



?>

<?php } ?>