   <?php

session_start();
if(!isset($_SESSION['n_id'])){
        // session_destroy();
        header("location: n_login.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
 ?>

<table border="1">
	<tr><td>Image</td><td>Foreword</td><td>Price</td><td>Qty</td></tr>
<?php 
$id=$_SESSION['n_id'];

 $sql= "SELECT Foreword,p_id, l_id, i_name, i_price, i_qty, i_img FROM product p join tree_name n on(n.index1=p.i_name) WHERE p.l_id=1;"; 
				 $result=mysqli_query($conn,$sql);
				 
				 while($row = mysqli_fetch_assoc($result))
				 {
				 	
				 	echo "<tr><td> <img src='".$row['i_img']."' height=50px width=50px ></td><td>".$row['Foreword']."</td><td>".$row['i_price']."</td><td>".$row['i_qty']."</td>";
				 }


 ?>

</table>

<?php 

// if (isset($_POST['delete'])) {
// 	$id=$_POST['d_id'];

// 	$query="DELETE FROM `product` WHERE p_id=$id;";
	
// 	if (mysqli_query($conn, $query)) 
// 	{
	 	
	 	
// 	 	echo "<script> alert('delete sucess....');</script>";
// 	 	header('Refresh: '. 0);
    
// 	} 

// }



 ?>



</body>
</html>
<?php } ?>