<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="getLocation()">
<?php include_once 'p_connection.php';?>
<table border="1" align="center">
	<caption>Upload tree</caption>

<form  action="" method="post" enctype="multipart/form-data">
	<tr>
		<td>Select image:</td>
		<td><input type="file" name="t_img" value="chose image"></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><input type="text" name="t_address" placeholder="tree location"></td>
	</tr>
	<tr>
		<td colspan="2" align=center>
		<div id="typ"></div>
		<input id="t_latitude" value="" type='hidden'  name='t_latitude' readonly=""><br>
  		<input id="t_longitude" value="" type='hidden'  name='t_longitude' readonly="" >
		<input type="submit" value="Upload Image" name="tree_uploade" onclick="">
			</td>
	</tr>
</form>


<?php
if (isset($_POST['tree_uploade'])) {
	$type = $_FILES['t_img']['type'];
	$size = $_FILES['t_img']['size'];
	$name = $_FILES['t_img']['name'];
	$tmp_name = $_FILES['t_img']['tmp_name'];
	$error = $_FILES['t_img']['error'];
	$extension = array("jpeg","jpg","png");

	$t_address = $_POST['t_address'];
	$t_latitude = $_POST['t_latitude'];
	$t_longitude = $_POST['t_longitude'];

	// echo "$t_address<br>$t_latitude<br>$t_longitude<br>";
	$ext = pathinfo($name, PATHINFO_EXTENSION);
	if(in_array($ext, $extension)){
	  	if( is_uploaded_file($tmp_name) ){
			move_uploaded_file($tmp_name,"img/img_tree_uploade/".$name) or
						die("Error in uploading file : ".$name);
			$path="img/img_tree_uploade/".$name;

			$query="INSERT INTO tree_loc(t_id,lat, lng, t_status, t_timestamp, t_address, t_img) VALUES(null,'$t_latitude','$t_longitude','G',null,'$t_address','$path');";
			if (mysqli_query($conn, $query)) 
				{
				 	echo "uploading sucess....";
				} 
				else
				{
					echo "not uploading";
				}	



		}    
	}else{
	    echo "Please, Select the file from the following extension: jpeg, jpg, png, gif";
	  }

}

if(isset($path)){
	echo "<tr><td colspan='2' align=center><img src='".$path."' alt=treeimage height='200px' width='200px'></td></tr>";
} else {
  	echo "<tr><td colspan='2' align=center><img src='img/default/care tree.jpeg' alt=treeimage height='200px' width='200px'></td></tr>";
}
?>
 
	



</table>

<script>
function getLocation() {
	
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
	
  document.getElementById("t_latitude").value = position.coords.latitude;
  document.getElementById("t_longitude").value = position.coords.longitude;
  		
  												
}
// getLocation()
</script>

</body>
</html>