<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="add_pricing">
        <h5>Tambah
    </a></h5>
    <div class="row">
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
            $con = mysqli_connect("localhost", "root", "", "lessonic");
            error_reporting(0);
            $id = $_GET['id'];
            $data = mysqli_query($con, "SELECT * FROM pricing");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <th><?= $d['id'] ?></th>
                    <th><?= $d['judul'] ?></th>
                    <th><?= $d['deskripsi'] ?></th>
                    <th>
                        <form action="update_pricing" method="post">
                            <input type="hidden" name="idEdit" value="<?= $d['id'] ?>">
                            <button type="submit" style="border:none;background:none;">Edit</button>

                        </form>
                    <th>
                        <form action="delete_pricing" method="post">
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