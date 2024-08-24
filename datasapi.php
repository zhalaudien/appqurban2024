<?php
require 'db2/db.php';
require 'db2/controler.php';

// Memanggil atau membutuhkan file function.php
if (isset($_POST['simpan'])) {
    if (tambah_penerimaan($_POST)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data gagal ditambahkan!');
            </script>";
    }
  } 

  if (isset($_POST['simpan_sapi'])) {
    if (tambah_sapi($_POST)) {
        echo "<script>
                alert('Data sapi berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data sapi gagal ditambahkan!');
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
        <main>
            
            <div class="container-fluid px-4">
                <h1 class="mt-4 text-center">DATA HEWAN SAPI PUSAT 7</h1>
                <hr>
                <div class="form-row">
                    <div class="col-md">
                        
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
                                            <th>Cabang</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Nomor Sapi</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($view_datasapi as $row) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['cabang']; ?></td>
                                            <td>Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                            <td><?= $row['berat']; ?></td>
                                            <td><?= $row['nomor']; ?></td>
                                            <td><?= $row['date_input']; ?></td>
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