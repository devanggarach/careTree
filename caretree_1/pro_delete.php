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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Care Tree</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <!-- Font Awesome JS -->
        <script defer src="js/all.min.js"></script>
<style>

</style>
    </head>
    <style>
        .text-x{
          color: #fff;
          font-size: 10px;
      }
      .text-xb{
          padding-top: 2px;
          color: #fff;
          font-size: 16px;
      }

  </style>
  <body>

 <?php include_once"ngo_header_color.php";?>
                        <div class="row rmv ml-auto mr-auto">
                            <table class="table">
                                <table class="table">
  <thead>
    <tr>
      <th scope="col">Image of tree</th>
      <th scope="col">Tree Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
 ?>


<?php 
$id=$_SESSION['n_id'];

 $sql= "SELECT p_id, l_id, i_name, i_price, i_qty, i_img FROM product WHERE l_id=$id;"; 
				 $result=mysqli_query($conn,$sql);
				 
				 while($row = mysqli_fetch_assoc($result))
				 {
				 	
				 	echo "    <tr>
<td> <img src='".$row['i_img']."' height=50px width=50px ></td><td>".$row['i_name']."</td><td>".$row['i_price']."</td><td>".$row['i_qty']."</td><td>
				 	<form method='post' action=''>
				 	<input type='text' name='d_id' value='".$row['p_id']."' hidden>
				 	<input type='submit' name='delete' value='Delete'>
				 	</form></td></tr>";
				 }


 ?>

  </tbody>
</table>
                            </table>
                        </div>  
                        </div>
                    </div>

<?php 

if (isset($_POST['delete'])) {
	$id=$_POST['d_id'];

	$query="DELETE FROM `product` WHERE p_id=$id;";
	
	if (mysqli_query($conn, $query)) 
	{
	 	
	 	
	 	echo "<script> alert('delete sucess....');</script>";
	 	header('Refresh: '. 0);
    
	} 

}



 ?>



</body>
</html>
<?php } ?>