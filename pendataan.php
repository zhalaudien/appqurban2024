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
                <h1 class="mt-4 text-center">PENDATAAN HEWAN QURBAN PUSAT 7</h1>
                <hr>
                <div class="form-row">
                    <div class="col-md">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cabang">Cabang</label>
                                <div class="form-group">
                                    <select id="cabang" name="cabang" class="form-control">
                                        <?php $no = 1; ?>
                                        <?php foreach ($view_cabang as $row) : ?>
                                        <option value="<?= $row['cabang']; ?>"><?= $row['cabang']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <option value="TEST">TEST</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label for="sapi_bumm">Sapi BUMM/Ekor</label>
                                <input type="text" class="form-control" id="sapi_bumm" name="sapi_bumm"
                                    placeholder="Masukan Jumlah Sapi">
                            </div>
                            <div class="form-group my-2">
                                <label for="sapib_bumm">Sapi BUMM/Orang</label>
                                <input type="text" class="form-control" id="sapib_bumm" name="sapib_bumm"
                                    placeholder="Masukan Jumlah Pekurban Sapi/Orang">
                            </div>
                            <div class="form-group my-2">
                                <label for="kambing_bumm">Kambing BUMM</label>
                                <input type="text" class="form-control" id="kambing_bumm" name="kambing_bumm"
                                    placeholder="Masukan Jumlah Kambing BUMM">
                            </div>
                            <div class="form-group my-2">
                                <label for="sapi_cabang">Sapi Cabang/Mandiri</label>
                                <input type="text" class="form-control" id="sapi_cabang" name="sapi_cabang"
                                    placeholder="Masukan Jumlah Sapi Cabang/Mandiri">
                            </div>
                            <div class="form-group my-2">
                                <label for="kambing_cabang">Kambing Cabang/Mandiri</label>
                                <input type="text" class="form-control" id="kambing_cabang" name="kambing_cabang"
                                    placeholder="Masukan Jumlah Kambing Cabang/Mandiri">
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Kirim Data</button>
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
                                            <th>Cabang</th>
                                            <th>Sapi BUMM/Ekor</th>
                                            <th>Sapi BUMM/Orang</th>
                                            <th>Kambing BUMM</th>
                                            <th>Sapi Cabang/Mandiri</th>
                                            <th>Kambing Cabang/Mandiri</th>
                                            <th>Tanggal Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($view_pendataan as $row) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['cabang']; ?></td>
                                            <td><?= $row['sapi_bumm']; ?></td>
                                            <td><?= $row['sapib_bumm']; ?></td>
                                            <td><?= $row['kambing_bumm']; ?></td>
                                            <td><?= $row['sapi_cabang']; ?></td>
                                            <td><?= $row['kambing_cabang']; ?></td>
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
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

</html>