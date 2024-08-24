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

if (isset($_POST['update'])) {
    if (kirim_besek($_POST) > 0) {
        echo "<script>
                alert('Data cabang berhasil diubah!');
                document.location.href = 'kirim_besek.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data cabang gagal diubah!');
            </script>";
    }
}

if (isset($_POST['simpan'])) {
    if (tambah_permintaan($_POST) > 0) {
        echo "<script>
                alert('Data cabang berhasil ditambahkan!');
                document.location.href = 'kirim_besek.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data cabang gagal diubah!');
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
                        <h1 class="mt-4">Data Realisasi Besek Cabang</h1>
                        <br>
                        <div class="col-md">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="my-2">
                                    <div class="row">
                                        <div class="col">
                                            <label for="cabang" class="form-label">Cabang</label>
                                            <input type="text" class="form-control" placeholder="Masukan cabang"
                                                id="cabang" name="cabang">
                                        </div>
                                        <div class="col">
                                            <label for="ts" class="form-label">Besek TS</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Jumlah Besek TS" id="ts" name="ts">
                                        </div>
                                        <div class="col">
                                            <label for="tk" class="form-label">Besek TK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Jumlah Besek TK" id="tk" name="tk">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <div class="row">
                                        <div class="col">
                                            <label for="a" class="form-label">Besek M</label>
                                            <input type="text" class="form-control" placeholder="Masukan Jumlah Besek A"
                                                id="a" name="a">
                                        </div>
                                        <div class="col">
                                            <label for="os" class="form-label">Besek OS</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Jumlah Besek OS" id="os" name="os">
                                        </div>
                                        <div class="col">
                                            <label for="ok" class="form-label">Besek OK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Jumlah Besek OK" id="ok" name="ok">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="ks" class="form-label">Kepala Sapi</label>
                                            <input type="text" class="form-control" placeholder="Masukan Kepala Sapi"
                                                id="ks" name="ks">
                                        </div>
                                        <div class="col">
                                            <label for="kb" class="form-label">Kepala Kambing</label>
                                            <input type="text" class="form-control" placeholder="Masukan Kepala Kmbing"
                                                id="kb" name="kb">
                                        </div>
                                        <div class="col">
                                            <label for="kks" class="form-label">Masukan Kaki Sapi</label>
                                            <input type="text" class="form-control" placeholder="Masukan Kaki Sapi"
                                                id="kks" name="kks">
                                        </div>
                                        <div class="col">
                                            <label for="kls" class="form-label">Masukan Kulit Sapi</label>
                                            <input type="text" class="form-control" placeholder="Masukan Kulit Sapi"
                                                id="kls" name="kls">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                <a href="export.php" target="_blank" class="btn btn-success ms-1"><i
                                        class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                            </form>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pealisasi Besek
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
                                                    <th>Cabang</th>
                                                    <th>TS</th>
                                                    <th>TK</th>
                                                    <th>A</th>
                                                    <th>Os</th>
                                                    <th>Ok</th>
                                                    <th>KS</th>
                                                    <th>KKB</th>
                                                    <th>KKS</th>
                                                    <th>KLS</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($realisasi as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= $row['ts']; ?></td>
                                                    <td><?= $row['tk']; ?></td>
                                                    <td><?= $row['a']; ?></td>
                                                    <td><?= $row['os']; ?></td>
                                                    <td><?= $row['ok']; ?></td>
                                                    <td><?= $row['ks']; ?></td>
                                                    <td><?= $row['kb']; ?></td>
                                                    <td><?= $row['kks']; ?></td>
                                                    <td><?= $row['kls']; ?></td>
                                                    <td><?= $row['info_kirim']; ?></td>
                                                    <td>
                                                        <a><?php include 'controler/kirim_besek.php'; ?></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pengiriman Besek
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
                                                    <th>Cabang</th>
                                                    <th>TS</th>
                                                    <th>TK</th>
                                                    <th>A</th>
                                                    <th>Os</th>
                                                    <th>Ok</th>
                                                    <th>KS</th>
                                                    <th>KKB</th>
                                                    <th>KKS</th>
                                                    <th>KLS</th>
                                                    <th>Date Input</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($view_permintaan as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= $row['ts']; ?></td>
                                                    <td><?= $row['tk']; ?></td>
                                                    <td><?= $row['a']; ?></td>
                                                    <td><?= $row['os']; ?></td>
                                                    <td><?= $row['ok']; ?></td>
                                                    <td><?= $row['ks']; ?></td>
                                                    <td><?= $row['kb']; ?></td>
                                                    <td><?= $row['kks']; ?></td>
                                                    <td><?= $row['kls']; ?></td>
                                                    <td><?= $row['date_input']; ?></td>
                                                    <td>
                                                        <a href="controler/data_delet.php?id_permintaan=<?= $row['id']; ?>"
                                                            class="btn btn-danger btn-sm" style="font-weight: 600;"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['cabang']; ?> ?');"><i
                                                                class="bi bi-trash-fill"></i>Hapus</a>
                                                        <a href="controler/template/permintaan.php?id=<?= $row['id']; ?>"
                                                            class=" btn btn-primary btn-sm" style="font-weight: 600;"
                                                            target="_BLANK"><i class="bi bi-pencil-square"></i>Print
                                                            Surat</a>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

</html>