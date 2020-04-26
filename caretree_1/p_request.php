<?php
session_start();
if(!isset($_SESSION['s_id'])){
        // session_destroy();
        echo "<script> alert('login first');</script>";
        header("location: login.php");
}
else
{
?>


<?php 
include_once 'p_connection.php';
if (isset($_POST['setcart'])) {
    
 
    $u_id=$_SESSION['s_id'];
    $p_id=$_POST['p_id'];
    $quantity=$_POST['quantity'];
    $n1_id=$_POST['n1_id'];
   
// echo "<script> alert('".$n1_id." ".$u_id." ".$p_id." ".$quantity."nid ok....');</script>";
     $query="INSERT INTO cart(c_id, u_id, n_id, p_id, quantity, req) VALUES (null,'$u_id','$n1_id','$p_id','$quantity','0')";
             if (mysqli_query($conn, $query))
                {

                    echo "<script> alert('uploading sucess....');</script>";
                    
                } 
                else
                {
                    echo "<script> alert('not uploading....');</script>";
                   
                }



  
}


 ?> 

 <?php } ?>