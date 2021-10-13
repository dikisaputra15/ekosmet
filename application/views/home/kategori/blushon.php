<?= $this->session->flashdata('pesan'); ?>

<!-- Page Content -->
<div class="container">

   <div class="row d-flex justify-content-center">

      <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Kategori</span>
                        </div>
                        <ul>
                            <li><a href="<?= base_url('kategori/lipstick') ?>">Lipstick</a></li>
                            <li><a href="<?= base_url('kategori/foundation') ?>">Foundation</a></li>
                            <li><a href="<?= base_url('kategori/eyeshadow') ?>">Eye shadow</a></li>
                            <li><a href="<?= base_url('kategori/bedak') ?>">Bedak</a></li>
                            <li><a href="<?= base_url('kategori/blushon') ?>">Blush On</a></li>
                        </ul>
                    </div>
                </div>

      <div class="col-lg-9">
         <div class="row">
                <div class="categories__slider owl-carousel">
                  <?php foreach ($blushon as $brg) : ?>
                    <div class="col-lg-3">
                        <a href="<?= base_url('home/detail/') . $brg['id_barang']; ?>"><div class="categories__item set-bg" data-setbg="<?= base_url('public/img/upload/') . $brg['gambar']; ?>">
                            <h5>
                            <a href="#"> <?= $brg['nama_barang']; ?> Rp. <?= number_format($brg['harga']); ?></a>
                            </h5>
                        </div>
                       <div class="d-inline d-flex mt-3 justify-content-center">
                             <button class="tambah_keranjang btn btn-sm btn-dark" data-gambar="<?= $brg['gambar']; ?>" data-produkid="<?= $brg['id_barang']; ?>" data-produknama="<?= $brg['nama_barang']; ?>" data-produkharga="<?= $brg['harga']; ?>">Keranjang</button>

                             <input style="text-align: center; margin-left: 15px;" type="number" id="<?= $brg['id_barang']; ?>" name="quantity" min="0" max="100" value="1">
                          </div>
                    </div>
                  <?php endforeach; ?>
                </div>

         </div>
         <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

   </div>
   <!-- /.row -->

</div>
<!-- /.container -->