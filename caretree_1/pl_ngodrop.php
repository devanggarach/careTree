<html>
<body>

<?php
include_once 'p_connection.php';
$id=$_GET['id'];
$_SESSION['id']=$id;


				 $sql= "SELECT p_id, l_id, i_name, i_price, i_qty, i_img FROM product WHERE l_id=$id;"; 
				 $result=mysqli_query($conn,$sql);
				 
				 while($row = mysqli_fetch_assoc($result))
				 {
					// echo "<input type=text' name='t_id' value=".$row['t_id'].">";
					echo "<div class='col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12' style='float:left;'>
                                <div class='card wecare-card'>
                                  <form method='post' action=''>
                                      
                                    <img class='card-img-top care-img' src='".$row['i_img']."' alt='Card image cap'>
                                    <div class='card-body' style='background-color: #004e00;'>
                                        <div class='card-text text-md'>".$row['i_name']."</div>
                                        <div class='btn-toolbar justify-content-between'>
                            <input type='number' class='form-control col-md-4' maxlength='1' size='1' step='1' min='0' max='' value='1' name='quantity' >
                                <input type='text' name='p_id' value='".$row['p_id']."' hidden>
                                <input type='text' name='n1_id' value='".$row['l_id']."' hidden >
                                <input type='text' name='id' value='".$id."' hidden>
                            <div class='btn-group'>
                            <input type='submit' name='setcart' value='Cart' class='btn btn-outline-light'>
                               
                            </div>
                        </div>
                                    </div>
                                  
                                  </form>
                                </div>
                            </div> ";
				 }
			    	
				?>
				<!-- <p id="demo"></p> -->
	
	
</body>
</html>