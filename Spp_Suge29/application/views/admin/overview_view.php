<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/_partials/head.php'); ?>

<style type="text/css">
    
    h1 {

        font-family: sans-serif;
        font-size: 300%;
    }

    h5 {

        font-family: monospace;
        opacity: 70%;
        margin-left: 70%;
        margin-top: 5%;
    }

    .fotoprof {


        width: 20%;
        height: 30%;
        border-radius: 10%;
        margin-left: 40%;
    }

    .kata1 {

        margin-left: 525px;
        margin-top: 1%;
    }


</style>
<body class="animsition">
     <?php $this->load->view('admin/_partials/breadcrumb.php'); ?>
    <div class="page-wrapper">
       
        <?php $this->load->view('admin/_partials/sidebar.php'); ?>

        <?php $this->load->view('admin/_partials/navbar.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content-p10">
                    <div class="container-fluid">
                        <center>
                        <h1>Selamat datang di Aplikasi Saya</h1>
                        </center>
                        <h5>By Sugeasha29</h5>
                        <br>
                        <br>
                        <br>
                        <img class="fotoprof" src="<?php echo base_url('upload/fotfor.jpg') ?>">
                        <h5 class="kata1">"Go Go Go Success!"</h5>
                               </div>
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
    </div>

    <?php $this->load->view('admin/_partials/js.php'); ?>
    <?php $this->load->view('admin/_partials/modal.php'); ?>

</body>

</html>
<!-- end document-->
