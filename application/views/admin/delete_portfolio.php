<?php
$con  = mysqli_connect("localhost", "root", "", "lessonic");
$id   = $_POST['idDel'];
mysqli_query($con, "delete from portfolio where id='$id'");

header("location:portfolio");
