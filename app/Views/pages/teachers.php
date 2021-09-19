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
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="/create/teacher"><i class="fas fa-user-tie fa-sm text-white-50"></i>&nbsp; &nbsp;New Teacher</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">All Teachers</p>
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
                                <table class="table my-0 bri__fix" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Roll</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Email ID</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Phone No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php foreach ($all_teachers as $key => $row): ?>
                                            <tr>                                    
                                                <td><?php echo '# '.$row['teacher_id'] ?></td>
                                                <td><img class="rounded-circle me-2" width="30" height="30" src="<?php echo $row['profileUrl'] === '' ? site_url('/assets/img/avatar2.jpeg'): site_url('/uploads/studentAvatars/'.$row['profileUrl']) ?>">
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td><?php echo $row['sex'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td class="text-nowrap"><?php echo $row['address'] ?></td>
                                                <td><?php echo $row['birthday'] ?></td>
                                                <td><?php echo $row['phone'] ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm d-block"  role="button" href="<?php echo base_url().'/admin/teacher/profile/'.$row["teacher_id"] ?>">
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

            <button data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" class="accordion-button collapsed">Accordion Item</button>

            <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
