<div class="row my-3 ">
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
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Registration No</strong></label><input class="form-control" type="text" id="regNo" placeholder="adm no" value="<?php echo $profile['student_id'] ?>" name="student_id"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="class_opt"><strong>class | Form</strong></label>
                                            <select name='class_id' value="<?php echo $profile['class_id'] ?>" id="class_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
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
                                        <div class="mb-3"><label class="form-label" for="full_name"><strong>Full Name</strong></label><input class="form-control" type="text" id="full_name" placeholder="John Doe" value="<?php echo $profile['name'] ?>" name="full_name"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="sex"><strong>Select gender</strong></label>
                                            <select name='sex' value="<?php echo $profile['sex'] ?>" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                <option selected>default</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="blood_group"><strong>Blood Group</strong></label>
                                        
                                            <select name='blood_group' value="<?php echo $profile['blood_group'] ?>" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
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
                                        <div class="mb-3"><label class="form-label" for="father_name"><strong>Fathers' Name(s)</strong></label><input class="form-control" value="<?php echo $profile['blood_group'] ?>" type="text" id="father_name" value="<?php echo $profile['father_name'] ?>" placeholder="John Doe" name="fathers_name"></div>
                                    </div> 
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="mother_name"><strong>Mothers' Name(s)</strong></label><input class="form-control" type="text" id="mother_name" value="<?php echo $profile['mother_name'] ?>" placeholder="Jane Doe" name="mothers_name"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Parent Email</strong></label><input class="form-control" type="email" id="email" value="<?php echo $profile['parent_email'] ?>" placeholder="user@example.com" name="email"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="parent_phone"><strong>Parent Phone</strong></label><input class="form-control" type="text" id="parent_phone"value="<?php echo $profile['parent_phone'] ?>" placeholder="phone number" name="parent_phone"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" value="<?php echo $profile['address'] ?>" placeholder="Sunset Blvd, 38" name="address"></div>
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