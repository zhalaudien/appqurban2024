<?php
function tambah_cabang($data_cabang)
{
    global $koneksi;

    $cabang = htmlspecialchars($data_cabang['cabang']);
    $ketua_cabang = htmlspecialchars($data_cabang['ketua_cabang']);
    $panitia_qurban = htmlspecialchars($data_cabang['panitia_qurban']);
    $no_hp = htmlspecialchars($data_cabang['no_hp']);
    $alamat = htmlspecialchars($data_cabang['alamat']);
    $perwakilan = htmlspecialchars($data_cabang['perwakilan']);

    $sql = "INSERT INTO datacabang(cabang, ketua_cabang, panitia_qurban, no_hp, alamat, perwakilan) VALUES ('$cabang','$ketua_cabang','$panitia_qurban','$no_hp','$alamat','$perwakilan')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM datacabang WHERE id = '$data'");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah_cabang($data)
{
    global $koneksi;

    $id = htmlspecialchars($data['id']);
    $cabang = htmlspecialchars($data['cabang']);
    $ketua_cabang = htmlspecialchars($data['ketua_cabang']);
    $panitia_qurban = htmlspecialchars($data['panitia_qurban']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $alamat = htmlspecialchars($data['alamat']);
    $perwakilan = htmlspecialchars($data['perwakilan']);

    $sql = "UPDATE datacabang SET cabang = '$cabang', ketua_cabang = '$ketua_cabang', panitia_qurban = '$panitia_qurban', no_hp = '$no_hp', alamat = '$alamat', perwakilan = '$perwakilan' WHERE id = '$id'";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

//-----------------------------------------------data cabang selesai---------------------------------------------------------------///

?>