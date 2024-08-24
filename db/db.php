<?php
// Koneksi Database
// $koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswa");
$koneksi = mysqli_connect("localhost", "kira", "jancok1234", "db_mahasiswa");
// membuat fungsi query dalam bentuk array
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

$realisasi_h1 = "SELECT * FROM realisasi_besek JOIN jadwalpengiriman on realisasi_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024' ORDER BY antrian ASC";
$realisasi_h1 = mysqli_query($koneksi, $realisasi_h1);
$realisasi_h2 = "SELECT * FROM realisasi_besek JOIN jadwalpengiriman on realisasi_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024' ORDER BY antrian ASC";
$realisasi_h2 = mysqli_query($koneksi, $realisasi_h2);
$realisasi_h3 = "SELECT * FROM realisasi_besek JOIN jadwalpengiriman on realisasi_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024' ORDER BY antrian ASC";
$realisasi_h3 = mysqli_query($koneksi, $realisasi_h3);

$view_panitia = query("SELECT * FROM datapanitia ORDER BY nama ASC");
$view_cabang = query("SELECT * FROM datacabang ORDER BY cabang ASC");
$view_penerimaan = query("SELECT * FROM penerimaan ORDER BY date_input DESC");
$view_besek = query("SELECT * FROM produksibesek ORDER BY date_input DESC");
$view_kandang = query("SELECT * FROM kandang ORDER BY date_input DESC");
$view_pendataan = query("SELECT * FROM pendataan ORDER BY date_input DESC");
$view_dataqurban = query("SELECT * FROM dataqurban2024 ORDER BY cabang ASC");
$view_dataqurban2023 = query("SELECT * FROM dataqurban2023 ORDER BY cabang ASC");


// mengambil jumlah panitia
$data_panitia = mysqli_query($koneksi, "SELECT * FROM datapanitia");
$jumlah_panitia = mysqli_num_rows($data_panitia);

// mengambil jumlah cabang
$data_cabang = mysqli_query($koneksi, "SELECT * FROM datacabang");
$jumlah_cabang = mysqli_num_rows($data_cabang);

$th2024 = [
    "SELECT SUM(kambing_bumm) FROM dataqurban2024" => &$kambing_bumm2024,
    "SELECT SUM(kambing_mandiri) FROM dataqurban2024" => &$kambing_mandiri2024,
    "SELECT SUM(sapi_bumm) FROM dataqurban2024" => &$sapi_bumm2024,
    "SELECT SUM(sapib_bumm) FROM dataqurban2024" => &$sapib_bumm2024,
    "SELECT SUM(sapi_mandiri) FROM dataqurban2024" => &$sapi_mandiri2024,
];

foreach ($th2024 as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();
}

$th2023 = [
    "SELECT SUM(kambing_bumm) FROM dataqurban2023" => &$kambing_bumm2023,
    "SELECT SUM(kambing_mandiri) FROM dataqurban2023" => &$kambing_mandiri2023,
    "SELECT SUM(sapi_bumm) FROM dataqurban2023" => &$sapi_bumm2023,
    "SELECT SUM(sapib_bumm) FROM dataqurban2023" => &$sapib_bumm2023,
    "SELECT SUM(sapi_mandiri) FROM dataqurban2023" => &$sapi_mandiri2023,
];

foreach ($th2023 as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();


}

$penerimaan_bumm = [
    "SELECT SUM(sapi) FROM penerimaan WHERE cabang LIKE 'BUMM%'" => &$sapi_bumm,
    "SELECT SUM(kambing) FROM penerimaan WHERE cabang LIKE 'BUMM%'" => &$kambing_bumm,
    "SELECT SUM(pembayaran) FROM penerimaan WHERE cabang LIKE 'BUMM%'" => &$pembayaran_bumm,

];

foreach ($penerimaan_bumm as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();
}

$penerimaan_cabang = [
    "SELECT SUM(sapi) FROM penerimaan WHERE cabang != 'BUMM sragen'" => &$sapi_cabang,
    "SELECT SUM(kambing) FROM penerimaan WHERE cabang != 'BUMM sragen'" => &$kambing_cabang,
    "SELECT SUM(pembayaran) FROM penerimaan WHERE cabang != 'BUMM sragen'" => &$pembayaran_cabang,

];

foreach ($penerimaan_cabang as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();
}

$produksibesek = [
    "SELECT SUM(ts) FROM produksibesek" => &$besek_ts,
    "SELECT SUM(tk) FROM produksibesek" => &$besek_tk,
    "SELECT SUM(a) FROM produksibesek" => &$besek_a,
    "SELECT SUM(os) FROM produksibesek" => &$besek_os,
    "SELECT SUM(ok) FROM produksibesek" => &$besek_ok,

];

foreach ($produksibesek as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();
}

// mengambil jumlah panitia
$data_panitia = mysqli_query($koneksi, "SELECT * FROM datapanitia");
$jumlah_panitia = mysqli_num_rows($data_panitia);

// mengambil jumlah cabang
$data_cabang = mysqli_query($koneksi, "SELECT * FROM datacabang");
$jumlah_cabang = mysqli_num_rows($data_cabang);

?>