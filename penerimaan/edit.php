<?php
require '../db2/db.php';
require '../db2/controler.php';

// Mengambil data dari nama dengan fungsi get
$get_id= $_GET['id'];

// Mengambil data dari table datapanitia dari nama
$data = query("SELECT * FROM penerimaan WHERE id = '$get_id'")[0];

// Jika fungsi ubah ljika data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (update_penerimaan($_POST) > 0) {
        echo "<script>
                alert('Data cabang berhasil diubah!');
                document.location.href = 'index.php';
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <!-- Font Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <!-- Own CSS -->
        <link rel="stylesheet" href="css/style.css">

        <title>Tambah Data</title>
    </head>

    <body>
        <!-- Close Navbar -->

        <!-- Container -->
        <div class="container">
            <div class="row my-2">
                <div class="col-md">
                    <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;UPDATE Data cabang
                        <?= $data['cabang']; ?></h3>
                </div>
                <hr>
            </div>
            <div class="row my-2">
                <div class="col-md">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" id="id" value="<?= $data['id']; ?>" name="id" readonly>
                            <label for="cabang" class="form-label">Cabang</label>
                            <input type="text" class="form-control w-50" id="cabang" value="<?= $data['cabang']; ?>"
                                name="cabang" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="pengirim" class="form-label">NAma Pengirim</label>
                            <input type="text" class="form-control w-50" id="pengirim" value="<?= $data['pengirim']; ?>"
                                name="pengirim" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="sapi" class="form-label">jumlah sapi</label>
                            <input type="text" class="form-control w-50" id="sapi" value="<?= $data['sapi']; ?>"
                                name="sapi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="kambing" class="form-label">jumlah kambing</label>
                            <input type="text" class="form-control w-50" id="kambing" value="<?= $data['kambing']; ?>"
                                name="kambing" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="pembayaran" class="form-label">pembayaran</label>
                            <input type="text" class="form-control w-50" id="pembayaran"
                                value="<?= $data['pembayaran']; ?>" name="pembayaran" autocomplete="off">
                        </div>
                        <a href="datacabang.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning" name="ubah">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Close Container -->

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
    </body>

</html>