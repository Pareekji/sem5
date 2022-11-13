<?php
$con= new mysqli('localhost','root','','crudop');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DISPLAY</title>
  </head>
  <body>
    <div class="container my-3">
    <button type="button" class="btn btn-dark my-5"><a href="user.php">ADD USER</a></button>

    </div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">NAME</th>
      <th scope="col">E-mail</th>
      <th scope="col">Contact no</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql= "select * from kp";
  $result= mysqli_query($con,$sql);
  if($result){
    /*$row= mysqli_fetch_assoc($result); 
    echo $row['name'];*/
  while($row= mysqli_fetch_assoc($result) )
{
   
    $id= $row['id'];
    $name= $row['name'];
    $email= $row['email'];
    $contactno= $row['contactno'];
    $password= $row['password'];

echo  '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$contactno.'</td>
<td>'.$password.'</td>
<td>
<button type="button" class="btn btn-danger"><a href="update.php?updateid='.$id.'">UPDATE</button>
<button type="button" class="btn btn-warning"><a href="delete.php?deleteid='.$id.' ">DELETE</a></button>
</td>


</tr>';
}
  }

  ?>

  
    
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>