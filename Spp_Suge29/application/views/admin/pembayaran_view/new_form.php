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
                            <a href="<?php echo site_url('admin/pembayaran/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/pembayaran/add') ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="id_petugas">Pilih Petugas*</label>
                                    <select class="form-control" name="id_petugas" id="id_petugas">
                                        <option value="">Pilih Petugas</option>
                                        <?php foreach($id_petugas as $row):?>
                                            <option value="<?php echo $row->id_petugas;?>"><?php echo $row->nama_petugas;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN*</label>
                                    <select class="form-control" name="nisn" id="nisn">
                                        <option value="">NISN</option>
                                        <?php foreach($nisn as $row):?>
                                            <option value="<?php echo $row->nisn;?>"><?php echo $row->nisn;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_bayar">Tanggal Bayar*</label>
                                    <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                     type="number" name="tgl_bayar" min="0" placeholder="Tanggal Bayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_bayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bulan_dibayar">Bulan Dibayar*</label>
                                    <select class="form-control <?php echo form_error('bulan_dibayar') ? 'is-invalid':'' ?>" name="bulan_bayar" id="id_kk">
                                        <option value="">Bulan Dibayar</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('bulan_dibayar') ?>
                                    </div>   
                                </div>
                                <div class="form-group">
                                    <label for="tahun_dibayar">Tahun Dibayar*</label>
                                    <input class="form-control <?php echo form_error('tahun_dibayar') ? 'is-invalid':'' ?>"
                                     type="number" name="tahun_dibayar" min="0" placeholder="Tahun Dibayar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tahun_dibayar') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="spp">Tahun SPP*</label>
                                    <select class="form-control" name="id_spp" id="id_spp">
                                        <option value="">Tahun SPP</option>
                                        <?php foreach($id_spp as $row):?>
                                            <option value="<?php echo $row->id_spp;?>"><?php echo $row->nominal;?></option>
                                        <?php endforeach;?>
                                    </select>
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