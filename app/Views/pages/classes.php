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


            <a class="btn btn-warning btn-sm d-block"  role="button" id="lauchClass" href="#">
                <i class="fas fa-eye fa-sm text-white-50"></i>&nbsp; &nbsp;Add Class
            </a>
        </div>

        <!-- add class modal -->
        <?php include(APPPATH.'Views/modals/add-class.php'); ?>

            
        <div class="row">
            <div class="col mb-4">

                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">All Classes</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                           
                            <div class="table-responsive table-dark table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0 bri__fix" id="dataTable">
                                    <thead>
                                        <tr>  
                                            <th>Roll</th>    
                                            <th>Photo</th>             
                                            <th>Teacher Name(s)</th> 
                                            <th>Gender</th> 
                                            <th>Subject</th> 
                                            <th>class</th>    
                                            <th>Section</th>
                                            <th>Time</th>
                                            <th>E-mail</th>
                                            <th>Action(s)</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($schedules as $key => $row): ?>
                                            <tr>
                                                <td><?php echo "#".$row['schedule_id'] ?></td>
                                                    <td>
                                                    <img class="rounded-circle me-2" width="30" height="30" src="<?php echo $row['t_photo'] === '' ? site_url('/assets/img/avatar2.jpeg'): site_url('/uploads/teacherAvatars/'.$row['t_photo']) ?>"> 
                                                </td>
                                                <td><?php echo $row['t_name'] ?></td>
                                                <td><?php echo $row['gender'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['class_id'] ?></td>
                                                <td><?php echo $row['stream'] ?></td>
                                                <td><?php echo $row['start'].' - ' ?><?=$row['end'] ?></td>
                                                <td><?php echo $row['t_email'] ?></td>

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

<script src="<?=base_url('assets/js/class-lib.js') ?>"></script>
<?php include(APPPATH.'Views/templates/scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
