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
                            <a href="<?php echo site_url('admin/kelas/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="<?php base_url('admin/kelas/add') ?>" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="nama_kelas">Nama Kelas*</label>
                                    <input class="form-control <?php echo form_error('nama_kelas') ? 'is-invalid':'' ?>"
                                     type="text" name="nama_kelas" placeholder="Nama Kelas" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_kelas') ?>
                                    </div>      
                                </div>
                                <div class="form-group">
                                    <label for="id_kk">Pilih Kompetensi Keahlian*</label>
                                    <select class="form-control <?php echo form_error('id_kk') ? 'is-invalid':'' ?>" name="id_kk" id="id_kk">
                                        <option value="">Pilih Kompetensi Keahlian</option>
                                        <?php foreach($id_kk as $row):?>
                                            <option value="<?php echo $row->id_kk;?>"><?php echo $row->nama_kk;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_kk') ?>
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

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
     --><?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
    <script>
        $(document).ready(function () {
                $(".select2").select2({
                    placeholder: "Please Select"
                });
            });
    </script>
    

</body>

</html>
<!-- end document-->