<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/_partials/head.php'); ?>

<body class="animsition">
     <?php $this->load->view('admin/_partials/breadcrumb.php'); ?>
    <div class="page-wrapper">
       
        <?php $this->load->view('admin/_partials/sidebar.php'); ?>

        <?php $this->load->view('admin/_partials/navbar.php'); ?>

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
                            <a href="<?php echo site_url('admin/pembayaran') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/pembayaran/add') ?>" method="post" enctype="multipart/form-data" >
                               
                                <div class="form-group">
                                    <label for=id_petugas>Id Petugas</label>
                                    <input required class="form-control <?php echo form_error('id_petugas') ? 'is-invalid':'' ?>"
                                     type="text" name="id_petugas" placeholder="id petugas" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_petugas') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nisn">Nisn</label>
                                    <input required class="form-control <?php echo form_error('nisn') ? 'is-invalid':'' ?>"
                                     type="number" name="nisn" placeholder="nisn" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nisn') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_bayar">Tanggal Bayar</label>
                                    <input required class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="tgl_bayar" placeholder="Tanggal" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_bayar') ?>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="bulan_bayar">Bulan Bayar</label>
                                    <input required class="form-control <?php echo form_error('bulan_bayar') ? 'is-invalid':'' ?>"
                                     type="text" name="bulan_bayar" placeholder="Bulan" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('bulan_bayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_bayar">Tahun Bayar</label>
                                    <input required class="form-control <?php echo form_error('tahun_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="tahun_bayar" placeholder="Tahun" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tahun_bayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_spp">Id Spp</label>
                                    <input required class="form-control <?php echo form_error('id_spp') ? 'is-invalid':'' ?>"
                                     type="text" name="id_spp" placeholder="Id spp" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_spp') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bayar">Jumlah Bayar</label>
                                    <input required class="form-control <?php echo form_error('jumlah_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="jumlah_bayar" min="0" placeholder="0" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jumlah_bayar') ?>
                                    </div>
                                </div>
                                <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
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
    </div>

    <?php $this->load->view('admin/_partials/js.php'); ?>
    <?php $this->load->view('admin/_partials/modal.php'); ?>

</body>

</html>
<!-- end document-->


