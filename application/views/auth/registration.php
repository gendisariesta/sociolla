<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block image-login"><img src="<?= base_url('assets/sociolla/assets/img/')?>sociolla-icon.png" width="400" background-position: center; background-size: cover></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Mari bergabung bersama <strong>#sociolla</strong></h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('Auth/registration') ?>">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-2">
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3">
                                    <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group row">
                                <div class="col-sm-6 mb-3">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ketik ulang password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-user btn-block" style="background-color: #A97B70; color:white;width:-webkit-fill-available">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('Auth'); ?>">Sudah punya akun, masuk disini!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>