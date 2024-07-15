<?php
    $con = mysqli_connect("localhost","root","","crudDB");
    if(!$con) {
        die(mysqli_error($con));
    }
?>