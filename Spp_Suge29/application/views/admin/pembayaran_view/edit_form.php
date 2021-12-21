<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                        <div class="card-header">
                             <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        </div>
                   
                        <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/pembayaran_view/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/pembayaran/add') ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="nisn">NISN*</label>
                                    <input class="form-control <?php echo form_error('nisn') ? 'is-invalid':'' ?>"
                                     type="number" name="nisn" placeholder="NISN" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nisn') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_bayar">Tanggal Bayar*</label>
                                    <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="date" name="tgl_bayar" min="0" placeholder="Tanggal Bayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_bayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bulan_dibayar">Bulan Dibayar*</label>
                                    <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="text" name="bulan_dibayar" min="0" placeholder="Bulan Dibayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('bulan_dibayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_dibayar">Tahun Dibayar*</label>
                                    <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="tahun_dibayar" min="0" placeholder="Tahun Dibayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tahun_dibayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_spp">ID SPP*</label>
                                    <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="id_spp" min="0" placeholder="ID SPP" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_spp') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bayar">Jumlah Bayar*</label>
                                    <input class="form-control <?php echo form_error('jumlah_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="jumlah_bayar" min="0" placeholder="Jumlah Bayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jumlah_bayar') ?>
                                    </div>
                                </div>
                                
                                <input class="btn btn-success" type="submit" nisn="btn" value="Simpan" />
                            </form>
                        </div>
                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                    </div>
                    <?php $this->load->view("admin/_partials/footer.php") ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        

    </div>

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
     --><?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
<!-- end document-->