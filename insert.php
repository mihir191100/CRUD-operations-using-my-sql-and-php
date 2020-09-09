<?php

include 'dbconnect.php';
$con = OpenCon();
if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " INSERT INTO `crudtable`(`username`, `password`) VALUES ( '$username', '$password' )";

 $query = mysqli_query($con,$q);
 echo "<script type='text/javascript'>  alert('Data inserted successfully');";
 echo'window.location= "index.php"';
 echo "</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control" required> <br>

 <label> Password: </label>
 <input type="password" name="password" class="form-control" required> <br>

    <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>