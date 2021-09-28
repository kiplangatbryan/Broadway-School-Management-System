<?php include(APPPATH.'Views/templates/header-common.php'); ?>

<?php include(APPPATH.'Views/templates/student_nav.php'); ?>



<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">E-Library service</h3>
    </div>

    <div class="p-3 bg-white">
        <form class="d-none d-sm-inline-block me-auto ms-md-3 pl-0 ml-0 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
        </form>
        <div class="my-3 pl-5">
            <div class="card-text">You freedom to knowledge unlocked</div>
            <small>Get crackin *</small>
        </div>
    </div>

    <div class="row mt-4">
        <?php

            for( $i =0 ; $i < 10; $i++) {
                $img_src = base_url('assets/img/bear.jpg');

                echo <<< EOF
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card my-2 ml-4" style="width: 250px"><img class="card-img-top w-100 d-block" src="$img_src" />
                            <div class="card-body">
                                <h4 class="card-title">Rational Male</h4>
                                <div class="subtitle-text">
                                    by Rollo Tomasi
                                </div>
                                <p class="card-text">
                                    <a href="">view description</a>
                                </p>
                            </div>
                        </div>
                    </div>
                EOF;

            }

           
        ?>
    </div>
</div>




