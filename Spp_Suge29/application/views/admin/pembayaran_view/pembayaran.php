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
                                 <h2 class="title-1 m-b-25">Pembayaran</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                	
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                               
                                                <th>nisn</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pembayaran as $pembayaran_list) : ?>
                                            <tr>
                                                <td><?php echo $pembayaran_list->nisn ?></td>
                                                <td><?php echo $pembayaran_list->tgl_bayar ?></td>
                                                <td><?php echo $pembayaran_list->bulan_bayar ?></td>
                                                <td><?php echo $pembayaran_list->tahun_bayar ?></td>
                                               
                                                <td><?php echo $pembayaran_list->jumlah_bayar ?></td>
                                                <td width="250">
                                                 <a href="<?php echo site_url('admin/pembayaran/edit/'.$pembayaran_list->id_pembayaran) ?>"
                                                   class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                <a 
                                                   href="<?php echo site_url('admin/pembayaran/delete/'.$pembayaran_list->id_pembayaran) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                 </td>
                                            </tr>
                                        </tbody>
                                         <?php endforeach; ?>
                                    </table>
                               
                                </div>

                                <a href="<?php echo site_url('admin/pembayaran/halaman_add') ?>"><div class="btn btn-success">Tambah</div></a>

                            </div>
                           </div>
                        <?php $this->load->view('admin/_partials/footer.php'); ?>
                         <?php $this->load->view('admin/_partials/scrooltop.php'); ?>
                            </div>
                        </div>
                    </div>
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


