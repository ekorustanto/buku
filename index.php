<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>DATA BUKU</title>
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-info text-white">
            <b>DATA BUKU</b>
          </div>
          <div class="card-body bg-success text-white">
            <a href="tambah.php" class="btn btn-primary mb-3">TAMBAH DATA BUKU</a>
            <table class="table">
              <thead class="text-white">
                <tr>
                  <th>NO</th>
                  <th>JUDUL BUKU</th>
                  <th>JENIS BUKU</th>
                  <th>KATEROGI BUKU</th>
                  <th>JUMLAH BUKU</th>
                  <th colspan="2"></th>
                </tr>
              </thead>
              <tbody class="text-white">
                <?php
                $no = 1;
                $sql = mysqli_query($con, "SELECT * FROM buku");
                while ($data = mysqli_fetch_array($sql)) : {
                  }
                ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['judul_buku']; ?></td>
                    <td><?= $data['jenis_buku']; ?></td>
                    <td><?= $data['kategori_buku']; ?></td>
                    <td><?= $data['jumlah_buku']; ?></td>
                    <td><a href="ubah.php" class="btn btn-danger">Ubah</a></td>
                    <td><a href="hapus.php" class="btn btn-dark">Hapus</a></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.css"></script>
</body>

</html>