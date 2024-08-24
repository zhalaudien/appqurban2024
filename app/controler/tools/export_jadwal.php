<?php
// Memanggil atau membutuhkan file function.php
require '../db/db.php';
require '../db/controler.php';

// Menampilkan semua data dari table datapanitia berdasarkan nama secara Descending
$jadwal = query("SELECT * FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang");

// Membuat nama file
$filename = "Jadwal Pengiriman fti-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Jadwal Pengiriman.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Cabang</th>
            <th>Sapi BUMM</th>
            <th>Sapi BUMM/orang</th>
            <th>Kambing Bumm</th>
            <th>Sapi Cabang</th>
            <th>Kambing Cabang</th>
            <th>Kirim Hewan</th>
            <th>Kirim Besek</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($jadwal as $row) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['cabang']; ?></td>
            <td><?= $row['sapi_bumm']; ?>
            </td>
            <td><?= $row['sapib_bumm']; ?>
            </td>
            <td><?= $row['kambing_bumm']; ?></td>
            <td><?= $row['sapi_mandiri']; ?></td>
            <td><?= $row['kambing_mandiri']; ?></td>
            <td><?= $row['kirim_hewan']; ?></td>
            <td><?= $row['kirim_besek']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>