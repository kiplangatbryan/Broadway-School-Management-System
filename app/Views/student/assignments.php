<?php include(APPPATH.'Views/templates/student_nav.php'); ?>
                

<div class="container-fluid">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Assignments</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-upload fa-sm text-white-50"></i>&nbsp;Submit Assingnment</a>
</div>
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
                <div class="col mt-2 custom-box">
                    <div class="bg-primary text-white lang">
                        Neural Net
                    </div>
                   
                    <div class="row">
                        <div class="col-md-8">
                             <div class="text-grey text-xm mt-3">
                                Posted on  16, May 2017
                            </div>
                            <div class="row justify-content-between align-items-center text-md">
                                <div>by <span class="text-primary">Andrew Lopez</span></div> 
                            </div>
                            <div class="row justify-content-between align-items-center text-md">
                                <div class="mr-2">Due on: <span class="text-info">11/01/2020</span></div>
                                <div> Status: <span class="text-danger">Pending...</span></div>
                            </div>
                            <h5 class="text-primary my-2">Instructions for students</h5>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, illo consectetur! Expedita cum fuga voluptatum reprehenderit. Aut, sed quas voluptates reprehenderit fugit culpa nesciunt. Ex impedit cum dolorem laboriosam numquam error libero? Illo molestias praesentium sit quasi, adipisci culpa tempore.</p> 
                        </div>
                        <div class="col-md-4">
                             <div class="card  mb-2">
                                <div class="card-header bg-warning">
                                    Assignment File(s)
                                </div>
                                <div class="card-body">
                                    <div class="py-2">
                                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Download File</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
            </div>
                
        </div>
    </div>

<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
