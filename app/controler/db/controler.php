<?php

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

$view_panitia = query("SELECT * FROM datapanitia ORDER BY nama ASC");
$view_cabang = query("SELECT * FROM datacabang ORDER BY cabang ASC");
$view_penerimaan = query("SELECT * FROM penerimaan ORDER BY date_input DESC");
$view_besek = query("SELECT * FROM produksibesek ORDER BY date_input DESC");
$view_kandang = query("SELECT * FROM kandang ORDER BY date_input DESC");
$view_pendataan = query("SELECT * FROM pendataan ORDER BY date_input DESC");
$view_seksi = query("SELECT * FROM id_panitia ORDER BY seksi ASC");
$view_dataqurban = query("SELECT * FROM dataqurban2024 ORDER BY cabang ASC");
$view_amprah = query("SELECT * FROM permohonan_besek ORDER BY cabang ASC");
$view_permintaan = query("SELECT * FROM permintaan ORDER BY date_input ASC");
$view_datasapi = query("SELECT * FROM data_sapi ORDER BY date_input DESC");


$join_realisasi = "SELECT * FROM realisasi_besek JOIN dataqurban2024 ON realisasi_besek.cabang = dataqurban2024.cabang JOIN permohonan_besek on permohonan_besek.cabang = realisasi_besek.cabang";
$realisasi = mysqli_query($koneksi, $join_realisasi);
$realisasi_h1 = "SELECT * FROM dataqurban2024 JOIN realisasi_besek ON dataqurban2024.cabang = realisasi_besek.cabang JOIN permohonan_besek on permohonan_besek.cabang = realisasi_besek.cabang JOIN jadwalpengiriman on permohonan_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H1 16 Juni 2024' ORDER BY antrian ASC";
$realisasi_h1 = mysqli_query($koneksi, $realisasi_h1);
$realisasi_h2 = "SELECT * FROM dataqurban2024 JOIN realisasi_besek ON dataqurban2024.cabang = realisasi_besek.cabang JOIN permohonan_besek on permohonan_besek.cabang = realisasi_besek.cabang JOIN jadwalpengiriman on permohonan_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H2 17 Juni 2024' ORDER BY antrian ASC";
$realisasi_h2 = mysqli_query($koneksi, $realisasi_h2);
$realisasi_h3 = "SELECT * FROM dataqurban2024 JOIN realisasi_besek ON dataqurban2024.cabang = realisasi_besek.cabang JOIN permohonan_besek on permohonan_besek.cabang = realisasi_besek.cabang JOIN jadwalpengiriman on permohonan_besek.cabang = jadwalpengiriman.cabang WHERE kirim_besek LIKE 'H3 18 Juni 2024' ORDER BY antrian ASC";
$realisasi_h3 = mysqli_query($koneksi, $realisasi_h3);

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

 // data cabang

 function tambah_cabang($data)
 {
     global $koneksi;
 
     $cabang = htmlspecialchars($data['cabang']);
     $ketua_cabang = htmlspecialchars($data['ketua_cabang']);
     $no_hp = htmlspecialchars($data['no_hp']);
     $panitia_qurban = htmlspecialchars($data['panitia_qurban']);
     $no2_hp = htmlspecialchars($data['no2_hp']);
     $alamat = htmlspecialchars($data['alamat']);
     $perwakilan = htmlspecialchars($data['perwakilan']);
 
     $sql = "INSERT INTO datacabang(cabang, ketua_cabang, no_hp, panitia_qurban, no2_hp, alamat, perwakilan) VALUES ('$cabang','$ketua_cabang','$no_hp','$panitia_qurban','$no2_hp','$alamat', '$perwakilan')";
 
     mysqli_query($koneksi, $sql);
 
     return mysqli_affected_rows($koneksi);
 }
 

 function update_cabang($data)
 {
     global $koneksi;
 
     $id = htmlspecialchars($data['id']);
     $cabang = htmlspecialchars($data['cabang']);
     $ketua_cabang = htmlspecialchars($data['ketua_cabang']);
     $no_hp = htmlspecialchars($data['no_hp']);
     $panitia_qurban = htmlspecialchars($data['panitia_qurban']);
     $no2_hp = htmlspecialchars($data['no2_hp']);
     $alamat = htmlspecialchars($data['alamat']);
     $perwakilan = htmlspecialchars($data['perwakilan']);
 
     $sql = "UPDATE datacabang SET cabang = '$cabang', ketua_cabang = '$ketua_cabang', no_hp = '$no_hp', panitia_qurban = '$panitia_qurban', no2_hp = '$no2_hp', alamat = '$alamat', perwakilan = '$perwakilan' WHERE id = '$id'";
 
     mysqli_query($koneksi, $sql);
 
     return mysqli_affected_rows($koneksi);
 }

 // data panitia

 function tambah_panitia($data)
 {
     global $koneksi;
 
     $nama = htmlspecialchars($data['nama']);
     $cabang = htmlspecialchars($data['cabang']);
     $no_hp = htmlspecialchars($data['no_hp']);
     $seksi = htmlspecialchars($data['seksi']);
     $ket = htmlspecialchars($data['ket']);
 
     $sql = "INSERT INTO datapanitia(nama, cabang, no_hp, seksi, ket) VALUES ('$nama','$cabang','$no_hp','$seksi','$ket')";
 
     mysqli_query($koneksi, $sql);
 
     return mysqli_affected_rows($koneksi);
 }
 

 function update_panitia($data)
 {
     global $koneksi;
 
     $id = htmlspecialchars($data['id']);
     $nama = htmlspecialchars($data['nama']);
     $cabang = htmlspecialchars($data['cabang']);
     $no_hp = htmlspecialchars($data['no_hp']);
     $seksi = htmlspecialchars($data['seksi']);
     $ket = htmlspecialchars($data['ket']);
 
     $sql = "UPDATE datapanitia SET nama = '$nama', cabang = '$cabang', no_hp = '$no_hp', seksi = '$seksi', ket = '$ket' WHERE id = '$id'";
 
     mysqli_query($koneksi, $sql);
 
     return mysqli_affected_rows($koneksi);
 }

  // data besek

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

  function tambah_kandang($data)
  {
      global $koneksi;
  
      $sapi = htmlspecialchars($data['sapi']);
      $kambing = htmlspecialchars($data['kambing']);

      $sql = "INSERT INTO kandang(sapi, kambing) VALUES ('$sapi', '$kambing')";
  
      mysqli_query($koneksi, $sql);
  
      return mysqli_affected_rows($koneksi);
  }

   // data qurban cabang

       function update_qurban($data)
   {
       global $koneksi;
   
       $id = htmlspecialchars($data['id']);
       $cabang = htmlspecialchars($data['cabang']);
       $sapi_bumm = htmlspecialchars($data['sapi_bumm']);
       $sapib_bumm = htmlspecialchars($data['sapib_bumm']);
       $kambing_bumm = htmlspecialchars($data['kambing_bumm']);
       $sapi_mandiri = htmlspecialchars($data['sapi_mandiri']);
       $kambing_mandiri = htmlspecialchars($data['kambing_mandiri']);
       $info = htmlspecialchars($data['info']);
   
       $sql = "UPDATE dataqurban2024 SET cabang = '$cabang', sapi_bumm = '$sapi_bumm', sapib_bumm = '$sapib_bumm', kambing_bumm = '$kambing_bumm', sapi_mandiri = '$sapi_mandiri', kambing_mandiri = '$kambing_mandiri', info = '$info' WHERE id = '$id'";
   
       mysqli_query($koneksi, $sql);
   
       return mysqli_affected_rows($koneksi);
   }


