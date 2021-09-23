<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <div class="text-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span>Library</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span>Data</span></a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <form method='post' action='/create/student' enctype="multipart/form-data">
                     <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Create New Subject</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="subject_name"><strong>Name of Subject</strong></label><input class="form-control" type="text" id="subject_name" placeholder="" name="subject_name"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="subject_class"><strong>Subject Class</strong></label><input class="form-control" type="text" id="subject_class" placeholder="" name="subject_class"></div>
                                </div>                                        
                            </div>
                        </div>
                    </div>
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Create&nbsp;Subject</button></div>

                </form>
            </div>
            <div class="col-md-8 mb-4">

                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">All Subjects</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                    <label class="form-label">Show&nbsp;</label>
                                        <select class="d-inline-block form-select form-select-sm">
                                            <option value="10" selected="">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table-dark table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0 bri__fix" id="dataTable">
                                    <thead>
                                        <tr>  
                                            <th>Roll</th>             
                                            <th>Name(s)</th>    
                                            <th>Action(s)</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_subjects as $key => $row): ?>
                                            <tr>
                                                    <td><?php echo "#".$row['subject_id'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm d-block"  role="button" href="<?php echo base_url().'/admin/student/profile/'.$row["subject_id"] ?>">
                                                            <i class="fas fa-eye fa-sm text-white-50"></i>&nbsp; &nbsp;View
                                                        </a>
                                                    </td>

                                                </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
