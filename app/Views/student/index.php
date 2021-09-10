<?php include(APPPATH.'Views/templates/student_nav.php'); ?>
                

<div class="container-fluid">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>CURRENT CLASS</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>Form 3</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>SUBJECTS</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span><?= esc($num_students) ?></span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-info py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>FEE PERCENTAGE</span></div>
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow border-start-warning py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>ROLE</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span>Regular</span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary fw-bold m-0">Profile Overview</h6>
                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table my-0 bri__fix" id="dataTable">
                            <tr>
                                <th>Name: </th>
                                <td><?php echo $_SESSION['user_data']['name'] ?></td>
                            </tr>
                            <tr>
                                <th>Gender: </th>
                                <td><?php echo $_SESSION['user_data']['sex'] ?></td>
                            </tr>
                            <tr>
                                <th>Father Name: </th>
                                <td><?php echo $_SESSION['user_data']['father_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Mother Name: </th>
                                <td><?php echo $_SESSION['user_data']['mother_name'] ?></td>
                            </tr>

                            <tr>
                                <th>Date of Birth: </th>
                                <td><?php echo $_SESSION['user_data']['birthday'] ?></td>
                            </tr>
                            <tr>
                                <th>Religion: </th>
                                <td><?php echo $_SESSION['user_data']['religion'] ?></td>
                            </tr>
                            <tr>
                                <th>E-mail: </th>
                                <td><?php echo $_SESSION['user_data']['parent_email'] ?></td>
                            </tr>
                            <tr>
                                <th>class: </th>
                                <td><?php echo $_SESSION['user_data']['class_id'] ?></td>
                            </tr>
                            <tr>
                                <th>Roll: </th>
                                <td><?php echo "#".$_SESSION['user_data']['student_id'] ?></td>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <td><?php echo $_SESSION['user_data']['parent_phone'] ?></td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="col">
                            <h6 class="text-primary">
                                Profile Picture
                            </h6>
                            <img class="rounded-circle mb-3 mt-4" src="<?php echo base_url() ?>/assets/img/dogs/image2.jpeg" width="110" height="110">

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Recent Activities</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col">
                        <div class="text-grey">
                            16, May 2017
                        </div>
                        <div class="row justify-content-between align-items-center text-md">
                            <div class="col-4 text-primary">Jeniffer Lopez</div> 
                            <div class="col-8 text-grey">5 min ago</span>
                        </div>
                        <div class="mt-2">
                            Great student management portal, i could actually pay for it 
                        </div>
                    </div>
                </div>
            </div>
            </div>

                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">Recent Exam Results</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                         <table class="table my-0 bri__fix" id="dataTable">
                            <tr>
                                <th>Exam</th>
                                <th>Mathematics</th>
                                <th>Humanity</th>
                                <th>Neural Net</th>
                                <th>Economics</th>
                            </tr>
                            <tr>
                                <th>Cat 1</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                             <tr>
                                <th>Class Exam</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                              <tr>
                                <th>Class Exam</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </table>
                
                    </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>

</div>
</div>
<script src="<?php echo base_url() ?>/assets/js/chart.min.js"></script>
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
