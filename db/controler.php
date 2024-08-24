<?php

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