<?php
  include "koneksi.php";
  $name  = $_REQUEST['nama'];
  $email  = $_REQUEST['email'];
  $m  = $_REQUEST['message'];
  $mysqli  = "INSERT INTO contact_us (nama, email, message) VALUES ('$name', '$email','$m')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo '<script language="javascript">
    alert ("Input Berhasil");
    window.location="index.php";
    </script>';
    exit();

  } else {
    echo '<script language="javascript">
    alert ("Input");
    window.location="index.php";
    </script>';
    exit();
  }
  mysqli_close($con);
?>