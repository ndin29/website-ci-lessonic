<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php
    error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
    $con        = mysqli_connect("localhost", "root", "", "lessonic");
    $id         = $_POST['idEdit'];
    $sqlEdit    = mysqli_query($con, "SELECT * FROM service WHERE id = '$_POST[idEdit]'");
    $e          = mysqli_fetch_array($sqlEdit);
    ?>


    <a href="service">Kembali</a>
    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('admin/update_service'); ?>
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $e['judul']; ?>">
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
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>