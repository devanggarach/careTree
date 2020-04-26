<?php
session_start();
if(isset($_SESSION['s_id'])){
        // session_destroy();
        header("location: logout.php");
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

<?php include_once"header_trans_sign.php";?>
            <form action="" method="POST" class="login-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>

        <div class="txtb">
          <input type="text" name="l_email">
          <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
          <input type="password" name="l_password">
          <span data-placeholder="Password"></span>
        </div>
        <div id="wJsl_password"></div>
        <div class="bottom-t">
          <a href="#register">Forgot password?</a>
        </div>
        
        <input type="submit" name="l_login" class="logbtn" value="LOGIN">

        <div class="bottom-text">
          Don't have account? <a href="register.php"><b>CITIZEN REGISTER </b></a>
        </div>
        <div class="bottom-text">
          login  as NGOs <a href="n_login.php"><b>NGOs login </b></a>
        </div>

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
            
            <footer>
                <div class="container" style="padding-top: 10px;">
                    <div class="row">
                        <div class="col-md-4" align="center"><p><i class="fa fa-envelope  mx-2"></i><a href="mailto:caretree1@gmail.com">caretree1@gmail.com</a></p> </div>
                        <div class="col-md-4" align="center" style="color: #fff; font-weight: bold; padding-top:5px;">CARETREE @ 2020</div>
                        <div class="col-md-4" align="center">
                            <p><a href="" >Team ID : TM000079 - Atmiya University</a></p>
                        </div>

                    </div>                    
                </div>
            </footer>
        
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


<!-- php -->
<?php



include_once 'p_connection.php';
ini_set( "display_errors", 0);
if (isset($_POST['l_login'])) {
    
        $l_email = $_POST['l_email'];
        $l_password = md5($_POST['l_password']);
        $flage=1;
        
        $sql= "SELECT l_id,l_name,l_email,l_password,l_mobile,l_land, l_pincode,l_city,l_state,datetimee FROM login WHERE 1;";
        // echo "$l_email";
        // echo "$l_password"; 
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            if ($row['l_email']==$l_email){
                if ($row['l_password']==$l_password) {
                    $flage=0;
                    
                   $_SESSION["s_id"] =$row['l_id'];
                  
                    echo "<script> alert('login success...');</script>";

                    echo "<script type='text/javascript' language='Javascript'>window.open('index.php', '_self');</script>";

                    
                }else{
                    $flage=0;
                    echo "<script> alert('Invalid password');</script>";
                    
                }
            }else{
                 // $flage=1;
            }                
            
        }
        
        if ($flage!=0) {
            echo "<script> alert('mail not found');</script>";
            } 
        // // }elseif ($flage==2) {
        //     echo "<script> alert('Password not match');</script>";
        // }
        //  echo "<script> alert('login sucess');</script>";  
            
                     

    
    }   
?>
<!-- / php -->

<!-- Javascript -->
<script type="text/javascript">
    
</script>

<!-- / Javascript -->
</body>
</html>

<?php } ?>
