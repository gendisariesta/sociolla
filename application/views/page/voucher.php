<section class="bg-light" id="#">
  <div class="container px-5">
    <h2 class="display-1 lh-1 mb-3 text-black">Daily Voucher</h2>
    <div class="row">
      <?php
      $no = 1;
      foreach ($list_data->result() as $data) { ?>
      <div class="col-4 mb-3">
        <div class="card">
             <img class="card-img-top" src="<?= base_url($data->foto_voucher); ?>" alt="Card image cap">
             <div class="card-body">
               <h5 class="card-title"><?=$data->nama_voucher?></h5>
             </div>
           </div>
      </div>
      <?php $no++;
      } ?>

    </div>
  </div>
</section>