<?php
// Memanggil atau membutuhkan file function.php
require '../db2/db.php';
require '../db2/controler.php';


// Menampilkan semua data dari table datapanitia berdasarkan nama secara Descending
$penerimaan = query("SELECT * FROM data_sapi ORDER BY date_input DESC");

// Membuat nama file
$filename = "data sapi-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$filename");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>cabang</th>
            <th>harga</th>
            <th>berat</th>
            <th>nomor</th>
            <th>tanggal</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($penerimaan as $row) : ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['cabang']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['berat']; ?></td>
            <td><?= $row['nomor']; ?></td>
            <td><?= $row['date_input']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>