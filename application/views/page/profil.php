<br><br><br>
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
                                    <tr>
                                        <th>Kata Sandi</th>
                                        <td><?= md5($user['password']) ?></td>
                                    </tr>

                                </table>
                                <a href="<?= base_url('page/edit_akun') ?>" class="btn btn-secondary btn-block">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md col-sm">
        </div>
    </div>
</div>
<br><br><br>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/aos.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/smoothscroll.js"></script>
<script src="<?= base_url('assets/sistem/tentangkami/') ?>js/custom.js"></script>

</body>

</html>