
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
                    <a href="ngoindex.php"><i class="fas fa-home fa-fw"></i>Home</a>
                </li>
                
                <li>
                    <a href="wecare.php"><i class="fab fa-angellist fa-fw"></i>We Care</a>
                </li>
                <li>
                    <a href="rescue.php"><i class="fas fa-map-pin fa-fw"></i>Rescue</a>
                </li>
                <li>
                    <a href="ngo_list.php"><i class="fab fa-centos fa-fw"></i>NGOs</a>
                </li>
                <li>
                    <a href="approve.php"><i class="fas fa-tasks fa-fw"></i>Approval</a>
                </li><li>
                    <a href="changestatus.php"><i class="fas fa-edit fa-fw"></i>Change Status</a>
                </li>
                <li>
                    <a href="managetree.php"><i class="fas fa-cubes fa-fw"></i>Manage Stock</a>
                </li>

                <li>
                    <a href="ngoreport.php"><i class="far fa-futbol fa-fw"></i>Report</a>
                </li>


                <li>
                    <a href="#myaccount" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-alt fa-fw"></i>My Account</a>
                    <ul class="collapse list-unstyled" id="myaccount">
                        <li>
                            <a href="n_myaccount.php">My Profile</a>
                        </li>
                        <li>
                            <a href="n_logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="aim.php"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
                </li>
                <li>
                    <a href="aboutus.php"><i class="fas fa-address-card fa-fw"></i>About Us</a>
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

                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <div class="container-fluid">

                        <a id="sidebarCollapse" class=" nav-c">
                            <i class="fas fa-align-left" style="height: 20px;"></i>
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <span><img src="img/caretree.png" height="70px" width="150px"></span>

                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <button class="nav-c btn btn-outline-light btn-ct" href="request.php"> Request for Tree</button> 
                                    <!-- <a class="nav-link" href="#"> Request for Tree</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="wecare.php">We Care</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rescue.php">Rescue</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ngo_list.php">NGOs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span>
                        <div class="ralign  ml-auto">

                        <!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->
                        
                        <a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <img src="img/line.png" style="height: 30px; padding-right: 10px;">
                        
                        <div class="btn-group">
  <a class="nav-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i style="font-size: 30px; position: relative; top:5px;" class="fa fa-user head"></i>
 </a>
 <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="n_login.php">login/signup</a>
  <a class="dropdown-item" href="n_myaccount.php">My Account</a>
  <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="n_logout.php">Logout</a>
</div>

</div>


                        <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                        <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                    </div>
                </div>
            </nav>

            