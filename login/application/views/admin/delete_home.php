<?php
$con  = mysqli_connect("localhost", "root", "", "lessonic");
$id   = $_POST['idDel'];
mysqli_query($con, "delete from home where id='$id'");

header("location:home");
