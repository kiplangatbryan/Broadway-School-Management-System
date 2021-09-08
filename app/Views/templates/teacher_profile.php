    <div class="row my-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?php echo base_url() ?>/assets/img/dogs/image2.jpeg" width="160" height="160">
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-8">
            <form method='post' action='/create/teacher'>
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Basic Information</p>
                                <small>Some personal Information about the teacher</small>
                            </div>
                            <div class="card-body">
                            
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" value="" id="first_name" placeholder="John" name="first_name"></div>
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
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="phone_number"><strong>Phone Number</strong></label><input class="form-control" type="text" id="phone_number" placeholder="+254*" name="phone_number"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email"></div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Subject Combination</p>
                                <small>Collection of subjects taught by teacher</small>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="parent_phone"><strong>Parent Phone</strong></label><input class="form-control" type="text" id="parent_phone" placeholder="phone number" name="parent_phone"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Address Information</p>
                                <small>Where do you live</small>
                            </div>
                            <div class="card-body">
                            
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" placeholder="Jane Doe" name="mothers_name"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="county"><strong>County</strong></label><input class="form-control" type="text" id="county" placeholder="John Doe" name="county"></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address"></div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Create&nbsp;Profile</button></div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        </div>
    </div>