<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Merk</h4>
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
                        <a href="#">Merk</a>
                    </li>
                </ul>
            </div>
            <?= $this->session->userdata('pesan'); ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Merk</h4>
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
                                                Merk
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small">Isikan Merk Barang</p>
                                        <form action="<?= base_url('merk/addMerk'); ?>" method="post">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Merk</label>
                                                        <input id="addMerk" name="addMerk" type="text" class="form-control" placeholder="Merk Barang">
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
                        foreach ($merk as $m1) : $no++; ?>
                            <div class="modal fade" id="editMerkModal<?= $m1->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Ubah Data</span>
                                                <span class="fw-light">
                                                    Merk
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Ubah data Merk</p>
                                            <form action="<?= base_url('merk/editMerk'); ?>" method="post">
                                                <input class="form-control" type="hidden" name="idmerk" id="idmerk" value="<?= $m1->id; ?>" required>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Merk</label>
                                                            <input id="editMerk" name="editMerk" type="text" class="form-control" placeholder="kode estate" value="<?= $m1->merk; ?>">
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
                                        <th>Merk</th>
                                        <th style="width: 10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Merk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($merk as $m) : $no++; ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $m->merk; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" title="edit" data-target="#editMerkModal<?= $m->id; ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
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