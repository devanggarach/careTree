<?php session_start(); ?>

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
<?php include_once"header_trans_sign.php"?>
                <form action="" method="post" class="login-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>

        <div class="logmsg">Are you sure you wanted to logout?</div>
        <input type="submit" class="logout" name="cancle" value="CANCEL"><input type="submit" class="logout" name="logout" value="LOGOUT">

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you wanted to logout?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"> Logout </button>
      </div>
    </div>
  </div>
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

<?php 
if (isset($_POST['cancle'])) {
    echo "<script type='text/javascript' language='Javascript'>window.open('index.php', '_self');</script>";
}


if (isset($_POST['logout'])) {
    if(isset($_SESSION['s_id'])){
        session_destroy();
         echo "<script type='text/javascript' language='Javascript'>window.open('index.php', '_self');</script>";
    }else{
        echo "<script type='text/javascript' language='Javascript'>alert('you have not login'); window.open('index.php', '_self');</script>";

    }
}



 ?>


</body>

</html>