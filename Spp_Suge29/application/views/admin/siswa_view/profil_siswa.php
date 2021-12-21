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
        <div class="page-container">
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

                <!-- Card  -->
                <div class="card mb-3">
                    <div class="card-header">

                        <a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url(" admin/siswa/edit") ?>" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="nisn" value="<?php echo $siswa->nisn?>" />

                            <div class="form-group">
                                <label for="nisn">NISN*</label>
                                <input class="form-control <?php echo form_error('nisn') ? 'is-invalid':'' ?>"
                                 type="text" name="username" placeholder="NISN" value="<?php echo $siswa->nisn ?>" disabled />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nisn') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nis">NIS*</label>
                                <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                 type="text" name="nis" min="0" placeholder="NIS" value="<?php echo $siswa->nis ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Siswa*</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                 name="nama" placeholder="Nama Siswa" value="<?php echo $siswa->nama ?>"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="spp">Pilih Kelas*</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas" required>
                                       <option value="">Pilih Kelas</option>
                                            <?php foreach ($id_kelas as $row) { ?>
                                        <option <?php if($row->id_kelas ==$siswa->id_kelas){ echo 'selected="selected"'; } ?> 
                                            value="<?php echo $row->id_kelas ?>"><?php echo $row->nama_kelas?> </option>
                                            <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat*</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                 name="alamat" placeholder="Alamat" value="<?php echo $siswa->alamat ?>"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No. Telp*</label>
                                <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                 name="no_telp" placeholder="No. Telp" value="<?php echo $siswa->no_telp ?>"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="spp">Pilih Tahun SPP*</label>
                                    <select class="form-control" name="id_spp" id="id_spp" required>
                                        <option value="">Pilih Tahun SPP</option>
                                            <?php foreach ($id_spp as $row) { ?>
                                        <option <?php if($row->id_spp ==$siswa->id_spp){ echo 'selected="selected"'; } ?> 
                                            value="<?php echo $row->id_spp ?>"><?php echo $row->tahun?> </option>
                                            <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Photo</label>
                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                 type="file" name="image" />
                                <input type="hidden" name="old_image" value="<?php echo $siswa->image ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>
                         

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
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

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
     --><?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
<!-- end document-->