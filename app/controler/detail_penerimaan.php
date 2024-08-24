<a class="btn btn-primary btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#detail<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Detail</a>
<a href="controler/data_delet.php?id_penerimaan=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
    style="font-weight: 600;"
    onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['cabang']; ?> ?');"><i
        class="bi bi-trash-fill"></i>Hapus</a>
<div class="modal fade bd-example-modal-lg" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-center h4">MAJLIS TAFSIR
                    AL-QUR'AN (MTA) SURAKARTA</p>
                <p class="text-center h4">PANITIA PELAKSANAAN
                    QURBAN</p>
                <hr>
                <p class="text-left h6">Nomor : </p>
                <p class="text-center h4">TANDA TERIMA</p>
                <p class="text-left h6">Telah terima dari
                    Cabang. <?= $row["cabang"]; ?></p>
                <p class="text-left h6">Pengirim hewan
                    Bapak/Ibu/Sdr. <?= $row['pengirim']; ?></p>
                <ul class="list-unstyled">
                    <ul class="text-left h6">
                        <li>Sapi : <?= $row['sapi']; ?> Ekor
                        </li>
                        <li>Kambing : <?= $row['kambing']; ?>
                            Ekor</li>
                        <li>Uang shadaqah : Rp.
                            <?= number_format($row['shadaqoh'], 0, ',', '.'); ?>
                        </li>
                        <li>Uang biaya penyembelihan : Rp.
                            <?= number_format($row['pembayaran'], 0, ',', '.'); ?>
                        </li>
                    </ul>
                </ul>
                <p class="text-left h6">Untuk dilakukan
                    penyembelihan dan pembagian kepada yang
                    mustahaq.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-warning" style="font-weight: 600;" data-toggle="modal"
                    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
                <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1"
                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="my-2">
                                        <div class="row">
                                            <div class="col">
                                                <input type="hidden" id="id" value="<?= $row['id']; ?>" name="id"
                                                    readonly>
                                                <label for="cabang" class="form-label">Cabang</label>
                                                <input type="text" class="form-control" id="cabang"
                                                    value="<?= $row['cabang']; ?>" name="cabang" readonly>
                                            </div>
                                            <div class="col">
                                                <label for="sapi" class="form-label">Jumlah Sapi</label>
                                                <input id="sapi" name="sapi" type="text" class="form-control"
                                                    value="<?= $row['sapi']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" my-2">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pengirim" class="form-label">Pengirim</label>
                                                <input id="pengirim" name="pengirim" type="text" class="form-control"
                                                    value="<?= $row['pengirim']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="kambing" class="form-label">Jumlah Kambing</label>
                                                <input id="kambing" name="kambing" type="text" class="form-control"
                                                    value="<?= $row['kambing']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <div class="row">
                                            <div class="col">
                                                <label for="shadaqoh" class="form-label">Uang Shadaqah</label>
                                                <input id="shadaqoh" name="shadaqoh" type="text" class="form-control"
                                                    value="<?= $row['shadaqoh']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="pembayaran" class="form-label">Biaya
                                                    Penyembelihan</label>
                                                <input id="pembayaran" name="pembayaran" type="text"
                                                    class="form-control" value="<?= $row['pembayaran']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" style="font-weight: 600;" data-toggle="modal"
                                            type="submit" name="update">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="controler/template/nota.php?id=<?= $row['id']; ?>" type="button" target="_BLANK"
                class="btn btn-primary">Print</a>
        </div>
    </div>
</div>
</div>