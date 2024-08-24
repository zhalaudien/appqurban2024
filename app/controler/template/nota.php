<?php
$koneksi = mysqli_connect("localhost", "root", "jancok1234", "db_mahasiswa");
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

$get_id= $_GET['id'];

// Mengambil data dari table datapanitia dari nama
$data = query("SELECT * FROM penerimaan WHERE id = '$get_id'")[0];

?>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <p class="text-center h2">MAJLIS TAFSIR AL-QUR'AN (MTA) SURAKARTA</p>
                        <p class="text-center h2">PANITIA PELAKSANAAN QURBAN</p>
                        <hr>
                        <p class="text-left h4">Nomor : </p>
                        <p class="text-center h3">TANDA TERIMA</p>
                        <p class="text-left h4">Telah terima dari Cabang. <?= $data['cabang']; ?></p>
                        <p class="text-left h4">Pengirim hewan Bapak/Ibu/Sdr. <?= $data['pengirim']; ?></p>
                        <ul class="list-unstyled">
                            <ul class="text-left h4">
                                <li>Sapi : <?= $data['sapi']; ?> Ekor</li>
                                <li>Kambing : <?= $data['kambing']; ?> Ekor</li>
                                <li>Uang shadaqah : Rp. <?= number_format($data['shadaqoh'], 0, ',', '.'); ?></li>
                                <li>Uang biaya penyembelihan : Rp.
                                    <?= number_format($data['pembayaran'], 0, ',', '.'); ?></li>
                            </ul>
                        </ul>
                        <p class="text-left h4">Untuk dilakukan penyembelihan dan pembagian kepada yang mustahaq.</p>
                        <p class="text-right h4">Surakarta,
                            <?php $tanggalHariIni = new DateTime(); echo $tanggalHariIni->format('d-m-Y'); ?></p>
                        <br>
                        <br>
                        <br>
                        <p class="text-right h4">(PANITIA)</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="modal-body">
                        <p class="text-center h2">MAJLIS TAFSIR AL-QUR'AN (MTA) SURAKARTA</p>
                        <p class="text-center h2">PANITIA PELAKSANAAN QURBAN</p>
                        <hr>
                        <p class="text-left h4">Nomor : </p>
                        <p class="text-center h3">TANDA TERIMA</p>
                        <p class="text-left h4">Telah terima dari Cabang. <?= $data['cabang']; ?></p>
                        <p class="text-left h4">Pengirim hewan Bapak/Ibu/Sdr. <?= $data['pengirim']; ?></p>
                        <ul class="list-unstyled">
                            <ul class="text-left h4">
                                <li>Sapi : <?= $data['sapi']; ?> Ekor</li>
                                <li>Kambing : <?= $data['kambing']; ?> Ekor</li>
                                <li>Uang shadaqah : Rp. <?= number_format($data['shadaqoh'], 0, ',', '.'); ?></li>
                                <li>Uang biaya penyembelihan : Rp.
                                    <?= number_format($data['pembayaran'], 0, ',', '.'); ?></li>
                            </ul>
                        </ul>
                        <p class="text-left h4">Untuk dilakukan penyembelihan dan pembagian kepada yang mustahaq.</p>
                        <p class="text-right h4">Surakarta,
                            <?php $tanggalHariIni = new DateTime(); echo $tanggalHariIni->format('d-m-Y'); ?></p>
                        <br>
                        <br>
                        <br>
                        <p class="text-right h4">(<?= $data['pengirim']; ?>)</p>
                    </div>
                </div>
            </div>
        </main>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
        window.print();
        </script>
    </body>

</html>