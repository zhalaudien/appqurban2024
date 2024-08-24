<a class="btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
<div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data
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
                                <label for="perwakilan" class="form-label">Perwakilan</label>
                                <div class="form-group">
                                    <select id="perwakilan" name="perwakilan" class="form-control">
                                        <option value="<?= $row['perwakilan']; ?>"><?= $row['perwakilan']; ?></option>
                                        <option value="Sragen">Sragen</option>
                                        <option value="Karanganyar">Karanganyar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="ketua_cabang" class="form-label">Ketua Cabang</label>
                                <input id="ketua_cabang" name="ketua_cabang" type="text" class="form-control"
                                    value="<?= $row['ketua_cabang']; ?>">
                            </div>
                            <div class="col">
                                <label for="no_hp" class="form-label">No HP Ketua Cabang</label>
                                <input id="no_hp" name="no_hp" type="text" class="form-control"
                                    value="<?= $row['no_hp']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="panitia_qurban" class="form-label">Panitia Cabang</label>
                                <input id="panitia_qurban" name="panitia_qurban" type="text" class="form-control"
                                    value="<?= $row['panitia_qurban']; ?>">
                            </div>
                            <div class="col">
                                <label for="no2_hp" class="form-label">No HP Panitia</label>
                                <input id="no2_hp" name="no2_hp" type="text" class="form-control"
                                    value="<?= $row['no2_hp']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="col">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="form-control"
                                value="<?= $row['alamat']; ?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" style="font-weight: 600;" data-toggle="modal" type="submit"
                            name="update">Save</button>
                        <a href="controler/template/nota.php?id=<?= $row['id']; ?>" type="button" target="_BLANK"
                            class="btn btn-primary">Print</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>