<?php
$con= new mysqli('localhost','root','','crudop');

$id = $_GET['updateid'];
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $contactno= $_POST['contactno'];
  $password= $_POST['password'];

  $sql=("update kp set name='$name',email='$email',contactno='$contactno',password='$password' where id=$id");

  $result= mysqli_query($con,$sql);

   if($result){
       //echo "data updated"
       header('location:display.php');
   }
     {
       die(mysqli_error($con));
     }
}


$sql="select * from kp where id=$id";
$result= mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
$name= $row['name'];
$email=$row['email'];
$contactno=$row['contactno'];
$password=$row['password'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UPDATE</title>
  </head>
  <body>
  <form method="POST">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="name" value=<?php echo "$name"; ?>>
  </div>

  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="email" value=<?php echo "$email"; ?>>
 </div>

  <div class="form-group">
    <label>contactno</label>
    <input type="int" class="form-control" name="contactno" aria-describedby="emailHelp" placeholder="contactno" value=<?php echo "$contactno"; ?>>
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" value=<?php echo "$password"; ?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
</form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>