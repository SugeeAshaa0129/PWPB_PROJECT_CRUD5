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
                                <a href="<?php echo site_url('admin/petugas/add') ?>"><i class="fas fa-plus"></i> Tambah Data</a>  
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Petugas</th>
                                            <th>Id Login</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($petugas as $petugas): ?>
                                        <tr>
                                            <td>
                                                <?php echo $petugas->nama_petugas ?>
                                            </td>
                                            <td>
                                                <?php echo $petugas->id_login ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('upload/'.$petugas->image) ?>" width="64" />
                                            </td>
                                            <td width="250">
                                                <a href="<?php echo site_url('admin/petugas/edit/'.$petugas->id_petugas) ?>"
                                                 class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/petugas/delete/'.$petugas->id_petugas) ?>')"
                                                 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view("admin/_partials/footer.php") ?>
                        </div>
                    </div>
            
                </div>

            </div><!-- END MAIN CONTENT-->
          <!-- END PAGE CONTAINER-->
    </div> <!-- END WRAPPER-->

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
     --><?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

    <script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>

</body>

</html>
<!-- end document-->
