<?php
$con  = mysqli_connect("localhost", "root", "", "lessonic");
$id   = $_POST['idDel'];
mysqli_query($con, "delete from pricing where id='$id'");

header("location:pricing");
