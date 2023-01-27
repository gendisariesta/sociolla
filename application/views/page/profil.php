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
                        <div class="row">

                            <div class="col-md col-sm mr-auto">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Id</th>
                                        <td><?= $user['id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $user['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $user['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $user['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?= $user['jenis_kelamin'] ?></td>
                                    </tr>
                                </table>
                                <a href="<?= base_url('Account/edit_akun') ?>" class="btn btn-secondary btn-block">Edit</a>
                            </div>
                            
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </form>
        </div>
        <div class="col-md col-sm">
            
            </div>
    </div>
</div>
</section>