// data qurban cabang

function update_jadwal($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $antrian = htmlspecialchars($data['antrian']);
          $kirim_hewan = htmlspecialchars($data['kirim_hewan']);
          $kirim_besek = htmlspecialchars($data['kirim_besek']);
      
          $sql = "UPDATE jadwalpengiriman SET cabang = '$cabang', antrian = '$antrian', kirim_hewan = '$kirim_hewan', kirim_besek = '$kirim_besek' WHERE id = '$id'";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}

// data realisasi cabang

function update_realisasi($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $ts = htmlspecialchars($data['ts']);
          $tk = htmlspecialchars($data['tk']);
          $a = htmlspecialchars($data['a']);
          $os = htmlspecialchars($data['os']);
          $ok = htmlspecialchars($data['ok']);
          $ks = htmlspecialchars($data['ks']);
          $kb = htmlspecialchars($data['kb']);
          $kks = htmlspecialchars($data['kks']);
          $kls = htmlspecialchars($data['kls']);
          $realisasi = htmlspecialchars($data['realisasi']);
          
      
          $sql = "UPDATE realisasi_besek SET cabang = '$cabang', ts = '$ts', tk = '$tk', a = '$a', os = '$os', ok = '$ok', ks = '$ks', kb = '$kb', kks = '$kks', kls = '$kls', realisasi = '$realisasi' WHERE id = '$id'";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}

