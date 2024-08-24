<?php
require 'db2/db.php';
require 'db2/controler.php';

// Memanggil atau membutuhkan file function.php
if (isset($_POST['simpan'])) {
    if (add_pendataan($_POST)) {
        echo "<script>
                alert('Data hewan qurban berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data hewan qurban gagal ditambahkan!');
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
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 text-center">JADWAL PENGIRIMAN HEWAN DAN BESEK CABANG PUSAT 7</h1>
                <hr>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        H1 16 Juni 2024
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
                        H2 17 Juni 2024
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
                        H3 18 Juni 2024
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
        <script src="js/scripts.js"></script>
    </body>

</html>