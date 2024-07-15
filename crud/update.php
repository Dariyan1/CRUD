<?php
    include "connect.php";
    $id=$_GET["updateid"];
    $sql = "SELECT * FROM crud WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row["name"];
    $email=$row["email"];
    $mobile=$row["mobile"];
    $password=$row["password"];
    if(isset($_POST["submit"])) {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];
        $sql = "UPDATE crud set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
        $result = mysqli_query($con,$sql);
        if($result) {
            header("location:display.php");
        }else {
            die(mysqli_error($con));
        }
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update CRUD</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="name" value="<?php echo $name ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email ?>" required>
        </div>
        <div class="mb-3">
            <label>Mobile</label>
            <input type="tel" class="form-control" placeholder="Enter your Mobile" name="mobile" value="<?php echo $mobile ?>" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your Password" name="password" value="<?php echo $password ?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>
  </body>
</html>