<a class=" btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
<a href="controler/template/permintaan.php?id=<?= $row['id']; ?>" class=" btn btn-primary btn-sm"
    style="font-weight: 600;" target="_BLANK"><i class="bi bi-pencil-square"></i>Print Surat</a>
<div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Realisasi Besek
                    Cabang <?= $row['cabang']; ?></h5>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="my-2">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" id="id" value="<?= $row['id']; ?>" name="id" readonly>
                                <input type="hidden" id="antrian" value="<?= $row['antrian']; ?>" name="id" readonly>
                                <label for="cabang" class="form-label">Cabang</label>
                                <input type="text" class="form-control" id="cabang" value="<?= $row['cabang']; ?>"
                                    name="cabang" readonly>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="a" class="form-label">Realisasi M</label>
                                <input id="a" name="a" type="text" class="form-control" value="<?= $row['a']; ?>">
                            </div>
                            <div class="col">
                                <label for="os" class="form-label">Realisasi Os</label>
                                <input id="os" name="os" type="text" class="form-control" value="<?= $row['os']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="ok" class="form-label">Realisasi Ok</label>
                                <input id="ok" name="ok" type="text" class="form-control" value="<?= $row['ok']; ?>">
                            </div>
                            <div class="col">
                                <label for="ks" class="form-label">Realisasi KS</label>
                                <input id="ks" name="ks" type="text" class="form-control" value="<?= $row['ks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kb" class="form-label">Realisasi K KB</label>
                                <input id="kb" name="kb" type="text" class="form-control" value="<?= $row['kb']; ?>">
                            </div>
                            <div class="col">
                                <label for="kks" class="form-label">Realisasi KKS</label>
                                <input id="kks" name="kks" type="text" class="form-control" value="<?= $row['kks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kls" class="form-label">Realisasi KLS</label>
                                <input id="kls" name="kls" type="text" class="form-control" value="<?= $row['kls']; ?>">
                            </div>
                            <div class="col">
                                <label for="realisasi" class="form-label">Status</label>
                                <select id="realisasi" name="realisasi" class="realisasi">
                                    <option value="<?= $row['realisasi']; ?>"><?= $row['realisasi']; ?></option>
                                    <option value="Dikirim">Sudah</option>
                                    <option value="Belum Dikirim">Belum</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" style="font-weight: 600;" data-toggle="modal" type="submit"
                            name="update_permintaan">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>