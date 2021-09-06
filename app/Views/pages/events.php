<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

 
                <div class="container d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Upcoming Events</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                </div>
                <section class="projects-horizontal">
                    <div class="container text-truncate">
                        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="w-100 d-block" src="<?php echo base_url() ?>/assets/img/minibus.jpeg" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="<?php echo base_url() ?>/assets/img/bear.jpg" alt="Slide Image"></div>
                                <div class="carousel-item" style="background: linear-gradient(black 21%, rgb(71,71,71) 27%, rgb(78,78,78) 30%, white);"><img class="w-100 d-block" src="<?php echo base_url() ?>/assets/img/desk.jpg" alt="Slide Image" style="margin-bottom: 20px !important;"></div>
                            </div>
                            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                        <div class="intro"></div>
                        <div class="row projects">
                            <div class="col-sm-6 item">
                                <div class="row">
                                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="<?php echo base_url() ?>/assets/img/desk.jpg"></a></div>
                                    <div class="col">
                                        <h3 class="name">Students' Academic Day</h3>
                                        <p class="description">The school will be receiving parents to assess their kids perfomance for form 3 class.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 item">
                                <div class="row">
                                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="<?php echo base_url() ?>/assets/img/building.jpg"></a></div>
                                    <div class="col">
                                        <h3 class="name">Start of Main Exam</h3>
                                        <p class="description">All the students will be sitting for their end of term 2 examination to determine what they have learnt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 item">
                                <div class="row">
                                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="<?php echo base_url() ?>/assets/img/loft.jpg"></a></div>
                                    <div class="col">
                                        <h3 class="name">End of Term</h3>
                                        <p class="description">The school is scheduled to close for the end of term 2. All students will be expected to go home.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
