<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
        <h3 class="text-center">Web Dashboard Report - PT GUM</h3>
        <?= $this->session->userdata('message'); ?>
        <form action="<?= base_url('auth'); ?>" method="post">
            <div class="login-form">
                <div class="form-group form-floating-label">
                    <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                    <label for="username" class="placeholder">Username</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Password</label>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
                <div class="row form-sub m-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme">Ingatkan Saya</label>
                    </div>
                </div>
                <div class="form-action mb-3">
                    <button type="submit" class="btn btn-primary btn-rounded btn-login">Masuk</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <center><img src="<?= base_url('ptgumacc') ?>/azzara/assets/img/tit_login.png" alt="" width="50%"></center>
    </div>
</div>