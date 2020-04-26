<?php
session_start();
if(!isset($_SESSION['s_id'])){
        // session_destroy();
        echo "<script> alert('login first');</script>";
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
<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
 ?>
    <body>

<?php include_once"header_color.php";?>
            	
                    <div class="row rmv ml-auto mr-auto" style="padding-top: 100px;">
                            <div class="col-md-12" class="" style="margin-bottom: 10px;">
                                <form name="f_login" action="" method="">
                            Select NGO: 
                                <!-- <optgroup label="Rajkot">                         -->
                                <?php
                                 $sql= "select * from n_login;"; 
                                 $result=mysqli_query($conn,$sql);
                                 echo "<select class='form-control' name='l_area' onchange='Aj_tree()'>";
                                 
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                    echo "<option value=".$row['l_id'].">". $row['l_name'] ."</option>";
                                 }
                                    echo "</select>";
                            ?>
                            </form>
                            <!-- </optgroup> -->
                            
                        </div>
                        <div id="wAjl_tree">
                            <?php
                            
                                $id=1;
                            
                            $sql= "SELECT p_id, l_id, i_name, i_price, i_qty, i_img FROM product WHERE l_id=1"; 
                 $result=mysqli_query($conn,$sql);
                 
                 while($row = mysqli_fetch_assoc($result))
                 {
                    // echo "<input type=text' name='t_id' value=".$row['t_id'].">";
                    echo "<div class='col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12' style='float:left;'>
                                <div class='card wecare-card'>
                                  <form method='post' action=''>
                                      
                                    <img class='card-img-top care-img' src='".$row['i_img']."' alt='Card image cap'>
                                    <div class='card-body' style='background-image: linear-gradient(21deg,#3b8334,#285630);'>
                                        <div class='card-text text-md'>".$row['i_name']."</div>
                                        <div class='btn-toolbar justify-content-between'>
                            <input type='number' class='form-control col-md-4' maxlength='1' size='1' step='1' min='0' max='' value='1' name='quantity' >
                                <input type='text' name='p_id' value='".$row['p_id']."' hidden>
                                <input type='text' name='n1_id' value='".$id."' hidden>
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
                        </div>

                            <!-- <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12" style="float:left;">
                                <div class="card wecare-card">
                                  <form>
                                      
                                    <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #004e00;">
                                        <div class="card-text text-md">Neem Tree</div>
                                        <div class="btn-toolbar justify-content-between">
                            <input type="number" class="form-control col-md-4" maxlength="1" size="1" step="1" min="0" max="" value="1" name="quantity" >
  
                            <div class="btn-group">
                                <button class="btn btn-outline-light">Cart</button>
                            </div>
                        </div>
                                    </div>
                                  
                                  </form>
                                </div>
                            </div> -->    
                            <!-- <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card wecare-card">
                                  <a href="request_next.html" value="text">
                                    <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #004e00;">
                                        <div class="card-text text-md">Neem Tree</div>
                                    </div>
                                  </a>
                                </div>
                            </div>  -->   

                           <!--  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card wecare-card">
                                  <a href="request_next.html" value="text">
                                    <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #004e00;">
                                        <div class="card-text text-md">Neem Tree</div>
                                    </div>
                                  </a>
                                </div>
                            </div> -->    
                            <!-- <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
                                <div class="card wecare-card">
                                  <a href="request_next.html" value="text">
                                    <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                    <div class="card-body" style="background-color: #004e00;">
                                        <div class="card-text text-md">Neem Tree</div>
                                    </div>
                                  </a>
                                </div>
                            </div>  -->     
                    </div>
                    
                    
                
                
            	<!-- <footer>
                    <div class="container" style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-md-4" align="center"><p><i class="fa fa-envelope  mx-2"></i><a href="mailto:caretree1@gmail.com">caretree1@gmail.com</a></p> </div>
                            <div class="col-md-4" align="center" style="color: #fff; font-weight: bold; padding-top:5px;">CARETREE @ 2020</div>
                            <div class="col-md-4" align="center">
                                <p><a href="" >Team ID : TM000079 - Atmiya University</a></p>
                            </div>

                        </div>                    
                    </div>
                </footer> -->
                </div>
                
                
            
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
<script type="text/javascript">
    
function Aj_tree() {
    

var ajl_area =document.forms["f_login"]["l_area"];
var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            document.getElementById("wAjl_tree").innerHTML =this.responseText;
        }
    };
    xhttp2.open("GET", "pl_ngodrop.php?id="+ajl_area.value, true);
    xhttp2.send();
}
</script>

<script type="text/javascript">
    
function Aj_addcart(a) {
    
alert(a);
// var ajl_area =document.forms["f_login"]["l_area"];
// var xhttp2 = new XMLHttpRequest();
//     xhttp2.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
            
//             document.getElementById("wAjl_tree").innerHTML =this.responseText;
//         }
//     };
//     xhttp2.open("GET", "pl_ngodrop.php?id="+ajl_area.value, true);
//     xhttp2.send();
}
</script>

<?php 

if (isset($_POST['setcart'])) {
    
 
    $u_id=$_SESSION['s_id'];
    $p_id=$_POST['p_id'];
    $quantity=$_POST['quantity'];
    $n1_id=$_POST['n1_id'];
    $_SESSION['l_id']=$n1_id;
// echo "<script> alert('".$n1_id." ".$u_id." ".$p_id." ".$quantity."nid ok....');</script>";
    $flag=0;
    $sql1= "SELECT c_id, u_id, n_id, p_id, quantity, req FROM cart WHERE 1;";
        $result1=mysqli_query($conn,$sql1);
        while ($row1 = mysqli_fetch_assoc($result1)){
            if ($row1['u_id']==$u_id && $row1['n_id']==$n1_id && $row1['p_id']==$p_id && $row1['req']==0)
            {
                $id3=$row1['c_id'];
                $totqty=$row1['quantity']+$quantity;
                $query1="UPDATE cart SET quantity='$totqty' WHERE c_id=$id3;";
                if (mysqli_query($conn, $query1))
                {

                    echo "<script> alert('uploading sucess....');</script>";
                    $flag=1;
                    
                } 
                else
                {
                    echo "<script> alert('not uploading....');</script>";
                    $flag=1;
                   
                }
            }
        }
        if ($flag==0) {
            
        
     $query="INSERT INTO cart(c_id, u_id, n_id, p_id, quantity, req) VALUES (null,'$u_id','$n1_id','$p_id','$quantity','0')";
             if (mysqli_query($conn, $query))
                {

                    echo "<script> alert('uploading sucess....');</script>";
                    
                } 
                else
                {
                    echo "<script> alert('not uploading....');</script>";
                   
                }
                }



  
}


 ?> 

    </body>

    </html>
<?php } ?>