<?php

$join = "SELECT * FROM dataqurban2024 JOIN realisasi_besek ON dataqurban2024.cabang = realisasi_besek.cabang JOIN permohonan_besek on permohonan_besek.cabang = realisasi_besek.cabang";
$realisasi = mysqli_query($koneksi, $join);
$join_jadwal = "SELECT * FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang";
$jadwal = mysqli_query($koneksi, $join_jadwal);
$join_jadwal_h1 = "SELECT * FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024' ORDER BY kirim_hewan ASC";
$jadwal_h1 = mysqli_query($koneksi, $join_jadwal_h1);
$join_jadwal_h2 = "SELECT * FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024' ORDER BY kirim_hewan ASC";
$jadwal_h2 = mysqli_query($koneksi, $join_jadwal_h2);
$join_jadwal_h3 = "SELECT * FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024' ORDER BY kirim_hewan ASC";
$jadwal_h3 = mysqli_query($koneksi, $join_jadwal_h3);

$jumlah_h1 = [
    "SELECT SUM(sapi_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024'" => &$h1_sapibumm,
    "SELECT SUM(sapib_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024'" => &$h1_sapibummb,
    "SELECT SUM(kambing_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024'" => &$h1_kambingbumm,
    "SELECT SUM(sapi_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024'" => &$h1_sapimandiri,
    "SELECT SUM(kambing_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024'" => &$h1_kambingmandiri,
];

foreach ($jumlah_h1 as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();


}

$jumlah_h2 = [
    "SELECT SUM(sapi_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024'" => &$h2_sapibumm,
    "SELECT SUM(sapib_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024'" => &$h2_sapibummb,
    "SELECT SUM(kambing_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024'" => &$h2_kambingbumm,
    "SELECT SUM(sapi_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024'" => &$h2_sapimandiri,
    "SELECT SUM(kambing_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024'" => &$h2_kambingmandiri,
];

foreach ($jumlah_h2 as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();


}

$jumlah_h3 = [
    "SELECT SUM(sapi_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024'" => &$h3_sapibumm,
    "SELECT SUM(sapib_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024'" => &$h3_sapibummb,
    "SELECT SUM(kambing_bumm) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024'" => &$h3_kambingbumm,
    "SELECT SUM(sapi_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024'" => &$h3_sapimandiri,
    "SELECT SUM(kambing_mandiri) FROM dataqurban2024 JOIN jadwalpengiriman ON dataqurban2024.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024'" => &$h3_kambingmandiri,
];

foreach ($jumlah_h3 as $query => &$result) {
    $stmt = $koneksi->prepare($query);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();


}

function add_pendataan($data)
  {
      global $koneksi;
  
      $cabang = htmlspecialchars($data['cabang']);
      $sapi_bumm = htmlspecialchars($data['sapi_bumm']);
      $sapib_bumm = htmlspecialchars($data['sapib_bumm']);
      $kambing_bumm = htmlspecialchars($data['kambing_bumm']);
      $sapi_cabang = htmlspecialchars($data['sapi_cabang']);
      $kambing_cabang = htmlspecialchars($data['kambing_cabang']);
  
      $sql = "INSERT INTO pendataan(cabang, sapi_bumm, sapib_bumm, kambing_bumm, sapi_cabang, kambing_cabang) VALUES ('$cabang','$sapi_bumm','$sapib_bumm','$kambing_bumm','$sapi_cabang','$kambing_cabang')";
  
      mysqli_query($koneksi, $sql);
  
      return mysqli_affected_rows($koneksi);
  }

  // penerimaan

  function tambah_penerimaan($data)
{
    global $koneksi;

    $cabang = htmlspecialchars($data['cabang']);
    $pengirim = htmlspecialchars($data['pengirim']);
    $sapi = htmlspecialchars($data['sapi']);
    $kambing = htmlspecialchars($data['kambing']);
    $shadaqoh = htmlspecialchars($data['shadaqoh']);
    $pembayaran = htmlspecialchars($data['pembayaran']);

    $sql = "INSERT INTO penerimaan(cabang, pengirim, sapi, kambing, shadaqoh, pembayaran) VALUES ('$cabang','$pengirim','$sapi','$kambing','$shadaqoh','$pembayaran')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function tambah_sapi($data)
{
    global $koneksi;

    $cabang = htmlspecialchars($data['cabang']);
    $harga = htmlspecialchars($data['harga']);
    $berat = htmlspecialchars($data['berat']);
    $nomor = htmlspecialchars($data['nomor']);

    $sql = "INSERT INTO data_sapi(cabang, harga, berat, nomor) VALUES ('$cabang','$harga','$berat','$nomor')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}


function update_penerimaan($data)
{
    global $koneksi;

    $id = htmlspecialchars($data['id']);
    $cabang = htmlspecialchars($data['cabang']);
    $pengirim = htmlspecialchars($data['pengirim']);
    $sapi = htmlspecialchars($data['sapi']);
    $kambing = htmlspecialchars($data['kambing']);
    $pembayaran = htmlspecialchars($data['pembayaran']);

    $sql = "UPDATE penerimaan SET cabang = '$cabang', pengirim = '$pengirim', sapi = '$sapi', kambing = '$kambing', pembayaran = '$pembayaran' WHERE id = '$id'";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function hapus_penerimaan($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM penerimaan WHERE id = '$data'");
    return mysqli_affected_rows($koneksi);
}

function hapus_sapi($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM data_sapi WHERE id = '$data'");
    return mysqli_affected_rows($koneksi);
}

function hapus_kandang($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM kandang WHERE id = '$data'");
    return mysqli_affected_rows($koneksi);
}

function hapus_besek($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM produksibesek WHERE id = '$data'");
    return mysqli_affected_rows($koneksi);
}

function tambah_kandang($data)
{
    global $koneksi;

    $sapi = htmlspecialchars($data['sapi']);
    $kambing = htmlspecialchars($data['kambing']);

    $sql = "INSERT INTO kandang(sapi, kambing) VALUES ('$sapi', '$kambing')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function tambah_besek($data)
{
    global $koneksi;

    $tk = htmlspecialchars($data['tk']);
    $ts = htmlspecialchars($data['ts']);
    $a = htmlspecialchars($data['a']);
    $os = htmlspecialchars($data['os']);
    $ok = htmlspecialchars($data['ok']);

    $sql = "INSERT INTO produksibesek(tk, ts, a, os, ok) VALUES ('$ts','$tk','$a','$os','$ok')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}