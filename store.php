<?php
   if( $_GET["value"]) {
      $new = $_GET["value"];
      echo $new;
      require 'dbcon/user.php';
    require 'dbcon/dbcon.php';
 
    $sql = "INSERT INTO `time`(`time`) VALUES ('$new')";
    $res1=mysqli_query($conn,$sql);
    
  
    
  
   }

?>