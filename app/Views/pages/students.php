<?php include(APPPATH.'Views/templates/side-nav.php'); ?>
<?php include(APPPATH.'Views/templates/lunar-css.php'); ?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Students Panel</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="/create/student"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp; &nbsp;New Student</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Students Information</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
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
                                            <th>Gender</th>             
                                            <th>Class</th> 
                                            <th>Parent Name</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Date of Birth</th>             
                                            <th>Actions</th>             

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($all_students as $key => $student): ?>
                                            <tr>
                                                    <td><?php echo "#".$student['student_id'] ?></td>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url() ?>/assets/img/avatars/avatar1.jpeg">
                                                        <?php echo $student['name'] ?>
                                                    </td>
                                                    <td><?php echo $student['sex'] ?></td>
                                                    <td><?php echo $student['class_id'] ?></td>
                                                    <td><?php echo $student['father_name'] ?></td>
                                                    <td><?php echo $student['address'] ?></td>
                                                    <td><?php echo $student['parent_phone'] ?></td>
                                                    <td><?php echo $student['birthday'] ?></td>

                                                    <td>
                                                        <a class="btn btn-warning btn-sm d-block"  role="button" href="<?php echo base_url().'/admin/student/profile/'.$student["student_id"] ?>">
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
            
<?php include(APPPATH.'Views/templates/lunar-scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
