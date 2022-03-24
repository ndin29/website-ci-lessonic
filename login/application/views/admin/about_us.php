<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="add_about_us">
        <h5>Tambah </h5>
    </a>
    <div class="row">
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            $con = mysqli_connect("localhost", "root", "", "lessonic");
            error_reporting(0);
            $id = $_GET['id'];
            $data = mysqli_query($con, "SELECT * FROM about_us");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <th><?= $d['id'] ?></th>
                    <th><?= $d['judul'] ?></th>
                    <th><?= $d['deskripsi'] ?></th>
                    <th><?= $d['gambar'] ?></th>
                    <th>
                        <form action="update_about_us" method="post">
                            <input type="hidden" name="idEdit" value="<?= $d['id'] ?>">
                            <button type="submit" style="border:none;background:none;">Edit</button>

                        </form>
                    <th>
                        <form action="delete_about_us" method="post">
                            <input type="hidden" name="idDel" value="<?= $d['id'] ?>">
                            <button type="submit" style="border:none;background:none;">Delete</button>

                        </form>
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>