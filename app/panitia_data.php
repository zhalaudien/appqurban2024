<?php
// Memanggil atau membutuhkan file function.php
require 'controler/db/db.php';
require 'controler/db/controler.php';

session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
  header('location:login.php');
  exit;
}

if (isset($_POST['simpan'])) {
    if (tambah_panitia($_POST)) {
        echo "<script>
                alert('Data panitia berhasil ditambahkan!');
                document.location.href = 'panitia_data.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data panitia gagal ditambahkan!');
            </script>";
    }
}

if (isset($_POST['update'])) {
    if (update_panitia($_POST) > 0) {
        echo "<script>
                alert('Data panitia berhasil diubah!');
                document.location.href = 'panitia_data.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data panitia gagal diubah!');
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
                        <h1 class="mt-4">Data Panitia</h1>
                        <br>
                        <ol class="breadcrumb mb-4">
                            <a class="btn btn-primary" style="font-weight: 600;" data-toggle="modal"
                                data-target="#tambah"><i class="bi bi-pencil-square"></i>Tambah
                                Data</a>
                            <a href="controler/tools/export_panitia.php" target="_blank" class="btn btn-success ms-1"><i
                                    class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                            <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Panitia</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="my-2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama">
                                                        </div>
                                                        <div class="col">
                                                            <label for="cabang" class="form-label">Cabang</label>
                                                            <input type="text" class="form-control" id="cabang"
                                                                name="cabang">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" my-2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="no_hp" class="form-label">No HP</label>
                                                            <input id="no_hp" name="no_hp" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="seksi" class="form-label">Seksi</label>
                                                            <div class="form-group">
                                                                <select id="seksi" name="seksi" class="form-control">
                                                                    <?php $no = 1; ?>
                                                                    <?php foreach ($view_seksi as $row) : ?>
                                                                    <option value="<?= $row['seksi']; ?>">
                                                                        <?= $row['seksi']; ?>
                                                                    </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-2">
                                                    <div class="col">
                                                        <label for="ket" class="form-label">Keterangan</label>
                                                        <div class="form-group">
                                                            <select id="ket" name="ket" class="form-control">
                                                                <option value="Koordinator">Koordinator</option>
                                                                <option value="Anggota">Anggota</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" style="font-weight: 600;"
                                                        data-toggle="modal" type="submit" name="simpan">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ol>
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
                                                    <th>Nama</th>
                                                    <th>Cabang</th>
                                                    <th>No HP</th>
                                                    <th>Seksi</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($view_panitia as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= $row['no_hp']; ?></td>
                                                    <td><?= $row['seksi']; ?></td>
                                                    <td><?= $row['ket']; ?></td>
                                                    <td class="text-center">
                                                        <a><?php include 'controler/detail_panitia.php'; ?></a> |
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