<a class="btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
<a href="controler/data_delet.php?id_panitia=<?= $row['id']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;"
    onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $row['nama']; ?> ?');"><i
        class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
<div class="modal fade bd-example-modal-lg" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data
                    Cabang <?= $row['nama']; ?></h5>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="my-2">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" id="id" value="<?= $row['id']; ?>" name="id" readonly>
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" value="<?= $row['nama']; ?>"
                                    name="nama" readonly>
                            </div>
                            <div class="col">
                                <label for="cabang" class="form-label">Cabang</label>
                                <input type="text" class="form-control" id="cabang" value="<?= $row['cabang']; ?>"
                                    name="cabang">
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input id="no_hp" name="no_hp" type="text" class="form-control"
                                    value="<?= $row['no_hp']; ?>">
                            </div>
                            <div class="col">
                                <label for="seksi" class="form-label">Seksi</label>
                                <select id="seksi" name="seksi" class="form-control">
                                    <option value="<?= $row['seksi']; ?>">
                                        <?= $row['seksi']; ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($view_seksi as $row) : ?>
                                    <option value="<?= $row['seksi']; ?>">
                                        <?= $row['seksi']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="col">
                            <label for="ket" class="form-label">Keterangan</label>
                            <select id="ket" name="ket" class="form-control">
                                <option value="Anggota">Anggota</option>
                                <option value="Koordinator">Koordinator</option>
                            </select>
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