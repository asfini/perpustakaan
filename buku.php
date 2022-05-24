<?php
include "index.php";
include "koneksi.php";
?>

<div class="card">
    <div class="card-header">
        Input Buku
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> ID Buku </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="id_buku">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> Judul </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="judul">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> Penulis </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="penulis">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> Penerbit </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="penerbit">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> Tahun Terbit </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tahun_terbit">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> Stok </label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi, "INSERT INTO buku VALUES('$id_buku','$judul','$penulis','$penerbit','$tahun_terbit','$stok')");
}
?>
<div class="card">
    <div class="card-header">
        Data Buku
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Stok</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM buku");
            while ($data = mysqli_fetch_array($query)) {
                echo '
                <tbody>
                <tr>
                    <th scope="row"> ' . $data['id_buku'] . ' </th>
                    <td>' . $data['judul'] . '</td>
                    <td>' . $data['penulis'] . '</td>
                    <td>' . $data['penerbit'] . '</td>
                    <td>' . $data['tahun_terbit'] . '</td>
                    <td>' . $data['stok'] . '</td>
                    <td><a href = "#">Edit</a></td>
                    <td><a href = "#">Hapus</a></td>
                </tr>
            </tbody>
                
                ';
            }

            ?>

        </table>

    </div>
</div>