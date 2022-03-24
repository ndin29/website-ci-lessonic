<!-- Begin Page Content -->
<?php

$con = mysqli_connect("localhost", "root", "", "lessonic");
error_reporting(0);
$judul      = $_POST['judul'];
$deskripsi  = $_POST['deskripsi'];
$gambar_nama     = $_FILES['image']['name'];
$gambar_ukuran     = $_FILES['image']['size'];
if ($judul != "" and $deskripsi != "" and $gambar_nama != "") {

    $format = array('jpg', 'png', 'jpeg', 'gif', 'bpm');
    $nama_baru = str_replace(' ', '-', strtolower($judul)) . "." . end(explode(".", $gambar_nama));
    move_uploaded_fi le($_FILES['image']['tmp_name'], '../img/portfolio/' . ($nama_baru));
    $sql_insert = mysqli_query($con, "INSERT INTO `home` (judul,deskripsi,gambar,tanggal_edit) VALUES ('" . $judul . "','" . $deskripsi . "','" . $nama_baru . "','" . date('Y-m-d G:i:s') . "')");
    if ($sql_insert) {
        echo "Berhasil menambahkan data.";
    } else {
        echo "Terjadi masalah query/database.";
        //echo "INSERT INTO `home` (judul,deskripsi,gambar,tanggal_edit) VALUES ('" . $judul . "','" . $deskripsi . "','" . $gambar_nama . "','" . date('Y-m-d G:i:s.') . "')";
    }
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="home">Kembali</a>
    <div class="row">
        <div class="container">
            <div class="col-lg ">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea">
                            <h4> Judul</h4>
                        </label>
                        <textarea class="form-control" id="judul" name="judul" rows="2"></textarea>
                    </div>
                    <h4> Deskripsi</h4>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="2"></textarea>
            </div>


            <div class="form-group-row">
                <div class="col-sm">Picture</div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>


                        <div class="col-sm-9">
                            <div class="container">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10"><br>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
            </form>