<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php
    error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
    $con        = mysqli_connect("localhost", "root", "", "lessonic");
    $id         = $_POST['idEdit'];
    $sqlEdit    = mysqli_query($con, "SELECT * FROM pricing WHERE id = '$_POST[idEdit]'");
    $e          = mysqli_fetch_array($sqlEdit);
    ?>

    <a href="pricing">kembali</a>
    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('admin/update_pricing'); ?>
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

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <input type="hidden" name="idEdit" value="<?= $_POST[idEdit] ?>">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>

        </div>
        </form>
        <?php
        if ($_POST['judul'] != '') {
            $judul      = $_POST['judul'];
            $deskripsi  = $_POST['deskripsi'];

            if ($judul != '' && $deskripsi != '') {
                $con = mysqli_connect("localhost", "root", "", "lessonic");
                $edit = mysqli_query($con, "UPDATE `pricing` SET judul = '$judul' , deskripsi = '$deskripsi' WHERE id = '" . $_POST['idEdit'] . "'");

                if (!$edit) {
                    echo "Proses edit data gagal !";
                } else {
                    header('location:pricing');
                }
            }
        }
        ?>
    </div>

</div>