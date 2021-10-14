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
                    <div class="card-body" style="position: relative">
                        <form class="d-none d-sm-inline-block  me-auto ms-md-1 my-1 my-md-0 w-100 mb-4" style="position: relative">
                            <div class="input-group"><input class="bg-light form-control border-0 small" id="contact-search" type="search" placeholder="search for ..."><button class="btn btn-primary btn-sm py-0" type="button"><i class="fas fa-search"></i></button></div>
                            <div id="search-results" class="shadow-sm border-1"></div>
                        </form>

                        <div id="contact-box" class="contact-box mt-2">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-5 content-box">
                <div class="card border-radius-0 ">
                    <div class="card-header py-2">
                        <p class="text-dark m-0 fw-bold">Threads</p>
                    </div>
                    <div class="card-body">
                        <div class="contact-box threads">
                            <div class="main_thread user">
                                <div class="thread_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
                            </div>
                            <div class="main_thread target">
                                <div class="thread_content">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
