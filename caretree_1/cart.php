<?php
session_start();
if(!isset($_SESSION['s_id'])){
        // session_destroy();
        header("location: login.php");
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
    </head>

    <body>
<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
 ?>
<?php include_once"header_color.php";?>
            	
                    <div class="row rmv ml-auto mr-auto" style="padding-top: 100px;">
                            
                
            	<div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                 


                  $id=$_SESSION['s_id'];
                    $totpay=0;
                 $sql= "SELECT c_id,i_img,i_name,l_name,i_price,quantity FROM cart c JOIN product p ON(p.p_id=c.p_id) JOIN n_login n on(n.l_id=p.l_id) where u_id=$id and req=0;"; 
                     $result=mysqli_query($conn,$sql);
                     
                     while($row = mysqli_fetch_assoc($result))
                     {

                            if ($row['i_price']==0) {
                                $pr="Free";
                            }
                            else{
                                $pr=$row['i_price'];
                                $totpay+=$pr;
                            }

                     $id1=$row['i_name'];
                $sql1= "SELECT index1, Foreword FROM tree_name WHERE index1=$id1"; 
                     $result1=mysqli_query($conn,$sql1);
                     
                     while($row1 = mysqli_fetch_assoc($result1))
                     {
                        $nm=$row1['Foreword'];
                     }

                 echo '
                <tr>
                  <th scope="row">
                    <div class="p-1">
                      <img src="'.$row['i_img'].'" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">'.$row['i_name'].'</a></h5><span class="text-muted font-weight-normal font-italic">NGO Name: '.$row['l_name'].'</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>'.$pr.'</strong></td>
                  <td class="align-middle">
                  <form method="post" action="">
                  <input type="text" name="id6" value="'.$row['quantity'].'" hidden="">
                  <input type="text" name="id5" value="'.$row['c_id'].'" hidden="">
                  <input type="submit" name="min" value="-" class="btn btn-sm">&nbsp; '.$row['quantity'].'   &nbsp;<input type="submit" name="plu" value="+" class="btn btn-sm">
               
                  </td>

                
                <input type="text" name="d_id" value="'.$row['c_id'].'" hidden>
                    
                  <td class="align-middle">
                  <input type="submit" name="delete" value="delete" >
                  </td>
                  </form>
                </tr>';
            }
                 ?>

<?php
if (isset($_POST['plu'])) 
{
    $id5=$_POST['id5'];
    $id6=$_POST['id6']+1;
    // echo "<script> alert('".$id5."');</script>";
    
    $query5="UPDATE cart SET quantity='$id6' WHERE c_id=$id5";
    mysqli_query($conn, $query5);
    // header('location: ???');
}

if (isset($_POST['min'])) 
{
    $id5=$_POST['id5'];
    $id6=$_POST['id6']-1;
    // echo "<script> alert('".$id5."');</script>";
    
    $query5="UPDATE cart SET quantity='$id6' WHERE c_id=$id5";
    mysqli_query($conn, $query5);
    // header('location: ???');
}
?>
                <!-- <tr>
                  <th scope="row">
                    <div class="p-1">
                      <img src="img/Karanja.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Karanja</a></h5><span class="text-muted font-weight-normal font-italic">NGO Name: Karanj</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>Free</strong></td>
                  <td class="align-middle"><button class="btn btn-sm">-</button>&nbsp; 3   &nbsp;<button class="btn btn-sm">+</button></td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr> -->
                
              </tbody>
            </table>
          </div>
          <!-- End -->
                </div>
                <form method="post" action="">
                    <input type="text" name="oi" value="<?php echo $_SESSION['s_id']; ?>" hidden>
                <input type="submit" name="order" value="<?php echo 'Request a Sapling&nbsp;&nbsp; Total Payable : '.$totpay; ?>" class="btn col-md-12 btn-success btn-md text-center">
                
                </form>
                
                
            
            </div>

            
        </div>
    <!-- <button onclick="topFunction()" id="myBtn" class="btn btn-outline-light btn-up" title="Go to top"><i class="fas fa-chevron-up"></i></button> -->
        <div class="overlay"></div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <!-- Popper.JS -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/new.js"></script>
    </body>

    </html>
<?php 

if (isset($_POST['delete'])) {
    $id=$_POST['d_id'];
// echo "<script> alert('delete sucess....');</script>";
    $query="DELETE FROM cart WHERE c_id=$id;";
    
    if (mysqli_query($conn, $query)) 
    {
        header("Refresh: 1; url=cart.php");
        // header('location: ???');
        // header('Refresh: '. 0);
       // header("Refresh:1");
      
    
    } 
// header('location: ???');
}


if (isset($_POST['order'])) {
    $id=$_POST['oi'];
   
// echo "<script> alert('delete sucess....');</script>";
    $query="UPDATE cart SET req=1 WHERE u_id=$id and req=0;";
    
    if (mysqli_query($conn, $query)) 
    {
        header("Refresh: 1; url=cart.php");
        // header('location: ???');
        // header('Refresh: '. 0);
       // header("Refresh:1");
      
    
    } 
// header('location: ???');
}



 ?>
    <?php } ?>

