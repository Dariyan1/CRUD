<?php 
    include "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Read CRUD</title>
  </head>
  <body>
    <div class="container my-5">
    <a href="user.php" class="text-light" style="text-decoration: none;"><button class="btn btn-primary">Add User</button></a>
  <table class="table table-success table-striped my-3">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operations</th>
    </tr>
    <?php 
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($con,$sql);
        if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $id=$row["id"];
            $name=$row["name"];
            $email=$row["email"];
            $mobile=$row["mobile"];
            $password=$row["password"];
            echo "<tr>";
            echo "<th>".$row["id"]."</th>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td><a href='update.php?updateid=".$id    ."'><button class='btn btn-primary me-3'>Update</button></a><a href='delete.php?deleteid=".$id."'><button class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
            }
        }
    ?>
  </table>
  </div>
  </body>
</html>