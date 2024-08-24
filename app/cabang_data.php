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
    if (tambah_cabang($_POST)) {
        echo "<script>
                alert('Data penerimaan berhasil ditambahkan!');
                document.location.href = 'cabang_data.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data penerimaan gagal ditambahkan!');
            </script>";
    }
}

if (isset($_POST['update'])) {
    if (update_cabang($_POST) > 0) {
        echo "<script>
                alert('Data cabang berhasil diubah!');
                document.location.href = 'cabang_data.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data data cabang gagal diubah!');
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
                        <h1 class="mt-4">Data Cabang</h1>
                        <br>
                        <ol class="breadcrumb mb-4">
                            <a class="btn btn-primary ms-1" data-toggle="modal" data-target="#add_data"><i
                                    class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Tambah cabang</a>
                            <a href="export.php" target="_blank" class="btn btn-success ms-1"><i
                                    class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                            <div class="modal fade" id="add_data" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                                Cabang</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="my-2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="cabang" class="form-label">Cabang</label>
                                                            <input type="text" class="form-control" id="cabang"
                                                                name="cabang">
                                                        </div>
                                                        <div class="col">
                                                            <label for="perwakilan"
                                                                class="form-label">Perwakilan</label>
                                                            <div class="form-group">
                                                                <select id="perwakilan" name="perwakilan"
                                                                    class="form-control">
                                                                    <option value="Sragen">Sragen</option>
                                                                    <option value="Karanganyar">Karanganyar</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" my-2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="ketua_cabang" class="form-label">Ketua Cabang
                                                            </label>
                                                            <input id="ketua_cabang" name="ketua_cabang" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="no_hp" class="form-label">No HP
                                                                Ketua Cabang</label>
                                                            <input id="no_hp" name="no_hp" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" my-2">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="panitia_qurban" class="form-label">Panitia
                                                                Qurban
                                                            </label>
                                                            <input id="panitia_qurban" name="panitia_qurban" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="no2_hp" class="form-label">No HP
                                                                Panitia Qurban</label>
                                                            <input id="no2_hp" name="no2_hp" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-2">
                                                    <div class="col">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input id="alamat" name="alamat" type="text"
                                                            class="form-control">
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
                                                    <th>Cabang</th>
                                                    <th>Ketua cabang</th>
                                                    <th>No HP</th>
                                                    <th>Panitia cabang</th>
                                                    <th>No HP</th>
                                                    <th>Alamat</th>
                                                    <th>Perwakilan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($view_cabang as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= $row['ketua_cabang']; ?></td>
                                                    <td><?= $row['no_hp']; ?></td>
                                                    <td><?= $row['panitia_qurban']; ?></td>
                                                    <td><?= $row['no2_hp']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td><?= $row['perwakilan']; ?></td>
                                                    <td class="text-center">
                                                        <a><?php include 'controler/detail_cabang.php'; ?></a>
                                                        <a href="controler/data_delet.php?id_cabang=<?= $row['id']; ?>"
                                                            class="btn btn-danger btn-sm" style="font-weight: 600;"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['cabang']; ?> ?');"><i
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