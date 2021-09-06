<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Create Student Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?php echo base_url() ?>/assets/img/dogs/image2.jpeg" width="160" height="160">
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-8">
                            <form method='post' action='/create/student'>
                              <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-3">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Basic Information</p>
                                            </div>
                                            <div class="card-body">
                                            
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="username"><strong>Reg No</strong></label><input class="form-control" type="text" id="regNo" placeholder="12345" name="student_id"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="class_opt"><strong>class | Form</strong></label>
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
                                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name"></div>
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
                                                            <div class="mb-3"><label class="form-label" for="email"><strong>Blood Group</strong></label>
                                                            
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
                                            
                                            </div>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 fw-bold">Parent Information</p>
                                            </div>
                                            <div class="card-body">
                                            
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>Fathers' Name</strong></label><input class="form-control" type="text" id="father_name" placeholder="John Doe" name="fathers_name"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Mothers' Name</strong></label><input class="form-control" type="text" id="mother_name" placeholder="Jane Doe" name="mothers_name"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Parent Email</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="parent_phone"><strong>Parent Phone</strong></label><input class="form-control" type="text" id="parent_phone" placeholder="phone number" name="parent_phone"></div>
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
                </div>
            </div>

<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
