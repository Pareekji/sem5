<?php
  $con= new mysqli('localhost','root','','crudop');

  if($con){
    echo "connected";
  } else{
    die(mysqli_error($con));
  }
?>