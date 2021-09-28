<?php include(APPPATH.'Views/templates/header-common.php'); ?>


<?php include(APPPATH.'Views/templates/student_nav.php'); ?>
                
<script> 

    const base_url = "<?php echo base_url() ?>"
</script>
<div class="container-fluid">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Assignments</h3>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card border-start-primary py-2">
            <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>PENDING</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span><?=count($assignments) ?></span></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    
  
    <?php include(APPPATH.'Views/modals/submit-assignment.php'); ?>
    
    <div class="col-md-6 col-xl-3 mb-4">
        <div class="card  border-start-info py-2">
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
        <div class="card  mb-4">
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
                <?php foreach($assignments as $row): ?>
                    <div class="col mt-2 custom-box mb-5">
                        <div class="bg-primary text-white lang">
                            <?=$row['subject'] ?>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="text-grey text-xm mt-3">
                                    Posted on  <?=$row['created_at'] ?>
                                </div>
                                <div class="row justify-content-between align-items-center text-md">
                                    <div>by <span class="text-primary"><?=$row['creator'] ?></span></div> 
                                </div>
                                <div class="row justify-content-between align-items-center text-md">
                                    <div class="mr-2">Due on: <span class="text-info"><?=$row['due_date'] ?></span></div>
                                  
                                </div>
                                <h5 class="text-primary my-2">Instructions for students</h5>
                                <p><?=$row['description'] ?></p> 
                            </div>
                            <div class="col-md-4">
                                <div class="card  mb-2">
                                    <div class="card-header bg-warning">
                                        Assignment File(s)
                                    </div>
                                    <div class="card-body">
                                        <div class="py-2">
                                            <a  class="btn btn-primary btn-sm d-none d-sm-inline-block " role="button" href="<?=base_url('uploads/assignments/').'/'.$row['fileID'] ?>"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Download File</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        Reference Materials
                                    </div>
                                    <div class="card-body">
                                        <div class="py-2">
                                            No reference Material added
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-warning">
                                       Submission box
                                    </div>
                                    <div class="card-body">
                                        <div class="py-2">
                                            <a data-id='1' class="btn btn-outline-success btn-sm d-none d-sm-inline-block classic-id" data-assignID='<?=$row["assignment_id"] ?>'  role="button" href="#">=>&nbsp;<i class="fas fa-upload fa-sm text-white-50"></i>&nbsp;Submit Assingnment</a>
                                            
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
   
            </div>
                
        </div>
    </div>


<script src="<?=base_url('assets/js/assign-HA.js') ?>"></script>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
