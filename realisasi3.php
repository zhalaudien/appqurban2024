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
        <meta http-equiv="refresh" content="120" />
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
                <h1 class="mt-4 text-center">REALISASI BESEK CABANG PUSAT 7</h1>
                <hr>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Selasa, Juni 2024
                    </div>
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-md">
                                <table id="datatablesSimple"
                                    class="table table-striped table-responsive table-hover text-left"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No Antrian</th>
                                            <th>Cabang</th>
                                            <th>TS</th>
                                            <th>TK</th>
                                            <th>A</th>
                                            <th>Os</th>
                                            <th>Ok</th>
                                            <th>K Sapi</th>
                                            <th>K Kambing</th>
                                            <th>Kaki Sapi</th>
                                            <th>Kulit Sapi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($realisasi_h3 as $row) : ?>
                                        <tr>
                                            <td><?= $row['antrian']; ?></td>
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
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
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