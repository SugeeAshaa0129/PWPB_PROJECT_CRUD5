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
                        
                        <div class="row">
                            <div class="col-lg-12">
                                 <h2 class="title-1 m-b-25">Spp</h2>
                                 <?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="table-responsive table--no-card m-b-40">
                                   
                                    <table class="table table-borderless table-striped table-earning">

                                     <thead>
                                        <tr>
                                            <th>Tahun  Ajaran</th>
                                            <th>Nominal</th>
                                            <th>Aksi</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                            <?php foreach ($spp as $spp): ?>
                                            <tr>
                                                <td><?php echo $spp->tahun ?></td>
                                                <td><?php echo $spp->nominal ?></td>
                                                <td width="250">
                                                 <a href="<?php echo site_url('admin/spp/edit/'.$spp->id_spp) ?>"
                                                   class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                   <a onclick="deleteConfirm('<?php echo site_url('admin/spp/delete/'.$spp->id_spp) ?>')"
                                                   href="<?php echo site_url('admin/spp/delete/'.$spp->id_spp) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                 </td>
                                            </tr>

                                        </tbody>
                                        <?php endforeach; ?>
                                    </table>
                                
                                </div>

                                <table>
                                <tr>
                                    <a href="<?php echo site_url('admin/spp/add') ?>"><div class="btn btn-success mr-2">Tambah</div></a>
                                    <a href="<?php echo site_url('admin/spp/cetak') ?>"><div class="btn btn-danger">Cetak PDF</div></a>
                                </tr>
                            </table>

                            </div>
                           </div>
                        <?php $this->load->view('admin/_partials/footer.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
      
    </div>

    <?php $this->load->view('admin/_partials/js.php'); ?>
    <?php $this->load->view('admin/_partials/modal.php'); ?>

</body>

</html>
<!-- end document-->