function kirim_besek($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $info_kirim = htmlspecialchars($data['info_kirim']);
      
          $sql = "UPDATE realisasi_besek SET cabang = '$cabang', info_kirim = '$info_kirim' WHERE id = '$id'";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}

function update_amprah($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $p_ts = htmlspecialchars($data['p_ts']);
          $p_tk = htmlspecialchars($data['p_tk']);
          $p_a = htmlspecialchars($data['p_a']);
          $p_os = htmlspecialchars($data['p_os']);
          $p_ok = htmlspecialchars($data['p_ok']);
          $p_ks = htmlspecialchars($data['p_ks']);
          $p_kb = htmlspecialchars($data['p_kb']);
          $p_kks = htmlspecialchars($data['p_kks']);
          $p_kls = htmlspecialchars($data['p_kls']);
          $info = htmlspecialchars($data['info']);
          
      
          $sql = "UPDATE permohonan_besek SET cabang = '$cabang', p_ts = '$p_ts', p_tk = '$p_tk', p_a = '$p_a', p_os = '$p_os', p_ok = '$p_ok', p_ks = '$p_ks', p_kb = '$p_kb', p_kks = '$p_kks', p_kls = '$p_kls', info = '$info' WHERE id = '$id'";
      
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


function update_permintaan($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $a = htmlspecialchars($data['a']);
          $os = htmlspecialchars($data['os']);
          $ok = htmlspecialchars($data['ok']);
          $ks = htmlspecialchars($data['ks']);
          $kb = htmlspecialchars($data['kb']);
          $kks = htmlspecialchars($data['kks']);
          $kls = htmlspecialchars($data['kls']);
          $realisasi = htmlspecialchars($data['realisasi']);
          $jadwal = htmlspecialchars($data['jadwal']);
          $antrian = htmlspecialchars($data['antrian']);
      
          $sql = "UPDATE permintaan SET cabang = '$cabang', a = '$a', os = '$os', ok = '$ok', ks = '$ks', kb = '$kb', kks = '$kks', kls = '$kls', realisasi = '$realisasi', jadwal = '$jadwal', antrian = '$antrian' WHERE id = '$id'";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}

function tambah_permintaan($data)
{
          global $koneksi;
      
          $cabang = htmlspecialchars($data['cabang']);
          $ts = htmlspecialchars($data['ts']);
          $tk = htmlspecialchars($data['tk']);
          $a = htmlspecialchars($data['a']);
          $os = htmlspecialchars($data['os']);
          $ok = htmlspecialchars($data['ok']);
          $ks = htmlspecialchars($data['ks']);
          $kb = htmlspecialchars($data['kb']);
          $kks = htmlspecialchars($data['kks']);
          $kls = htmlspecialchars($data['kls']);
        
      
          $sql = "INSERT INTO permintaan(cabang, ts, tk, a, os, ok, ks, kb, kks, kls) VALUES ('$cabang','$ts','$tk','$a','$os','$ok','$ks','$kb','$kks','$kls')";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}

function update_permintaan_kirim($data)
{
          global $koneksi;
      
          $id = htmlspecialchars($data['id']);
          $cabang = htmlspecialchars($data['cabang']);
          $a = htmlspecialchars($data['a']);
          $os = htmlspecialchars($data['os']);
          $ok = htmlspecialchars($data['ok']);
          $ks = htmlspecialchars($data['ks']);
          $kb = htmlspecialchars($data['kb']);
          $kks = htmlspecialchars($data['kks']);
          $kls = htmlspecialchars($data['kls']);
          $realisasi = htmlspecialchars($data['realisasi']);
      
          $sql = "UPDATE permintaan SET cabang = '$cabang', a = '$a', os = '$os', ok = '$ok', ks = '$ks', kb = '$kb', kks = '$kks', kls = '$kls', realisasi = '$realisasi' WHERE id = '$id'";
      
          mysqli_query($koneksi, $sql);
      
          return mysqli_affected_rows($koneksi);
}