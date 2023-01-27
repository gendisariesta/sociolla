<section id="features">
  <div class="container px-5">
  <div class="row">
  <table class="table table-striped" id="myTable">
    <tbody>
                                <?php foreach ($produk as $p) : ?>
                                    <td>
                                    <div class="card">
            <img class="card-img-top" src="<?=base_url($p['foto_produk'])?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
                                    </td>
                                <?php endforeach; ?>
                                </tbody>
                        </table>

</div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>