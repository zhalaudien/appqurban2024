<?php
require '../db2/db.php';
require '../db2/controler.php';

// Mengambil data dari nis dengan fungsi get
$data = $_GET['id'];

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if (hapus_penerimaan($data) > 0) {
    echo "<script>
                alert('Data penerimaan berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
} else {
    // Jika fungsi hapus jika data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Data gagal dihapus!');
        </script>";
}