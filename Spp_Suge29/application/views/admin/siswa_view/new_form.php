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
                            <a href="<?php echo site_url('admin/siswa') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/siswa/add') ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input class="form-control <?php echo form_error('NISN') ? 'is-invalid':'' ?>"
                                     type="number" name="nisn" placeholder="NISN" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nisn') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                     type="number" name="nis" min="0" placeholder="NIS" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nis') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                     type="text" name="nama" min="0" placeholder="Nama Siswa" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Pilih Kelas</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas">
                                        <option value="">Pilih Kelas</option>
                                        <?php foreach($id_kelas as $row):?>
                                            <option value="<?php echo $row->id_kelas;?>"><?php echo $row->nama_kelas;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                     type="text" name="alamat" min="0" placeholder="Alamat" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">No. Telpon</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                     type="number" name="no_telp" min="0" placeholder="No. Telpon" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_telp') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="spp">Tahun SPP</label>
                                    <select class="form-control" name="id_spp" id="id_spp">
                                        <option value="">Tahun SPP</option>
                                        <?php foreach($id_spp as $row):?>
                                            <option value="<?php echo $row->id_spp;?>"><?php echo $row->tahun;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="spp">Id Login</label>
                                    <select class="form-control" name="id_login" id="id_login">
                                        <option value="">Id Login</option>
                                        <?php foreach($id_login as $row):?>
                                            <option value="<?php echo $row->id_login;?>"><?php echo $row->id_login;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="image">Photo</label>
                                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                     type="file" name="image" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('image') ?>
                                    </div>
                                 </div> -->



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