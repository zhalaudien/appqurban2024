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
                                <label for="info" class="form-label">Info</label>
                                <select id="info" name="info" class="form-control">
                                    <option value="<?= $row['info']; ?>"><?= $row['info']; ?></option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="p_ts" class="form-label">Permintaan Ts</label>
                                <input id="p_ts" name="p_ts" type="text" class="form-control"
                                    value="<?= $row['p_ts']; ?>">
                            </div>
                            <div class="col">
                                <label for="p_tk" class="form-label">Permintaan Tk</label>
                                <input id="p_tk" name="p_tk" type="text" class="form-control"
                                    value="<?= $row['p_tk']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="p_a" class="form-label">Permintaan M</label>
                                <input id="p_a" name="p_a" type="text" class="form-control" value="<?= $row['p_a']; ?>">
                            </div>
                            <div class="col">
                                <label for="p_os" class="form-label">permintaan Os</label>
                                <input id="p_os" name="p_os" type="text" class="form-control"
                                    value="<?= $row['p_os']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="p_ok" class="form-label">Permintaan Ok</label>
                                <input id="p_ok" name="p_ok" type="text" class="form-control"
                                    value="<?= $row['p_ok']; ?>">
                            </div>
                            <div class="col">
                                <label for="p_ks" class="form-label">Permintaan KS</label>
                                <input id="p_ks" name="p_ks" type="text" class="form-control"
                                    value="<?= $row['p_ks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="p_kb" class="form-label">Permintaan K KB</label>
                                <input id="p_kb" name="p_kb" type="text" class="form-control"
                                    value="<?= $row['p_kb']; ?>">
                            </div>
                            <div class="col">
                                <label for="p_kks" class="form-label">Permintaan KKS</label>
                                <input id="p_kks" name="p_kks" type="text" class="form-control"
                                    value="<?= $row['p_kks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="p_kls" class="form-label">Permintaan KLS</label>
                                <input id="p_kls" name="p_kls" type="text" class="form-control"
                                    value="<?= $row['p_kls']; ?>">
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