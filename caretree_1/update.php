

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
<?php 
session_start();
include_once 'p_connection.php';
ini_set( "display_errors", 0);
        $id=$_SESSION['s_id'];
        $sql= "SELECT l_id,l_name,l_email,l_password,l_mobile,l_land, l_pincode,l_city,l_state,l_birthdate,datetimee FROM login WHERE l_id=1;";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "lll";


 ?>
<body>

<?php include_once"header_color.php";?>
            <form name="f_login" action="p_update.php" method="POST" onsubmit="return Js_f_login()" class="register-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>

        <div class="txtb">
          <input type="text" value="<?php echo $row['l_name']; ?>" name="l_name">
          
          <!-- <span  data-placeholder="Name"></span> -->
        </div>
        <div class="txtb">
          <input type="text" value="<?php echo $row['l_email']; ?>" name="l_email" readonly>
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
          <input type="mobile" value="<?php echo $row['l_mobile']; ?>" name="l_mobile">
          <!-- <span data-placeholder="Mobile"></span> -->
        </div>
        <div class="txtb1">
                
                    <!-- <optgroup label="Rajkot">                         -->
                        <?php
                         $sql= "select * from pin_code;"; 
                         $result=mysqli_query($conn,$sql);
                         echo "<select class='animationlist' name='l_area' onchange='Aj_pincode()'>";
                         echo "<option></option>";
                         while($row = mysqli_fetch_assoc($result))
                         {
                            echo "<option value=".$row['p_id'].">". $row['p_area'] ."</option>";
                         }
                            echo "</select>";
                    ?>
                    <!-- </optgroup> -->
                
          <span data-placeholder="Area"></span>
        </div>

        <p id="wAjl_pincode"><input type="text" name="l_pincode" placeholder="360000" hidden=""></p>
        <p id="wAjl_city"><input type="text" name="l_city" placeholder="Rajkot" hidden=""></p>
        <p id="wAjl_state"><input type="text" name="l_state" placeholder="Gujarat" hidden=""></p>
            
        <input type="submit" name="update" class="logbtn" value="UPDATE">

       

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

<script>
    // dynamic dropdown
function Aj_pincode() {
    

var ajl_area =document.forms["f_login"]["l_area"];
var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_pincode").innerHTML =this.responseText;
        }
    };
    xhttp2.open("GET", "page/pl_pincode.php?id="+ajl_area.value, true);
    xhttp2.send();

var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_city").innerHTML =this.responseText;
       }
    };
    xhttp.open("GET", "page/pl_city.php?id="+ajl_area.value, true);
    xhttp.send(); 


var xhttp3 = new XMLHttpRequest();
    xhttp3.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_state").innerHTML =this.responseText;
        }
    };
    xhttp3.open("GET", "page/pl_state.php?id="+ajl_area.value, true);
    xhttp3.send();

}
  
</script>

<script type="text/javascript">

    function Js_f_login() 
    {
       
        if (!new RegExp(/^[A-Za-z\s]+$/).test(document.f_login.l_name.value))
            {
                document.getElementById("wJsl_name").innerHTML = "Name must be contain<br> characters and space";
                
                return false;
            }
            else
            {
                document.getElementById("wJsl_name").innerHTML = "";
                
            }

        
        if (!new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.f_login.l_email.value))
            {

                // document.getElementById("wJsl_email").innerHTML = "Invalid emil id";
                return false;
            }
            else
            {
                document.getElementById("wJsl_email").innerHTML = "";
            }

        var jsl_password = document.f_login.l_password.value;
        var jsl_re_password = document.f_login.l_re_password.value;
        if (new RegExp(/[A-Za-z0-9_]\w{5,15}$/).test(jsl_password))
            {
                if (jsl_password != jsl_re_password)
                    {
                        alert("Password not match");
                        // document.getElementById("wJsl_password").innerHTML = "Password not match";
                        return false;
                    }
                    else
                    {
                        document.getElementById("wJsl_password").innerHTML = "";
                    }
            }
        else
        {
            document.getElementById("wJsl_password").innerHTML = "Password must be 6 to 15 <br>characters which contain <br>only characters, numeric <br>digits, underscore";
            return false;
        }

        if (!new RegExp(/^\d{10}$/).test(document.f_login.l_mobile.value))
            {
                document.getElementById("wJsl_mobile").innerHTML = "Enter valid phone number";
                return false;
            }
            else
            {
                document.getElementById("wJsl_mobile").innerHTML = "";
            }

        var jsl_house = document.f_login.l_house.value;
        if (jsl_house == "")
            {
                document.getElementById("wJsl_house").innerHTML = "Enter House Name <br>/ Block No.";
                return false;
            }
            else
            {
                document.getElementById("wJsl_house").innerHTML = "";
            }

        var jsl_street = document.f_login.l_street.value;
        if (jsl_street == "")
            {
                document.getElementById("wJsl_street").innerHTML = "Enter Street Name <br>Society Name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_street").innerHTML = "";
            }

        var jsl_land = document.f_login.l_land.value;
        if (jsl_land == "")
            {
                document.getElementById("wJsl_land").innerHTML = "Enter Main Road <br>/ Land Mark";
                return false;
            }
            else
            {
                document.getElementById("wJsl_land").innerHTML = "";
            }

        var jsl_area = document.f_login.l_area.value;
        if (jsl_area == "")
            {
                document.getElementById("wJsl_area").innerHTML = "select Area name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_area").innerHTML = "";
            }

        if (!new RegExp(/^\d{6}$/).test(document.f_login.l_pincode.value))
            {
                document.getElementById("wJsl_pincode").innerHTML = "Invalis Pincode";
                return false;
            }
            else
            {
                document.getElementById("wJsl_pincode").innerHTML = "";
            }

        if (!new RegExp(/^[A-Za-z]+$/).test(document.f_login.l_city.value))
            {
                document.getElementById("wJsl_city").innerHTML = "Invalid City name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_city").innerHTML = "";
            }
            // 
        if (!new RegExp(/^[A-Za-z]+$/).test(document.f_login.l_state.value))
            {
                document.getElementById("wJsl_state").innerHTML = "Invalid State name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_state").innerHTML = "";
                
            }



            /*
        var jsl_birthdate = document.f_login.l_birthdate.value;
        if (jsl_birthdate == "")
            {
                document.getElementById("wJsl_birthdate").innerHTML = "enter value";
                return false;
            }
            else
            {
                document.getElementById("wJsl_birthdate").innerHTML = "";
            }*/


    }
</script>
<!-- / Javascript -->

<!-- php -->
<?php include_once 'p_connection.php'; ?>
<!-- / php -->


</body>

</html>
