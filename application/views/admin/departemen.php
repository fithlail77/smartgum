<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Departemen</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">List</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Departemen</a>
                    </li>
                </ul>
            </div>
            <?= $this->session->userdata('pesan'); ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Departemen</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal - Tambah -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                                Tambah</span>
                                            <span class="fw-light">
                                                Departemen
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small">Isikan perushaan, kode estate dan nama estate</p>
                                        <form action="<?= base_url('dept/addDept'); ?>" method="post">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Perusahaan</label>
                                                        <select class="form-control" name="addComp" id="addComp">
                                                            <?php foreach ($comp as $c2) : ?>
                                                                <option value="<?= $c2->comp_code; ?>"><?= $c2->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Kode Estate</label>
                                                        <input id="addEstCode" name="addEstCode" type="text" class="form-control" placeholder="kode Estate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Estate</label>
                                                        <input id="addEst" name="addEst" type="text" class="form-control" placeholder="nama estate">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal - Tambah -->
                        <!-- Modal - Edit -->
                        <?php $no = 0;
                        foreach ($dept as $d1) : $no++; ?>
                            <div class="modal fade" id="editDeptModal<?= $d1->dept_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Ubah Data</span>
                                                <span class="fw-light">
                                                    Departemen
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Ubah data nama perusahaan dan kode perusahaan</p>
                                            <form action="<?= base_url('dept/editDept'); ?>" method="post">
                                                <input class="form-control" type="hidden" name="iddept" id="iddept" value="<?= $d1->dept_id; ?>" required>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Perusahaan</label>
                                                            <select class="form-control" name="editComp" id="editComp">
                                                                <option value="<?= $d1->dept_id; ?>"><?= $d1->company; ?></option>
                                                                <?php foreach ($comp as $c2) : ?>
                                                                    <option value="<?= $c2->comp_code; ?>"><?= $c2->comp_code; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Kode Estate</label>
                                                            <input id="editEstCode" name="editEstCode" type="text" class="form-control" placeholder="kode estate" value="<?= $d1->dept_code; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Estate</label>
                                                            <input id="editEst" name="editEst" type="text" class="form-control" placeholder="nama estate" value="<?= $d1->name; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer no-bd">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- End Modal - Edit -->
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Kode Estate</th>
                                        <th>Nama Estate</th>
                                        <th style="width: 10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Kode Estate</th>
                                        <th>Nama Estate</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($dept as $d) : $no++; ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $d->company; ?></td>
                                            <td><?= $d->dept_code; ?></td>
                                            <td><?= $d->name; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" title="edit" data-target="#editDeptModal<?= $d->dept_id; ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <!--<button class="item" data-toggle="tooltip" title="Hapus">
                                                        <a href="#!" onclick="deleteConfirm('<?= base_url('company/delComp/' . $c->comp_id); ?>')">
                                                            <i class="fa fa-trash" style="color:red"></i></a>
                                                    </button>
                                                    <button data-toggle="tooltip" class="btn btn-link btn-danger">
                                                        <a href="#!" onclick="deleteConfirm('<?= base_url('company/delComp/' . $c->comp_id); ?>')">
                                                            <i class=" fa fa-times" style="color:red"></i></a>
                                                    </button>-->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>