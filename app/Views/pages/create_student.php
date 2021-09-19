<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

    <div class="container-fluid">
        <h4 class="text-dark mb-4">Create Student Profile</h4>
        <?php

                if (isset($_GET['result']) && $_GET['result'] === 'success' && isset($_GET['_id'])){
                    echo '<div class="alert alert-success d-sm-flex justify-content-between align-items-center mb-4">';
                    echo  '<div class="">Student profile created successfully!</div><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href='.base_url().'/admin/student/profile/'.$_GET["_id"].'><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;View profile</a>';
                    echo '</div>';
                }
                if (isset($_GET['result']) && $_GET['result'] === 'failed' && isset($_GET['_id'])){
                    echo '<div class="alert alert-success d-sm-flex justify-content-between align-items-center mb-4">';
                    echo  '<div class="">Student already added to system you can check profile  </div><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href='.base_url().'/admin/student/profile/'.$_GET["_id"].'><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;View profile</a>';
                    echo '</div>';
                }
        
        ?>
        <form method='post' action='/create/student' enctype="multipart/form-data">
            <?= csrf_field() ?>
                <?php if ($errors !== '') {
                    echo "<div class='alert alert-danger'>";
                    foreach($errors as $key => $error){
                        print_r($error);
                    }
                    echo "</div>";
                }
                    
            ?>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Basic Information</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="full_name"><strong>Full Name</strong></label><input class="form-control" type="text" id="full_name" placeholder="" name="full_name"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="regNo"><strong>Registration No</strong></label><input class="form-control" type="text" id="regNo" placeholder="" name="student_id"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="class_opt"><strong>class</strong></label>
                                        <select name='class_id' id="class_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>default</option>
                                            <option value="1">Form 1</option>
                                            <option value="2">Form 2</option>
                                            <option value="3">Form 3</option>
                                            <option value="4">Form 4</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="sex"><strong>Select gender</strong></label>
                                        <select name='sex' class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>default</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="email"><strong>Blood Group</strong></label>
                                    
                                        <select name='blood_group' class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>default</option>
                                            <option value="B">A</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3"><label class="form-label" for="birthday"><strong>Select Birthday</strong></label><input class="form-control" type="date" id="birthday" placeholder="" name="birthday"></div>
                                </div> 
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="religion"><strong>Religion</strong></label>
                                        <select name='religion' class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>default</oiption>
                                            <option value="christan">christan</option>
                                            <option value="muslim">Muslim</option>
                                            <option value="budhist">Budhist</option>
                                        </select>
                                    </div>
                                </div>                                       
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-label" for="avatar"><strong>Upload Student Photo</strong></label>
                                    <input class="form-control" type="file"  id="avatar" name="avatar">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Parent Information</p>
                    </div>
                    <div class="card-body">
                    
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Fathers' Name</strong></label><input class="form-control" type="text" id="father_name" placeholder="" name="fathers_name"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Mothers' Name</strong></label><input class="form-control" type="text" id="mother_name" placeholder="" name="mothers_name"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="email"><strong>Parent Email</strong></label><input class="form-control" type="email" id="email" placeholder="" name="email"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="parent_phone"><strong>Parent Phone</strong></label><input class="form-control" type="tel" id="parent_phone" placeholder="" name="parent_phone"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address"></div>
                                </div>
                            </div>
                        
                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Create&nbsp;Profile</button></div>
                    </div>
                </div>
                </div>
                     
            </div>
        </form>
    </div>
</div>

<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
