<section id="features">

<div class="container text-left mt-12">
    <div class="row">
        <div class="col-md col-sm">
        </div>
        <div class="col-md-11 col-sm-11">
            <form method="post" action="">
                <div class="card bg-light mx-auto">
                    <h3 class="text-center mt-3">Profil</h3>
                    <div class="card-body">
                    <form method="POST" action="<?= base_url('Account/update_akun')?>">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="hidden" name="role_id" value="<?= $user['role_id'] ?>">
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" name="enama" value="<?= $user['nama'] ?>" class="form-control" placeholder="Masukan nama" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <input type="text" name="ealamat" value="<?= $user['alamat'] ?>" class="form-control" placeholder="Masukan Alamat" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="ekelamin">
                                <option value="laki-laki" <?= ($user['jenis_kelamin'] == "Laki-laki") ? "selected=selected" : "";  ?>>Laki-laki</option>
                                <option value="perempuan" <?= ($user['jenis_kelamin'] == "Perempuan") ? "selected=selected" : "";  ?>>Perempuan</option>
                            </select>
                        </div>
                        <!-- <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" name="eemail" value="<?= $user['email'] ?>" class="form-control" placeholder="Masukan email" required>
                        </div> -->
                        <button type="reset" class="btn btn-grey" name="breset">Reset</button>
                        <button type="submit" class="btn btn-warning float-right" name="bsimpan">Update</button>

                    </form>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md col-sm">
            
            </div>
    </div>
</div>
</section>