<?php
$con  = mysqli_connect("localhost", "root", "", "lessonic");
$id   = $_POST['idDel'];
mysqli_query($con, "delete from about_us where id='$id'");

header("location:about_us");
