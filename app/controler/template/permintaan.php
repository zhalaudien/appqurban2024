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
$data = query("SELECT * FROM permintaan WHERE id = '$get_id'")[0];

?>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-3 text-center">
                        <img src="img/logo2.png" class="img-thumbnail border-0">
                    </div>
                    <div class="col-auto">
                        <p class="text-center h5 lh-sm">YAYASAN MAJLIS TAFSIR AL QUR''AN</p>
                        <p class="text-center h1 lh-sm">PANITIA QURBAN PUSAT 7</p>
                        <p class="text-center h6 lh-sm">Sekretariat: Dk. Mentir RT.07, Bener, Ngrampal, Sragen</p>
                    </div>
                </div>
                <p class="text-left h3">
                    _______________________________________________________________________________________</p>
                <div class="row">
                    <div>
                        <p class="text-left h6">Kepada Yth.</p>
                        <p class="text-left h6">Ketua MTA Cabang <?= $data['cabang']; ?></p>
                        <p class="text-left h6">Di Tempat.</p>
                        <p class="text-center h6">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>
                        <p class="text-left h6">Dengan hormat,</p>
                        <p class="text-left h6">Bersama ini kami kirimkan daging qurban dari Yayasan Majlis Tafsir Al-
                            Qur'
                            an (MTA) Pusat untuk disampaikan kepada yang berhak menerima :</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Besek</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
 				    <tr>
                                        <th scope="row">1</th>
                                        <td>TS</td>
                                        <td><?= $data['ts']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>TK</td>
                                        <td><?= $data['tk']; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>M</td>
                                        <td><?= $data['a']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>OS</td>
                                        <td><?= $data['os']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>OK</td>
                                        <td><?= $data['ok']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Kepala Sapi</td>
                                        <td><?= $data['ks']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Kepala Kambing</td>
                                        <td><?= $data['kb']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Kaki Sapi</td>
                                        <td><?= $data['kks']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Kulit Sapi</td>
                                        <td><?= $data['kls']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-left h6">Demikian untuk dapat dipergunakan dengan sebaik-baiknya.</p>
                        <br>
                        <p class="text-center h6">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>
                        <br>
                        <p class="text-right h6">Surakarta,
                            <?php $tanggalHariIni = new DateTime(); echo $tanggalHariIni->format('d-m-Y'); ?></p>
                        <br>
                        <br>
                        <br>
                        <p class="text-right h6">(PANITIA)</p>
                        <br>
                        <br>
                    </div>
                </div>
                <p class="text-left h5">
                    ............................................................................................................................................
                </p>
                <br>
                <div class="row">
                    <div>
                        <p class="text-left h6">TANDA TERIMA DARI : KETUA CABANG <?= $data['cabang']; ?></p>
                        <p class="text-left h6">Telah diterima dari Panitia pelaksanaan Qurban MTA pusat 7 berupa :</p>
                        <div class=" my-2">
                            <div class="row">
                                <div class="col">
                                    <ul class="text-left h6">
                                        <li>Besek TS : <?= $data['ts']; ?></li>
                                        <li>Besek TK : <?= $data['tk']; ?></li>
                                        <li>Besek A : <?= $data['a']; ?></li>
                                        <li>Besek OS : <?= $data['os']; ?></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled fw-bold">
                                        <ul class="text-left h6">
                                            <li>Besek OK : <?= $data['ok']; ?></li>
                                            <li>Kepala Sapi : <?= $data['ks']; ?></li>
                                            <li>Kepala Kambing : <?= $data['kb']; ?></li>
                                            <li>Kaki Sapi : <?= $data['kks']; ?></li>
                                            <li>Kulit Sapi : <?= $data['kls']; ?></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-right h6">Surakarta,
                    <?php $tanggalHariIni = new DateTime(); echo $tanggalHariIni->format('d-m-Y'); ?></p>
                <br>
                <br>
                <br>
                <p class="text-right h6"><?= $data['cabang']; ?></p>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <!-- <script> -->
        <!-- window.print(); -->
        <!-- </script> -->
    </body>

</html>