<a class=" btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
<div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Amprah Besek
                    Cabang <?= $row['cabang']; ?></h5>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="my-2">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" id="id" value="<?= $row['id']; ?>" name="id" readonly>
                                <label for="cabang" class="form-label">Cabang</label>
                                <input type="text" class="form-control" id="cabang" value="<?= $row['cabang']; ?>"
                                    name="cabang" readonly>
                            </div>
                            <div class="col">
                                <label for="realisasi" class="form-label">Info</label>
                                <select id="realisasi" name="realisasi" class="form-control">
                                    <option value="<?= $row['realisasi']; ?>"><?= $row['realisasi']; ?></option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="antrian" class="form-label">No Antrian</label>
                                <input type="text" class="form-control" id="antrian" value="<?= $row['antrian']; ?>"
                                    name="antrian">
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="a" class="form-label">Permintaan M</label>
                                <input id="a" name="a" type="text" class="form-control" value="<?= $row['a']; ?>">
                            </div>
                            <div class="col">
                                <label for="os" class="form-label">permintaan Os</label>
                                <input id="os" name="os" type="text" class="form-control" value="<?= $row['os']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="ok" class="form-label">Permintaan Ok</label>
                                <input id="ok" name="ok" type="text" class="form-control" value="<?= $row['ok']; ?>">
                            </div>
                            <div class="col">
                                <label for="ks" class="form-label">Permintaan KS</label>
                                <input id="ks" name="ks" type="text" class="form-control" value="<?= $row['ks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kb" class="form-label">Permintaan K KB</label>
                                <input id="kb" name="kb" type="text" class="form-control" value="<?= $row['kb']; ?>">
                            </div>
                            <div class="col">
                                <label for="kks" class="form-label">Permintaan KKS</label>
                                <input id="kks" name="kks" type="text" class="form-control" value="<?= $row['kks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kls" class="form-label">Permintaan KLS</label>
                                <input id="kls" name="kls" type="text" class="form-control" value="<?= $row['kls']; ?>">
                            </div>
                            <div class="col">
                                <label for="jadwal" class="form-label">Jadwal Kirim</label>
                                <select id="jadwal" name="jadwal" class="form-control">
                                    <option value="<?= $row['jadwal']; ?>"><?= $row['jadwal']; ?></option>
                                    <option value="H1 16 Juni 2024">H1 16 Juni 2024</option>
                                    <option value="H2 17 Juni 2024">H2 17 Juni 2024</option>
                                    <option value="H3 18 Juni 2024">H3 18 Juni 2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" style="font-weight: 600;" data-toggle="modal" type="submit"
                            name="update">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>