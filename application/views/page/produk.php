<section class="bg-light" id="#">
  <div class="container px-5">
    <h2 class="display-1 lh-1 mb-3 text-black">Produk Sociolla</h2>
    <div class="row">
      <?php
      $no = 1;
      foreach ($list_data->result() as $data) { ?>
      <div class="col-3 mb-3">
        <div class="card">
             <img class="card-img-top" src="<?= base_url($data->foto); ?>" alt="Card image cap">
             <div class="card-body">
               <h5 class="card-title"><?=$data->nama_produk?></h5>
               <p class="card-text"><?=$data->deskripsi?></p>
               <p class="mb-0 text-pink">Price: IDR <?=$data->harga?></p>
               <p class="mb-3" style="right:0">Stok: <?=$data->stok?></p>
               <a href="#" class="btn btn-pink-dark">Beli Sekarang</a>
             </div>
           </div>
      </div>
      <?php $no++;
      } ?>

    </div>
  </div>
</section>