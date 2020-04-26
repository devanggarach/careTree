 <?php
session_start();
if(!isset($_SESSION['n_id'])){
        // session_destroy();
        header("location: n_login.php");
}
else
{
?>
<?php 
include_once 'p_connection.php';
ini_set( "display_errors", 0);
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

    <?php include_once"ngo_header_color.php";?>
<!-- ================================================================== -->
<div class="row rmv ml-auto mr-auto">
    <!-- xxx -->
    <?php
    $nid55=$_SESSION['n_id'];
    $sql= "SELECT l_name,l_land,l_mobile,c_id, u_id, n_id, p_id, quantity, req FROM login l join cart c on(l.l_id=c.u_id) WHERE n_id=$nid55 and req NOT IN(0,1,5) GROUP BY u_id";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
            { ?>
    <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 col-xs-12" style="float: left; padding-bottom: 5px;">
        <form action="" method="post">
        <div class="card-body" style="background-color: #004e00;">
            <div class="card-text text-xb">
                Citizen Name: <?php echo $row['l_name']; ?>
            </div>
            
            <table class="table text-xb">
                <thead><tr><th>Tree Name</th><th>Qty</th></tr></thead>
                <!-- yyy --> 
                <tbody>
                <?php
                $u_id1=$row['u_id'];
                $n_id1=$row['n_id'];
                $sql1= "SELECT i_name,i_price ,c_id, u_id, n_id, c.p_id, quantity, req FROM product p JOIN cart c ON(p.p_id=c.p_id) WHERE u_id=$u_id1 AND n_id=$n_id1 and req NOT IN(0,1,5)";
        $result1=mysqli_query($conn,$sql1);
        $tot=0;
        $pri=0;
        while ($row1 = mysqli_fetch_assoc($result1))
            { 
                $tot+=$row1['quantity'];
                $pri+=$row1['i_price']*$row1['quantity'];
                $a=array();
                array_push($a,$row1['c_id']);
                ?>
                    <tr>
                        <td><?php echo $row1['i_name']; ?></td>
                        <td><?php echo $row1['quantity']; ?></td>
                    </tr>
                    
                <?php } 

                if ($pri==0) {
                    $pri='Free';
                }

                ?>
                    <tr>

                        <td>total</td>
                        <td><?php echo $tot; ?></td>
                    </tr>
                    <tr>
                        <td>Bill Amount</td>
                        <td><i class="fas fa-rupee-sign fa-fw"></i><?php echo $pri; ?></td>
                    </tr>
                </tbody>
                <!-- /yyy -->   
            </table>

            <div class="card-text text-xb"><a href="callto:+918460352525"><i class="fas fa-mobile-alt fa-fw"></i>+91 <?php echo $row['l_mobile']; ?></a></div>
            <div class="card-text text-xb" style="float: left; margin:0px 5px 0px 0px; "><i class="fas fa-address-card fa-fw"></i></div><div class="text-xb" style="font-size: 0.75rem;">
                <?php echo $row['l_land']; ?>
            </div>
            <?php
            $req=$row['req'];
            if ($req==3) {
                $d='Dispacthed';
            }elseif ($req==4) {
                $d='Delivered';
            }elseif ($req==5) {
                $d='Planted';
            }
            ?>
            <div class="card-text text-xb">Status:  <?php echo $d; ?></div>
                <div class="card-text" style="margin-top: 10px; ">

                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                            <select name="stat" class="form-control">
                                <option value="2">Approved</option>
                                <option value="3">Dispacthed</option>
                               <!--  <option value="4">Delivered</option>
                                <option value="5">Planted</option> -->
                            </select>
                        </div>
                        <div class="btn-group">
                            <input type="submit" name="save" value="Save" class="btn btn-outline-light">
                        </div>
                    </div>
                </div>
            </div>
                        <input type="text" name="u_id11" value="<?php echo $u_id1; ?>" hidden="">
                        <input type="text" name="n_id11" value="<?php echo $n_id1; ?>" hidden="">
                        
                  
        </div>
            </form>

        </div>
    <?php }  ?>


<?php

if (isset($_POST['save'])) 
{
    $u_drop=$_POST['stat'];
    $u_id11=$_POST['u_id11'];
    $n_id11=$_POST['n_id11'];
// echo "<script> alert('".$u_drop." ".$u_id11." ".$n_id11."');</script>";

    $query="UPDATE cart SET req=$u_drop WHERE u_id=$u_id11 and n_id=$n_id11";
    // echo "<script> alert('register faile....');</script>";
    if (mysqli_query($conn, $query)) 
    {
     // echo "<script> alert('login sucess....');</script>";
 }
}

?>




        <!-- /xxx -->
    </div>
<!-- ============================================================= -->
                        </div>
                    </div>
              <!--       <footer>
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
        <script>
            function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

$(".txtb4 input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb4 input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

        </script>
    </body>

    </html>

    <?php } ?>