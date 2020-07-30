<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

  $judul_buku = $_POST['judul_buku'];
  $jenis_buku = $_POST['jenis_buku'];
  $kategori_buku = $_POST['kategori_buku'];
  $jumlah_buku = $_POST['jumlah_buku'];

  $sql = mysqli_query($con, "INSERT INTO buku VALUES('', '$judul_buku', '$jenis_buku', '$kategori_buku', '$jumlah_buku')");

  if ($sql) {
    header('location:index.php');
  } else {
    header('location:tambah.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>TAMBAH DATA BUKU</title>
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <b>TAMBAH DATA BUKU</b>
          </div>
          <div class="card-body">
            <form action="tambah.php" method="POST">
              <div class="form-group">
                <label for="">JUDUL BUKU</label>
                <input type="text" name="judul_buku" class="form-control" id="" autofocus autocomplete="off">
              </div>
              <div class="form-group">
                <label for="">JENIS BUKU</label>
                <select name="jenis_buku" class="form-control" id="" autocomplete="off">
                  <option value="">...</option>
                  <option value="buku_tulis">Buku tulis</option>
                  <option value="buku_bacaan">Buku bacaan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">KATEGORI BUKU</label>
                <input type="text" name="kategori_buku" class="form-control" id="" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="">JUMLAH BUKU</label>
                <input type="text" name="jumlah_buku" class="form-control" id="" autocomplete="off">
              </div>
              <div class="form-group">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.css"></script>
</body>

</html>