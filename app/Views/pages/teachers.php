<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-dark mb-0">Teacher Panel</h4><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="/create/teacher"><i class="fas fa-user-tie fa-sm text-white-50"></i>&nbsp; &nbsp;New Teacher</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Employee Information</p>
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
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Subjects</th>
                                            <th>Gender</th>
                                            <th>Phone No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php foreach ($all_teachers as $key => $teacher): ?>
                                            <tr>                                    
                                                <td><?php echo $key + 1 ?></td>
                                                <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo base_url() ?>/assets/img/avatars/avatar1.jpeg">
                                                    <?php echo $teacher['name'] ?>
                                                </td>
                                                <td><?php echo $teacher['role'] ?></td>
                                                <td><?php echo $teacher['subjects'] ?></td>
                                                <td><?php echo $teacher['sex'] ?></td>
                                                <td><?php echo $teacher['phone'] ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm d-block"  role="button" href="<?php echo base_url().'/admin/teacher/profile/'.$teacher["teacher_id"] ?>">
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

<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
