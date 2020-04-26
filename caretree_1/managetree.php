   <?php
session_start();
if(!isset($_SESSION['n_id'])){
        // session_destroy();
        // header("location: n_login.php");
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
<?php include_once"ngo_header_color.php";?>

                        <div class="row rmv ml-auto mr-auto">
                            
                <form action="" method="post" enctype="multipart/form-data" class="register-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>
                <h3 align="center" style="color: #fff;">Manage Tree</h3>
<!-- xxx -->
        <div class="txtb1">
                <!-- <select class="animationlist"> -->
                    <!-- <optgroup label="Tree List">  -->                       
                         <?php
                                 $sql= "select * from tree_name;"; 
                                 $result=mysqli_query($conn,$sql);
                                 echo "<select class='animationlist' name='i_name' onchange='Aj_tree()'>";
                                 echo "<option></option>";
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                    echo "<option value=".$row['Foreword'].">". $row['Foreword'] ."</option>";
                                 }
                                    echo "</select>";
                            ?>



                    <!-- </optgroup> -->
                <!-- </select> -->
          <span data-placeholder="Tree Name"></span>
        </div>
        <div class="txtb">
          <input type="text" name="i_price">
          <span data-placeholder="Price"></span>
        </div>
        <div class="txtb">
          <input type="text" name="i_qty">
          <span data-placeholder="Quantity"></span>
        </div>

        <div class="txtb2">
          <input type="file" name="i_img">
          <span data-placeholder="Tree Image"></span>
        </div>
        
        <div class="btn-toolbar justify-content-between">

                                            <div class="btn-group">
                                                <input type="submit" name="i_add" value="Add" class="btn btn-outline-primary">
                                            </div>
                                            <div class="btn-group">
                                                <a href="pro_edit.php">
                                                <input type="button" name="" value="Edit" class="btn btn-outline-warning">
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="pro_delete.php">
                                                <input type="button" value="Delete" name="" class="btn btn-outline-light"></a>
                                            </div>
                                            <!-- <input type="submit" name="i_add" value="Add"> -->
                                            
                                        </div>
      </form>
                            </div>

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

<?php 

if (isset($_POST['i_add'])) {
    $i_name=$_POST['i_name'];
    $i_price=$_POST['i_price'];
    $i_qty=$_POST['i_qty'];
    // $i_img=$_POST['i_img'];

    $type = $_FILES['i_img']['type'];
    $size = $_FILES['i_img']['size'];
    $name = $_FILES['i_img']['name'];
    $tmp_name = $_FILES['i_img']['tmp_name'];
    $error = $_FILES['i_img']['error'];
    $extension = array("jpeg","jpg","png");
    $id=$_SESSION['n_id'];

// $query="INSERT INTO product(p_id, i_name, i_price, i_qty, i_img) VALUES 
//                             (null,'$i_name','$i_price','$i_qty','$i_img')";
//     if (mysqli_query($conn, $query)) 
//     {
//       echo "<script> alert('ok sucess....');</script>";
//     } 
//     else
//     {
//        echo "<script> alert('not sucess....');</script>";
//     }


$ext = pathinfo($name, PATHINFO_EXTENSION);
     if(in_array($ext, $extension)){
        if( is_uploaded_file($tmp_name) ){
            move_uploaded_file($tmp_name,"img/img_tree_uploade/".$name) or
                        die("Error in uploading file : ".$name);
            $path="img/img_tree_uploade/".$name;

           $query="INSERT INTO product(p_id,l_id, i_name, i_price, i_qty, i_img) VALUES 
                            (null,'$id','$i_name','$i_price','$i_qty','$path')";
                            echo "$query";
                            echo "string";
             if (mysqli_query($conn, $query))
                {

                    echo "<script> alert('uploading successfully...');</script>";
                } 
                else
                {
                    echo "<script> alert('not upload...');</script>";
                }   



        }    
    }else{
        echo "<script> alert('Please, select the file from the following extension: jpeg, jpg, png, gif.');</script>";
        // echo "Please, Select the file from the following extension: jpeg, jpg, png, gif";
      }


    // echo "<script> alert('login sucess....');</script>";

}


 ?>



    </body>

    </html>

    <?php } ?>