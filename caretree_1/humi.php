<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" align="center">
		<tr><th>No.</th><th>Data</th></tr>
<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);

 $sql1= "SELECT id, humi FROM abc WHERE 1"; 
 $result1=mysqli_query($conn,$sql1);
 
 while($row1 = mysqli_fetch_assoc($result1))
 {
   
    echo "<tr><td>".$row1['id']."</td><td>".$row1['humi']."</td></tr>";
 }

 ?>


	

</table>


</body>
</html>