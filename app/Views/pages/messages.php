<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<style>
    .messaging-box{
        /* min-height: 500px;
        max-height: 500px; */
    }
    .contact-box{
        min-height: 400px !important;
    }
    .content-box{
        min-height: 400px  !important;
        overflow: scroll !important;

    }
    .custom-block{
        overflow: hidden !important;
    }

</style>
<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

    <div class="container-fluid">
       <?php include(APPPATH.'Views/templates/breadcrumbs.php'); ?>


        <div class="row messaging-box">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header py-2">
                        <p class="text-dark m-0 fw-bold">Messaging</p>
                    </div>
                    <div class="card-body">
                        <form class="d-none d-sm-inline-block  me-auto ms-md-1 my-1 my-md-0 w-100 mb-4">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <div class="contact-box">

                            <a class="dropdown-item d-block d-flex align-items-center w-100 custom-block py-2"  href="#">
                                <div class="me-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar3.jpeg">
                                    <div class="bg-warning status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                </div>
                            </a>

                              <a class="dropdown-item d-block d-flex align-items-center w-100 custom-block py-2"  href="#">
                                <div class="me-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar3.jpeg">
                                    <div class="bg-warning status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                </div>
                            </a>

                              <a class="dropdown-item d-block d-flex align-items-center w-100 custom-block py-2"  href="#">
                                <div class="me-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar3.jpeg">
                                    <div class="bg-warning status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                </div>
                            </a>


                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-5 content-box">
                <div class="card border-radius-0 ">
                    <div class="card-header py-2">
                        <p class="text-dark m-0 fw-bold">Recent Messages</p>
                    </div>
                    <div class="card-body">
                        <div class="contact-box">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
