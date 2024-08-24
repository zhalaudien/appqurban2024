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
    if (update_jadwal($_POST) > 0) {
        echo "<script>
                alert('Jadwal cabang berhasil diubah!');
                document.location.href = 'jadwal_data.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Jadwal cabang gagal diubah!');
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
                        <h1 class="mt-4">Jadwal Pengiriman</h1>
                        <br>
                        <ol class="breadcrumb mb-4">
                            <a href="controler/tools/export_jadwal.php" target="_blank" class="btn btn-success ms-1"><i
                                    class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
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
                                                    <th>Sapi BUMM</th>
                                                    <th>Sapi BUMM/orang</th>
                                                    <th>Kambing Bumm</th>
                                                    <th>Sapi Cabang</th>
                                                    <th>Kambing Cabang</th>
                                                    <th>No Antrian</th>
                                                    <th>Kirim Hewan</th>
                                                    <th>Kirim Besek</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($jadwal as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= $row['sapi_bumm']; ?>
                                                    </td>
                                                    <td><?= $row['sapib_bumm']; ?>
                                                    </td>
                                                    <td><?= $row['kambing_bumm']; ?></td>
                                                    <td><?= $row['sapi_mandiri']; ?></td>
                                                    <td><?= $row['kambing_mandiri']; ?></td>
                                                    <td><?= $row['antrian']; ?></td>
                                                    <td><?= $row['kirim_hewan']; ?></td>
                                                    <td><?= $row['kirim_besek']; ?></td>
                                                    <td class="text-center">
                                                        <a><?php include 'controler/detail_pengiriman.php'; ?></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <table id="datatablesSimple"
                                            class="table table-striped table-responsive table-hover text-left"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Jumlah</th>
                                                    <th><?php echo $sapi_bumm2024; ?></th>
                                                    <th><?php echo $sapib_bumm2024; ?></th>
                                                    <th><?php echo $kambing_bumm2024; ?></th>
                                                    <th><?php echo $sapi_mandiri2024; ?></th>
                                                    <th><?php echo $kambing_mandiri2024; ?></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                H1
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
                                                    <th>Sapi BUMM</th>
                                                    <th>Kambing Bumm</th>
                                                    <th>Sapi Cabang</th>
                                                    <th>Kambing Cabang</th>
                                                    <th>No Antrian</th>
                                                    <th>Kirim Hewan</th>
                                                    <th>Kirim Besek</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($jadwal_h1 as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= number_format($row['sapi_bumm']+($row['sapib_bumm']/7), 2); ?>
                                                    </td>
                                                    <td><?= $row['kambing_bumm']; ?></td>
                                                    <td><?= $row['sapi_mandiri']; ?></td>
                                                    <td><?= $row['kambing_mandiri']; ?></td>
                                                    <td><?= $row['antrian']; ?></td>
                                                    <td><?= $row['kirim_hewan']; ?></td>
                                                    <td><?= $row['kirim_besek']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Jumlah</th>
                                                    <th><?php echo number_format(($h1_sapibumm + ($h1_sapibummb/7)), 2); ?>
                                                    </th>
                                                    <th><?php echo $h1_kambingbumm; ?></th>
                                                    <th><?php echo $h1_sapimandiri; ?></th>
                                                    <th><?php echo $h1_kambingmandiri; ?></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                H2
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
                                                    <th>Sapi BUMM</th>
                                                    <th>Kambing Bumm</th>
                                                    <th>Sapi Cabang</th>
                                                    <th>Kambing Cabang</th>
                                                    <th>No Antrian</th>
                                                    <th>Kirim Hewan</th>
                                                    <th>Kirim Besek</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($jadwal_h2 as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= number_format($row['sapi_bumm']+($row['sapib_bumm']/7), 2); ?>
                                                    </td>
                                                    <td><?= $row['kambing_bumm']; ?></td>
                                                    <td><?= $row['sapi_mandiri']; ?></td>
                                                    <td><?= $row['kambing_mandiri']; ?></td>
                                                    <td><?= $row['antrian']; ?></td>
                                                    <td><?= $row['kirim_hewan']; ?></td>
                                                    <td><?= $row['kirim_besek']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Jumlah</th>
                                                    <th><?php echo number_format(($h2_sapibumm + ($h2_sapibummb/7)), 2); ?>
                                                    </th>
                                                    <th><?php echo $h2_kambingbumm; ?></th>
                                                    <th><?php echo $h2_sapimandiri; ?></th>
                                                    <th><?php echo $h2_kambingmandiri; ?></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                H3
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
                                                    <th>Sapi BUMM</th>
                                                    <th>Kambing Bumm</th>
                                                    <th>Sapi Cabang</th>
                                                    <th>Kambing Cabang</th>
                                                    <th>No Antrian</th>
                                                    <th>Kirim Hewan</th>
                                                    <th>Kirim Besek</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach ($jadwal_h3 as $row) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $row['cabang']; ?></td>
                                                    <td><?= number_format($row['sapi_bumm']+($row['sapib_bumm']/7), 2); ?>
                                                    </td>
                                                    <td><?= $row['kambing_bumm']; ?></td>
                                                    <td><?= $row['sapi_mandiri']; ?></td>
                                                    <td><?= $row['kambing_mandiri']; ?></td>
                                                    <td><?= $row['antrian']; ?></td>
                                                    <td><?= $row['kirim_hewan']; ?></td>
                                                    <td><?= $row['kirim_besek']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Jumlah</th>
                                                    <th><?php echo number_format(($h3_sapibumm + ($h3_sapibummb/7)), 2); ?>
                                                    </th>
                                                    <th><?php echo $h3_kambingbumm; ?></th>
                                                    <th><?php echo $h3_sapimandiri; ?></th>
                                                    <th><?php echo $h3_kambingmandiri; ?></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
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