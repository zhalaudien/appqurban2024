<a class=" btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
    data-target="#edit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i>Edit</a>
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
                                <label for="cabang" class="form-label">Cabang</label>
                                <input type="text" class="form-control" id="cabang" value="<?= $row['cabang']; ?>"
                                    name="cabang" readonly>
                            </div>
                            <div class="col">
                                <label for="realisasi" class="form-label">Realisasi</label>
                                <select id="realisasi" name="realisasi" class="form-control">
                                    <option value="<?= $row['realisasi']; ?>"><?= $row['realisasi']; ?></option>
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="row">
                            <div class="col">
                                <label for="d_ts" class="form-label">Perkiraan Ts</label>
                                <input type="text" class="form-control" id="d_ts"
                                    value="<?= ($row['sapi_bumm']*7)+$row['sapib_bumm']+($row['sapi_mandiri']*7); ?>"
                                    name="d_ts" readonly>
                            </div>
                            <div class="col">
                                <label for="p_ts" class="form-label">Permintaan Ts</label>
                                <input id="p_ts" name="p_ts" type="text" class="form-control"
                                    value="<?= $row['p_ts']; ?>" readonly>
                            </div>
                            <div class="col">
                                <label for="ts" class="form-label">Realisasi Ts</label>
                                <input id="ts" name="ts" type="text" class="form-control" value="<?= $row['ts']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_tk" class="form-label">Perkiraan Tk</label>
                                <input type="text" class="form-control" id="d_tk"
                                    value="<?= $row['kambing_bumm']+$row['kambing_mandiri']; ?>" name="d_tk" readonly>
                            </div>
                            <div class="col">
                                <label for="p_tk" class="form-label">Permintaan Tk</label>
                                <input id="p_tk" name="p_tk" type="text" class="form-control"
                                    value="<?= $row['p_tk']; ?>">
                            </div>
                            <div class="col">
                                <label for="ts" class="form-label">Realisasi Tk</label>
                                <input id="tk" name="tk" type="text" class="form-control" value="<?= $row['tk']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_a" class="form-label">Perkiraan A</label>
                                <input type="text" class="form-control" id="d_a" value="" name="d_a" readonly>
                            </div>
                            <div class="col">
                                <label for="p_a" class="form-label">Permintaan A</label>
                                <input id="p_a" name="p_a" type="text" class="form-control" value="<?= $row['p_a']; ?>">
                            </div>
                            <div class="col">
                                <label for="a" class="form-label">Realisasi A</label>
                                <input id="a" name="a" type="text" class="form-control" value="<?= $row['a']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_os" class="form-label">Perkiraan Os</label>
                                <input type="text" class="form-control" id="d_os"
                                    value="<?= number_format((($row['sapi_bumm']+($row['sapib_bumm']/7)+$row['sapi_mandiri'])*110), 2) ; ?>"
                                    name="d_os" readonly>
                            </div>
                            <div class="col">
                                <label for="p_os" class="form-label">permintaan Os</label>
                                <input id="p_os" name="p_os" type="text" class="form-control"
                                    value="<?= $row['p_os']; ?>">
                            </div>
                            <div class="col">
                                <label for="os" class="form-label">Realisasi Os</label>
                                <input id="os" name="os" type="text" class="form-control" value="<?= $row['os']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_ok" class="form-label">Perkiraan Ok</label>
                                <input type="text" class="form-control" id="d_ok"
                                    value="<?= ($row['kambing_bumm']+$row['kambing_mandiri'])*10; ?>" name="d_ok"
                                    readonly>
                            </div>
                            <div class="col">
                                <label for="p_ok" class="form-label">Permintaan Ok</label>
                                <input id="p_ok" name="p_ok" type="text" class="form-control"
                                    value="<?= $row['p_ok']; ?>">
                            </div>
                            <div class="col">
                                <label for="ok" class="form-label">Realisasi Ok</label>
                                <input id="ok" name="ok" type="text" class="form-control" value="<?= $row['ok']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_ks" class="form-label">Perkiraan KS</label>
                                <input type="text" class="form-control" id="d_ks"
                                    value="<?= number_format(($row['sapi_bumm']+($row['sapib_bumm']/7)+$row['sapi_mandiri']), 2); ?>"
                                    name="d_ks" readonly>
                            </div>
                            <div class="col">
                                <label for="p_ks" class="form-label">Permintaan KS</label>
                                <input id="p_ks" name="ks" type="text" class="form-control"
                                    value="<?= $row['p_ks']; ?>">
                            </div>
                            <div class="col">
                                <label for="ks" class="form-label">Realisasi KS</label>
                                <input id="ks" name="ks" type="text" class="form-control" value="<?= $row['ks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_kb" class="form-label">Perkiraan K KB</label>
                                <input type="text" class="form-control" id="d_kb"
                                    value="<?= $row['kambing_bumm']+$row['kambing_mandiri']; ?>" name="d_kb" readonly>
                            </div>
                            <div class="col">
                                <label for="p_kb" class="form-label">Permintaan K KB</label>
                                <input id="p_kb" name="p_kb" type="text" class="form-control"
                                    value="<?= $row['p_kb']; ?>">
                            </div>
                            <div class="col">
                                <label for="kb" class="form-label">Realisasi K KB</label>
                                <input id="kb" name="kb" type="text" class="form-control" value="<?= $row['kb']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_kks" class="form-label">Perkiraan KKS</label>
                                <input type="text" class="form-control" id="d_kks"
                                    value="<?= number_format((($row['sapi_bumm']+($row['sapib_bumm']/7)+$row['sapi_mandiri'])*4), 2); ?>"
                                    name="d_kks" readonly>
                            </div>
                            <div class="col">
                                <label for="p_kks" class="form-label">Permintaan KKS</label>
                                <input id="p_kks" name="p_kks" type="text" class="form-control"
                                    value="<?= $row['p_kks']; ?>">
                            </div>
                            <div class="col">
                                <label for="kks" class="form-label">Realisasi KKS</label>
                                <input id="kks" name="kks" type="text" class="form-control" value="<?= $row['kks']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="d_kls" class="form-label">Perkiraan KLS</label>
                                <input type="text" class="form-control" id="d_kls"
                                    value="<?= number_format(($row['sapi_bumm']+($row['sapib_bumm']/7)+$row['sapi_mandiri']), 2); ?>"
                                    name="d_kls" readonly>
                            </div>
                            <div class="col">
                                <label for="p_kls" class="form-label">Permintaan KLS</label>
                                <input id="p_kls" name="p_kls" type="text" class="form-control"
                                    value="<?= $row['p_kls']; ?>">
                            </div>
                            <div class="col">
                                <label for="kls" class="form-label">Realisasi KLS</label>
                                <input id="kls" name="kls" type="text" class="form-control" value="<?= $row['kls']; ?>">
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