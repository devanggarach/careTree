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
<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
?>
    	<div class="wrapper">
    		<!-- Sidebar  -->
    		<nav id="sidebar">
    			<div class="hello">
    				<img src="img/caretree.png">
    			</div>

    			<ul class="list-unstyled components">
    				<li class="active">
    					<a href="#home"><i class="fas fa-home fa-fw"></i>Home</a>
    				</li>
    				<li>
    					<a href="#"><i class="fas fa-tree fa-fw"></i>Request for Tree</a>
    				</li>
    				<li>
    					<a href="#"><i class="fab fa-angellist fa-fw"></i>We Care</a>
    				</li>
    				<li>
    					<a href="#rescue"><i class="fas fa-map-pin fa-fw"></i>Rescue</a>
    				</li>
    				<li>
    					<a href="#"><i class="fab fa-centos fa-fw"></i>NGOs</a>
    				</li>
    				<li>
    					<a href="#myaccount" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-alt fa-fw"></i>My Account</a>
    					<ul class="collapse list-unstyled" id="myaccount">
    						<li>
    							<a href="#myorders">My Orders</a>
    						</li>
    						<li>
    							<a href="#myprofile">My Profile</a>
    						</li>
    						<li>
    							<a href="#logout">Logout</a>
    						</li>
    					</ul>
    				</li>
    				<li>
    					<a href="#"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
    				</li>
    				<li>
    					<a href="#"><i class="fas fa-address-card fa-fw"></i>About Us</a>
    				</li>
    			</ul>
    <!-- 
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul> -->
            </nav>

            <!-- Page Content  -->
            <div id="content-x">

            	<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-x">
            		<div class="container-fluid">

            			<a id="sidebarCollapse" class="hidedesktop nav-c">
            				<i class="fas fa-align-left" style="height: 20px;"></i>
            			</a>

            			<div class="collapse navbar-collapse" id="navbarSupportedContent">
            				<span><img src="img/caretree.png" height="70px" width="150px"></span>

            				<ul class="nav navbar-nav mr-auto">
            					<li class="nav-item">
            						<button class="nav-c btn btn-outline-light btn-ct" href="#"> Request for Tree</button> 
            						<!-- <a class="nav-link" href="#"> Request for Tree</a> -->
            					</li>
            					<li class="nav-item">
            						<a class="nav-link" href="#">We Care</a>
            					</li>
            					<li class="nav-item">
            						<a class="nav-link" href="#rescue">Rescue</a>
            					</li>
            					<li class="nav-item">
            						<a class="nav-link" href="#">NGOs</a>
            					</li>
            					<li class="nav-item">
            						<a class="nav-link" href="#">About Us</a>
            					</li>
            				</ul>
            			</div>
            			<span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span>
            			<div class="ralign  ml-auto">

            				<!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->

            				<a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
            				<img src="img/line.png" style="height: 30px; padding-right: 10px;">
                            <a class="nav-c" href="#"><img src="img/treecart.png"><!-- <i style="font-size: 20px" class="fa fa-shopping-cart head"></i> -->
                            <span class="nav-t badge badge-sm badge-light">9+</span></a>
                            <img src="img/line.png" style="height: 30px; padding-right: 10px">
                            <a class="nav-c" href="#"><i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
                            </a>


            				<!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
            				<!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
            			</div>
            		</div>
            	</nav>
                <div class="row rmv ml-auto mr-auto">
    <?php 
    $sql= "SELECT l_id, l_name, l_email, l_password, l_mobile, l_land, l_pincode, l_city, l_state, l_address, datetimee FROM n_login WHERE 1";
        // echo "$l_email";
        // echo "$l_password"; 
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
    ?>     	
        
            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12">
            <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #004e00;">
                        <div class="card-text text-md" style="border-bottom: 2px solid rgb(190, 213, 115); "><?php echo $row['l_name']; ?></div>
                        <div class="text-xb"><a href="callto:+91 281-6576571"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+91 <?php echo $row['l_mobile']; ?></a></div>
                            <div class="text-xb"><a href="callto:+918460352525"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;+91 <?php echo $row['l_mobile']; ?></a></div>
                            <div class="text-xb"><a href="ngo@email.com"><i class="far fa-envelope"></i>&nbsp;&nbsp;<?php echo $row['l_email']; ?></a></div>

                        <div class="card-text text-x">
                            Address: 
                        </div>
                        <div class="card-text">
                            <div class="text-x"><?php echo $row['l_address']; ?></div>
                            
                        </div>
                </div>
            </div>

        <?php } ?>
            <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12" style="margin:10px 0px;">
            <img class="card-img-top care-img" src="img/bg.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #004e00;">
                        <div class="card-text text-md" style="border-bottom: 2px solid rgb(190, 213, 115); ">Sadbhavna</div>
                        <div class="text-xb"><a href="callto:+91 281-6576571"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+91 281 6576571</a></div>
                            <div class="text-xb"><a href="callto:+918460352525"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;+91 8460352525</a></div>
                            <div class="text-xb"><a href="ngo@email.com"><i class="far fa-envelope"></i>&nbsp;&nbsp;ngo@email.com</a></div>

                        <div class="card-text text-x">
                            Address: 
                        </div>
                        <div class="card-text">
                            <div class="text-x">Rajhans Block No 71, 4 - Nandanvan Society, 150feet Ring Road Rajkot - 360413</div>
                            
                        </div>
            
                </div>
            </div>
        </div>
        </div>
               
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
    </body>

    </html>