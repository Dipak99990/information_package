<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $email=$_POST['email'];
  $pass=$_POST['pass'];
 
// establishing connection
$servername='localhost';
$username='root';
$password='';
$database='information';

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Connection was not established due to this error". mysqli_connect_error());
}
else{
  $sql="INSERT INTO `info_1` (`email`, `password`) VALUES ('$email', '$pass');";
  $result=mysqli_query($conn,$sql);
}
if($result){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Done!!!</strong> Your Entry has been submitted sucessfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Done!!!</strong> Your Entry has not been submitted sucessfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name ="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <div class="container">
    <iframe
  width="600"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDuMXZwYWLd_SFo-d8m1c-znVigNHzsC1M
    &q=Space+Needle,Seattle+WA">
</iframe>
    </div>
  </body>
</html>