<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> admin@kosmetik.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                         <?php if (!$this->session->userdata('email')) : ?>
                            <div class="header__top__right__auth">
                                <a href="<?= base_url('login') ?>"><i class="fa fa-user"></i>Login</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="<?= base_url('register') ?>"><i class="fa fa-user"></i>Daftar</a>
                            </div>
                           <?php else: ?>
                            <div class="header__top__right__auth">
                                <a class="nav-link d-inline" href="<?= base_url('snap/status_transaksi'); ?>">Transaksi</a>
                            </div>
                             <div class="header__top__right__auth">
                                <a href="<?= base_url('home/setting') ?>"> <img class="img-profile rounded-circle small mr-1" style="height: 25px;" src="<?= base_url('public/img/profile/') . $this->session->userdata('gambar'); ?>">
                                <span class="text-gray-600"><?= $this->session->userdata('nama'); ?></span></a>
                             </div>
                             <div class="header__top__right__auth">
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt text-muted"></i> Logout</a>
                             </div>
                             <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="header__logo">
                        <a href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>assets/shop-pages/img/logo.png" alt=""></a> 
                    </div>
                </div>
                
                <?php if ($this->session->userdata('email')) { ?>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li>
                             <?php $keranjang = $this->cart->total_items(); ?>
                             <a href="<?= base_url('home/detail_keranjang/') . $keranjang; ?>"><i class="fa fa-shopping-bag"></i> <span><?= $keranjang; ?></span></a>
                             </li>
                        </ul>
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

   