<?php
require 'controler/db/db.php';
require 'controler/db/controler.php';
// Memanggil atau membutuhkan file function.php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
  header('location:login.php');
  exit;
}

if (isset($_POST['simpan'])) {
    if (tambah_kandang($_POST)) {
        echo "<script>
                alert('Data hewan berhasil ditambahkan!');
                document.location.href = 'kandang_data.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data hewan gagal ditambahkan!');
            </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php
    include 'navbar-top.php';
    ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <?php
    include 'navbar.php';

    ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Penyembelihan Hewan P7</h1>
                        <hr>
                        <div class="form-row">
                            <div class="col-md">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="my-2">
                                        <div class="row">
                                            <div class="col">
                                                <label for="sapi" class="form-label">Sapi</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukan Jumlah Sapi Yang Sudah Disembelih" id="sapi"
                                                    name="sapi">
                                            </div>
                                            <div class="col">
                                                <label for="kambing" class="form-label">Kambing</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukan Jumlah Kambing Yang Sudah Disembelih"
                                                    id="kambing" name="kambing">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="export.php" target="_blank" class="btn btn-success ms-1"><i
                                            class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data
                            </div>
                            <div class="card-body">
                                <div class="row my-3">
                                    <div class="col-md">
                                        <table id="datatablesSimple"
                                            class="table table-striped table-responsive table-hover text-left"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tanggal</th>
                                                    <th>Sapi</th>
                                                    <th>Kambing</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($view_kandang as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['date_input']; ?></td>
                                                    <td><?= $row['sapi']; ?></td>
                                                    <td><?= $row['kambing']; ?></td>
                                                    <td class="text-center">
                                                        <a href="controler/data_delet.php?id_kandang=<?= $row['id']; ?>"
                                                            class="btn btn-danger btn-sm" style="font-weight: 600;"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['date_input']; ?> ?');"><i
                                                                class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

</html>