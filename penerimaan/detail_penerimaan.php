<a class="btn btn-primary btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
<div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
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
                                <input id="pembayaran" name="pembayaran" type="text" class="form-control"
                                    value="<?= $row['pembayaran']; ?>">
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
</div>