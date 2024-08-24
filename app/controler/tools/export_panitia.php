<?php
// Memanggil atau membutuhkan file function.php
require '../db/db.php';
require '../db/controler.php';


// Menampilkan semua data dari table datapanitia berdasarkan nama secara Descending
$siswa = query("SELECT * FROM datapanitia ORDER BY cabang ASC");

// Membuat nama file
$filename = "data datapanitia fti-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data pantia.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>cabang</th>
            <th>no_hp</th>
            <th>seksi</th>
            <th>ket</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($siswa as $row) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['cabang']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['seksi']; ?></td>
            <td><?= $row['ket']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>