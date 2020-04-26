<?php
session_start();
if(!isset($_SESSION['n_id'])){
        // session_destroy();
    echo "<script type='text/javascript' language='Javascript'>
            alert('Please login/register first...');
            window.open('ngoindex.php', '_self');</script>";
        }
else
{
?>

<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
        $id=$_SESSION['n_id'];
        $sql= "SELECT l_id,l_name,l_email,l_password,l_mobile,l_land, l_pincode,l_city,l_state,l_birthdate,datetimee FROM n_login WHERE l_id=$id;";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        


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
<?php include_once 'p_connection.php'; ?>

<body>

   <?php include_once"header_trans_sign.php";?>
            <form name="f_login" action="update.php" method="POST" class="register-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>

        <div class="txtb">
          <input type="text" value="<?php echo $row['l_name']?>" name="l_name" readonly>
          <!-- <span data-placeholder="Name"></span> -->
        </div>
        <div class="txtb">
          <input type="email" value="<?php echo $row['l_email']?>" name="l_email" readonly>
          <!-- <span data-placeholder="Email"></span> -->
        </div>

        <!-- <div class="txtb">
          <input type="password" name="l_password">
          <span data-placeholder="Password"></span>
        </div>
        <div class="txtb">
          <input type="password" name="l_re_password">
          <span data-placeholder="Confirm Password"></span>
        </div> -->
        <div class="txtb">
          <input type="mobile" value="<?php echo $row['l_mobile']?>" name="l_mobile" readonly>
          <!-- <span data-placeholder="Mobile"></span> -->
        </div>
        <div class="txtb">
          <input type="text" value="<?php echo $row['l_land']?>" name="l_mobile" readonly>
          <!-- <span data-placeholder="Mobile"></span> -->
        </div>
        
        <p id="wAjl_pincode"><input type="text" name="l_pincode" placeholder="360000" hidden=""></p>
        <p id="wAjl_city"><input type="text" name="l_city" placeholder="Rajkot" hidden=""></p>
        <p id="wAjl_state"><input type="text" name="l_state" placeholder="Gujarat" hidden=""></p>
            
        <input type="submit" name="update" class="logbtn" value="Update Info">

        
      </form>
    
              
             <div id="cover" class="min-vh-100">
    <!--<div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <img src="img/logo.png" style="width:170px;height: 100px">
                    <div class="px-2">
                        <form action="" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input type="text" class="form-control" placeholder="Jane Doe">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Launch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
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
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>




<!-- Javascript -->






<!-- php -->
<?php include_once 'p_connection.php'; ?>
<!-- / php -->


</body>

</html>
<?php } ?>