<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

    <div class="container-fluid">

        <?php if (!empty(session()->getFlashData('success'))): ?>
            <div class="alert alert-success py-4">
                <?=session()->getFlashData('success') ?>
            </div>
        <?php endif ?>
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
                <form method='post' action='/create/subject'>
                     <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Create New Subject</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="name"><strong>Name of Subject</strong><br><small>Title of subject</small></label><input class="form-control" type="text" id="subject_name" placeholder="" name="name"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="subject_class"><strong>Subject Class</strong><br><small>subject is taught to which class</small></label><input class="form-control" type="text" id="subject_class" placeholder="" name="class_id"></div>
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
                       
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
