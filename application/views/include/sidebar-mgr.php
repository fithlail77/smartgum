<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('ptgumacc') ?>/azzara/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= $user['user']; ?>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Ubah Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <p>Web Dashboard System</p>
                        <span class="badge badge-count"></span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('aresta'); ?>">
                                    <span class="sub-item">Areal Statement</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('ch'); ?>">
                                    <span class="sub-item">Curah Hujan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('produksi'); ?>">
                                    <span class="sub-item">Produksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('rapu'); ?>">
                                    <span class="sub-item">Pemupukan & Perawatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('vra'); ?>">
                                    <span class="sub-item">Kenderaan & Alat Berat</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('road'); ?>">
                                    <span class="sub-item">Infrastruktur Jalan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('legal'); ?>">
                                    <span class="sub-item">Legal Perizinan</span>
                                </a>
                            <li>
                                <a href="<?= base_url('lsu'); ?>">
                                    <span class="sub-item">Leaf Sampling Unit (LSU)</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('assessmentblok'); ?>">
                                    <span class="sub-item">Assessment Blok</span>
                                </a>
                            </li>
                </li>
            </ul>
        </div>
        </li>
        </ul>
    </div>
</div>
</div>
<!-- End Sidebar -->