<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php
    error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
    $con        = mysqli_connect("localhost", "root", "", "lessonic");
    $id         = $_POST['idEdit'];
    $sqlEdit    = mysqli_query($con, "SELECT * FROM about_us WHERE id = '$_POST[idEdit]'");
    $e          = mysqli_fetch_array($sqlEdit);
    ?>

    <a href="about_us">Kembali</a>
    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $e['judul']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $e['deskripsi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img width="200" src="../../img/portfolio/<?= $e['gambar']; ?>" thumbnail><br />
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="hidden" name="idEdit" value="<?= $_POST[idEdit] ?>">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>



            </form>
            <?php
            if ($_POST['judul'] != '') {
                $judul      = $_POST['judul'];
                $deskripsi  = $_POST['deskripsi'];
                $gambar_nama     = $_FILES['image']['name'];
                $gambar_ukuran     = $_FILES['image']['size'];

                if ($judul != '' && $deskripsi != '' && $gambar_nama == '') {
                    $con = mysqli_connect("localhost", "root", "", "lessonic");
                    $edit = mysqli_query($con, "UPDATE `about_us` SET judul = '$judul' , deskripsi = '$deskripsi' WHERE id = '" . $_POST['idEdit'] . "'");

                    if (!$edit) {
                        echo "Proses edit data gagal !";
                    } else {
                        header('location:about_us');
                    }
                } else if ($gambar_nama != '' && $judul != '' && $deskripsi != '') {
                    $format = array('jpg', 'png', 'jpeg', 'gif', 'bpm');
                    $nama_baru = str_replace(' ', '-', strtolower($judul)) . "." . end(explode(".", $gambar_nama));
                    move_uploaded_file($_FILES['image']['tmp_name'], '../img/portfolio/' . ($nama_baru));
                    $con = mysqli_connect("localhost", "root", "", "lessonic");
                    $edit = mysqli_query($con, "UPDATE `about_us` SET judul = '$judul' , deskripsi = '$deskripsi' , gambar = '$gambar' WHERE id = '" . $_POST['idEdit'] . "'");

                    if (!$edit) {
                        echo "Proses edit data gagal !";
                    } else {
                        header('location:home');
                    }
                } else {
                    echo "form belum lengkap";
                }
            }
            ?>