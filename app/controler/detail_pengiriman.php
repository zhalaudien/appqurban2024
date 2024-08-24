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
                                <label for="antrian" class="form-label">No Antrian</label>
                                <input type="text" class="form-control" id="antrian" value="<?= $row['antrian']; ?>"
                                    name="antrian">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="kirim_hewan" class="form-label">Jadwal Kirim Hewan</label>
                                <div class="form-group">
                                    <select id="kirim_hewan" name="kirim_hewan" class="form-control">
                                        <option value="<?= $row['kirim_hewan']; ?>"><?= $row['kirim_hewan']; ?></option>
                                        <option value="H-1 15 Juni 2024 Siang">H-1 15 Juni 2024 Siang</option>
                                        <option value="H1 16 Juni 2024 Pagi">H1 16 Juni 2024 Pagi</option>
                                        <option value="H1 16 Juni 2024 Siang">H1 16 Juni 2024 Siang</option>
                                        <option value="H2 17 Juni 2024 Pagi">H2 17 Juni 2024 Pagi</option>
                                        <option value="H2 17 Juni 2024 Siang">H2 17 Juni 2024 Siang</option>
                                        <option value="H3 18 Juni 2024 Pagi">H3 18 Juni 2024 Pagi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="kirim_besek" class="form-label">Jadwal Kirim Besek</label>
                                <div class="form-group">
                                    <select id="kirim_besek" name="kirim_besek" class="form-control">
                                        <option value="<?= $row['kirim_besek']; ?>"><?= $row['kirim_besek']; ?></option>
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>