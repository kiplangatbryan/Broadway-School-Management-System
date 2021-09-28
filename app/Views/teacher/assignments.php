<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<?php include(APPPATH.'Views/templates/teacher_nav.php'); ?>


<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Assignments</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" id="opener" role="button" href="#"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Add Assignment</a>
    </div>

            <!-- create assinment modal -->
            <?php include(APPPATH.'Views/modals/assignment-create.php'); ?>


            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-primary py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>PENDING</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>8</span></div>
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
            
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="text-primary fw-bold m-0">Assignments</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach($all_assignments as $row): ?>
                                    <div  class="card col-md-6 col-xl-3 m-1">
                                        <div class="card-header d-flex justify-content-between align-items-center bg-transparent">
                                            <h6 class="text-primary fw-bold m-0">
                                                <?= $row['class_id'] ?>
                                            </h6>
                                            <div class="actions">
                                                <a href="" class="btn btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-lg">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body">
                                            <small class="text-grey text-sm mt-3">
                                                <?=$row['created_at'] ?>
                                            </small>
                                            <div class="mr-2"><span class="text-info"> <?=$row['due_date'] ?></span></div>
                                            <h5 class="py-1 mb-0 fw-bold ">
                                                <?=$row['title'] ?>
                                            </h5>
                                        
                                        </div>

                                        <div class="card-footer d-flex justify-content-between align-items-center bg-transparent">
                                            <div class="ns">
                                                <i class="fas fa-copy">
                                                    2
                                                </i>
                                            </div> 
                                         
                                            <div class="">
                                                <i class="fa fa-users">
                                                    22
                                                </i>
                                            </div>

                                        </div>    
                                    </div>
                                    
                                    <?php endforeach ?>
                                </div>  
                            
                            </div>
                        </div>
                    </div>
                </div>
   
           
              
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
