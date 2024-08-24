<?php
require 'db/db.php';
require 'db/controler.php';

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
                <h1 class="mt-4 text-center">INFO PERKIRAAN BESEK CABANG PUSAT 7</h1>
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
                                            <th>Cabang</th>
                                            <th>Besek T</th>
                                            <th>Besek OS</th>
                                            <th>Besek OK</th>
                                            <th>Kepala Sapi</th>
                                            <th>Kepala Kambing</th>
                                            <th>Kaki Sapi</th>
                                            <th>KULIT Sapi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($view_dataqurban as $row) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['cabang']; ?></td>
                                            <td><?= ($row['sapi_bumm']*7)+($row['sapi_mandiri']*7)+$row['sapib_bumm']+$row['kambing_bumm']+$row['kambing_mandiri']; ?>
                                            </td>
                                            <td><?= number_format(($row['sapi_bumm']+$row['sapi_mandiri']+($row['sapib_bumm']/7))*110, 1); ?>
                                            </td>
                                            <td><?= ($row['kambing_bumm']+$row['kambing_mandiri'])*10; ?></td>
                                            <td><?= number_format($row['sapi_bumm']+$row['sapi_mandiri']+($row['sapib_bumm']/7), 1); ?>
                                            </td>
                                            <td><?= $row['kambing_bumm']+$row['kambing_mandiri']; ?></td>
                                            <td><?= number_format((($row['sapi_bumm']+$row['sapi_mandiri']+($row['sapib_bumm']/7))*2), 1); ?>
                                            <td><?= number_format($row['sapi_bumm']+$row['sapi_mandiri']+($row['sapib_bumm']/7), 1); ?>
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
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

</html>