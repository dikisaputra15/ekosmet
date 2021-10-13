 <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
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
                    <div class="hero__search">
                        <div class="hero__search__form">
                             <form action="<?= base_url('home/search') ?>" method="POST">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="keyword" placeholder="apa yang kamu cari?">

                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                  <input type="submit" class="btn btn-primary" name="submit" value="Cari">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="hero__item set-bg" data-setbg="<?php echo base_url(); ?>assets/shop-pages/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>Kosmetik</span>
                            <h2>Best Product</h2>
                            <p>Tampil Cantik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                  <?php foreach ($barang as $brg) : ?>
                    <div class="col-lg-3">
                        <a href="<?= base_url('home/detail/') . $brg['id_barang']; ?>"><div class="categories__item set-bg" data-setbg="<?= base_url('public/img/upload/') . $brg['gambar']; ?>">
                            <h5>
                            <a href="<?= base_url('home/detail/') . $brg['id_barang']; ?>"> <?= $brg['nama_barang']; ?> Rp. <?= number_format($brg['harga']); ?></a>
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
        </div>
    </section>
