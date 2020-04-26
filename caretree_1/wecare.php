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

    <body onload="getLocation()">
<?php include_once 'p_connection.php';?>
<?php include_once"header_color.php";?>
            	
                    
                    <div class="row rmv gmv ml-auto mr-auto">
                            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4 col-xs-12">
                                
                                <div class="card wecare-card">
<form  action="" method="post" enctype="multipart/form-data">
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
                    echo "<script> alert('Upload sucess....');</script>";
                } 
                else
                {
                     echo "<script> alert('not uploade');</script>";
                }   



        }    
    }else{
        echo "Please, Select the file from the following extension: jpeg, jpg, png, gif";
      }

}

if(isset($path)){
    echo "<img src='".$path."' alt=treeimage class='card-img-top care-img'> ";
} else {
    echo "<img src='img/img4.jpg' alt=treeimage class='card-img-top care-img'>";
}
?>
                                  <div class="card-body" style="background-image: linear-gradient(21deg,#3b8334,#285630);">
                                    <div class="card-text text-sm">Upload Photo</div>
                                    <input type="file" name="t_img" value="chose image" style="margin-bottom: 2px;">
                                    
                                    
                                    <div class="card-text text-sm">Area</div>
                                    
                                        <input type="text" name="t_address" class="col-sm-12 form-control" placeholder="tree location">
                                        <input id="t_latitude" value="" type='hidden'  name='t_latitude' readonly=""><br>
        <input id="t_longitude" value="" type='hidden'  name='t_longitude' readonly="" >
                                    <input type="submit" class="btn btn-outline-light" value="Upload Image" name="tree_uploade" onclick="">
                                  </div>
                                 
                                </div>

                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 col-xs-12">
                                <div class="card wecare-card">
                                  <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                  <div class="card-body" style="background-image: linear-gradient(21deg,#3b8334,#285630);">
                                    <div class="card-text text-md">Kuldeep Patel</div>
                                    <div class="card-text text-sm">24/01/2020 09:10 AM</div>
                                    <div class="card-text text-sm">University Road</div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 col-xs-12">
                                <div class="card wecare-card">
                                  <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                  <div class="card-body" style="background-image: linear-gradient(21deg,#3b8334,#285630);">
                                    <div class="card-text text-md">Kuldeep Patel</div>
                                    <div class="card-text text-sm">24/01/2020 09:10 AM</div>
                                    <div class="card-text text-sm">University Road</div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 col-xs-12">
                                <div class="card wecare-card">
                                  <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                                  <div class="card-body" style="background-image: linear-gradient(21deg,#3b8334,#285630);">
                                    <div class="card-text text-md">Kuldeep Patel</div>
                                    <div class="card-text text-sm">24/01/2020 09:10 AM</div>
                                    <div class="card-text text-sm">University Road</div>
                                  </div>
                                </div>
                            </div>  


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