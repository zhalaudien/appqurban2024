<?php
require 'db/db.php';

session_start();

// Jika tidak bisa login maka balik ke login.php
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Fungsi hapus data
function hapus_data($table, $id) {
    global $koneksi;
    $query = "DELETE FROM $table WHERE id = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// Hapus penerimaan
$data_penerimaan = $_GET['id_penerimaan'];
if (hapus_data('penerimaan', $data_penerimaan) > 0) {
    echo "<script>
                alert('Data penerimaan berhasil dihapus!');
                document.location.href = '../penerimaan_data.php';
            </script>";
} 

// Hapus cabang
$data_cabang = $_GET['id_cabang'];
if (hapus_data('datacabang', $data_cabang) > 0) {
    echo "<script>
                alert('Data cabang berhasil dihapus!');
                document.location.href = '../cabang_data.php';
            </script>";
}

$data_panitia = $_GET['id_panitia'];
if (hapus_data('datapanitia', $data_panitia) > 0) {
    echo "<script>
                alert('Data panitia berhasil dihapus!');
                document.location.href = '../panitia_data.php';
            </script>";
}

$data_besek = $_GET['id_besek'];
if (hapus_data('produksibesek', $data_besek) > 0) {
    echo "<script>
                alert('Data besek berhasil dihapus!');
                document.location.href = '../besek_data.php';
            </script>";
}

$data_kandang = $_GET['id_kandang'];
if (hapus_data('kandang', $data_kandang) > 0) {
    echo "<script>
                alert('Data hewan berhasil dihapus!');
                document.location.href = '../kandang_data.php';
            </script>";
}

$data_sapi = $_GET['id_sapi'];
if (hapus_data('data_sapi', $data_sapi) > 0) {
    echo "<script>
                alert('Data hewan berhasil dihapus!');
                document.location.href = '../data_sapi.php';
            </script>";
}

$data_permintaan = $_GET['id_permintaan'];
if (hapus_data('permintaan', $data_permintaan) > 0) {
    echo "<script>
                alert('Data berhasil dihapus!');
                document.location.href = '../kirim_data.php';
            </script>";
}

else {
    echo "<script>
            alert('Data gagal dihapus!');
        </script>";
}