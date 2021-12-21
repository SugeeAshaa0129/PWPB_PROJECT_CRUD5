<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>" ><?php echo SITE_NAME ?></a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <!--Akses Menu Untuk Admin-->
                        <?php if($this->session->userdata('akses')=='admin'): ?>
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/spp') ?>">
                                <i class="fas fa-chart-bar"></i>SPP</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/kelas') ?>" >
                                <i class="fas fa-table"></i>Kelas</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/siswa') ?>" >
                                <i class="far fa-check-square"></i>Siswa</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/petugas') ?>" >
                                <i class="fas fa-calendar-alt"></i>Petugas</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/pembayaran') ?>" >
                                <i class="fas fa-map-marker-alt"></i>Transaksi Pembayaran</a>
                        </li>
                        <?php elseif($this->session->userdata('akses')=='petugas'): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                                <i class="fas fa-copy"></i>Beranda</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('admin/spp') ?>" >SPP</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/siswa') ?>" >Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/pembayaran') ?>" >Transaksi Pembayaran</a>
                                </li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                                <i class="fas fa-desktop"></i>Beranda</a>
                        </li>

                       
                    <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->