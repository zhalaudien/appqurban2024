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
                                <label for="sapi_bumm" class="form-label">Sapi BUMM</label>
                                <input type="text" class="form-control" id="sapi_bumm" value="<?= $row['sapi_bumm']; ?>"
                                    name="sapi_bumm">
                            </div>
                            <div class="col">
                                <label for="info" class="form-label">Status</label>
                                <div class="form-group">
                                    <select id="info" name="info" class="form-control">
                                        <option value="<?= $row['info']; ?>"><?= $row['info']; ?></option>
                                        <option value="Sudah">Sudah</option>
                                        <option value="Belum">Belum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="sapib_bumm" class="form-label">Sapi BUMM/orang</label>
                                <input type="text" class="form-control" id="sapib_bumm"
                                    value="<?= $row['sapib_bumm']; ?>" name="sapib_bumm">
                            </div>
                            <div class="col">
                                <label for="kambing_bumm" class="form-label">Kambing BUMM</label>
                                <input id="kambing_bumm" name="kambing_bumm" type="text" class="form-control"
                                    value="<?= $row['kambing_bumm']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="sapi_mandiri" class="form-label">Sapi Cabang</label>
                                <input id="sapi_mandiri" name="sapi_mandiri" type="text" class="form-control"
                                    value="<?= $row['sapi_mandiri']; ?>">
                            </div>
                            <div class="col">
                                <label for="kambing_mandiri" class="form-label">Kambing Cabang</label>
                                <input id="kambing_mandiri" name="kambing_mandiri" type="text" class="form-control"
                                    value="<?= $row['kambing_mandiri']; ?>">
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