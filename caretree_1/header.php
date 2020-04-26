    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="hello">
                <a href="index.php"><img src="img/logo_copy.png"></a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#home"><i class="fas fa-home fa-fw"></i>Home</a>
                </li>
                <li>
                    <a href="request.php"><i class="fas fa-tree fa-fw"></i>Request for Tree</a>
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
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
              <!--   <li>
                    <a href="#"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
                </li> -->
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
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">

                    <a id="sidebarCollapse" class="hidedesktop nav-c">
                        <i class="fas fa-align-left" style="height: 20px;"></i>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <span><img src="img/logo_copy.png" height="70px" width="150px"></span>

                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="request.php"><button class="nav-c btn btn-outline-light btn-ct" > Request for Tree</button> </a>
                                <!-- <a class="nav-link" href="#"> Request for Tree</a> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" >We Care</a>
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
                    <a href="index.php"><span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span></a>
                    <div class="ralign  ml-auto">

                        <!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->

                        <a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <img src="img/line.png" style="height: 30px; padding-right: 10px;">
                        <a class="nav-c" href="#"><img src="img/treecart.png"><!-- <i style="font-size: 20px" class="fa fa-shopping-cart head"></i> -->
                        <span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <img src="img/line.png" style="height: 30px; padding-right: 10px">
                        <div class="btn-group">
  <a class="nav-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
 </a>
 <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="login.php">login/signup</a>
  <a class="dropdown-item" href="myaccount.php">My Account</a>
  <a class="dropdown-item" href="#">My Order</a>
  <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="logout.php">Logout</a>
</div>
</div>


                        <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                        <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                    </div>
                </div>
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</h6>
                            <button type="button" class="btn btn-success btn-sm btn-c">Care Now <i class="fas fa-plus-circle"></i></button>
                        </div>
                        <img class="d-block w-100 h-100" src="img/img1.jpg" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</h6>
                            <button type="button" class="btn btn-success btn-sm btn-c">Care Now<i class="fas fa-plus-circle"></i></button>
                        </div>
                        <img class="d-block w-100 h-100" src="img/img2.jpg" alt="Second slide">

                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</h6>
                            <button type="button" class="btn btn-success btn-sm btn-c">Care Now <i class="fas fa-plus-circle"></i></button>
                        </div>
                        <img class="d-block w-100 h-100" src="img/img3.jpg" alt="Third slide">

                    </div>

                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</h6>
                            <button type="button" class="btn btn-success btn-sm btn-c">Care Now <i class="fas fa-plus-circle"></i></button>

                        </div>
                        <img class="d-block w-100 h-100" src="img/img4.jpg" alt="Fourth slide">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
           