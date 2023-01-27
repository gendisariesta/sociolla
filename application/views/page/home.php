<!-- App features section-->
<section id="features">
  <div class="container px-5">
    <div class="row">
      <div class="owl-carousel owl-theme" id="owl-carousel">
        <div class="item">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/ads-carousel-1.avif">
        </div>
        <div class="item">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/ads-carousel-2.avif">
        </div>
        <div class="item">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/ads-carousel-3.avif">
        </div>
      </div>
    </div>
</section>
<section class="bg-pink" id="#">
  <div class="container px-5">
    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
      <div class="me-5 text-center align-items-center justify-content-center">
        <h2 class="display-1 lh-1 mb-3 text-black">RECYCLE YOUR BEAUTY WASTE</h2>
        <p class="lead fs-6 fw-normal mb-0 text-black">BAWA EMPTIES, DROP OFF DI SUKIN RECYCLE STATION! SEMUDAH ITU, BESTIE!</p>
      </div>
      <img class="img-section-2" src="<?= base_url('assets/sociolla/'); ?>assets/img/section-2.avif" />
    </div>
  </div>
</section>
<section class="bg-light" id="">
  <div class="container px-5">
    <div class="row">
      <div class="col-4">
        <div class="d-flex">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/icon-1.webp" class="triple-icon" />
          <div>
            <p class="mb-2 fs-6 fw-bold text-black">Asli & 100 % BPOM</p>
            <p class="mb-3 fs-7 text-black">Belanja produk kecantikan pasti asli dari ratusan brand yang bersertifikasi BPOM.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="d-flex">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/icon-2.png" class="triple-icon" />
          <div>
            <p class="mb-2 fs-6 fw-bold text-black">Promo Cantik Tiap Hari
            </p>
            <p class="mb-3 fs-7 text-black">Temukan ribuan produk kecantikan favorit kamu dengan promo spesial setiap hari.
            </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="d-flex">
          <img src="<?= base_url('assets/sociolla/'); ?>assets/img/icon-3.svg" class="triple-icon" />
          <div>
            <p class="mb-2 fs-6 fw-bold text-black">Review Terpercaya
            </p>
            <p class="mb-3 fs-7 text-black">Baca jutaaan ulasan terpercaya sebelum kamu berbelanja, dari komunitas kecantikan SOCO.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-pink-dark" id="">
  <div class="container px-5">
    <div class="row">
      <div class="owl-carousel owl-theme" id="owl-carousel-1">
        <div class="item">
          <div class="card">
            <img class="card-img-top" src="blablabla" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function() {

    var owl = $('#owl-carousel');
    owl.owlCarousel({
      margin: 10,
      loop: true,
      autoplay: true,
      nav: true,
      autoplayTimeout: 3000,
      navText: ["<div class='owl-carousel prev-slide'><img src='<?= base_url('assets/sociolla/'); ?>assets/img/arrow-left-solid.svg' /></div>", "<div class='owl-carousel next-slide'><img src='<?= base_url('assets/sociolla/'); ?>assets/img/arrow-right-solid.svg' /></div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })

    var owl1 = $('#owl-carousel-1');
    owl1.owlCarousel({
      margin: 10,
      loop: true,
      autoplay: true,
      nav: true,
      autoplayTimeout: 5000,
      navText: ["<div class='owl-carousel prev-slide'><img src='<?= base_url('assets/sociolla/'); ?>assets/img/arrow-left-solid.svg' /></div>", "<div class='owl-carousel next-slide'><img src='<?= base_url('assets/sociolla/'); ?>assets/img/arrow-right-solid.svg' /></div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
