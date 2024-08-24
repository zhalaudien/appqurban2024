<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table datapanitia berdasarkan nama secara Descending
$penerimaan = query("SELECT * FROM penerimaan ORDER BY date_input DESC");

// Membuat nama file
$filename = "data penerimaan-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$filename.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>cabang</th>
            <th>pengirim</th>
            <th>sapi</th>
            <th>kambing</th>
            <th>pembayaran</th>
            <th>tanggal</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($penerimaan as $row) : ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['cabang']; ?></td>
            <td><?= $row['pengirim']; ?></td>
            <td><?= $row['sapi']; ?></td>
            <td><?= $row['kambing']; ?></td>
            <td><?= $row['pembayaran']; ?></td>
            <td><?= $row['date_input']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>