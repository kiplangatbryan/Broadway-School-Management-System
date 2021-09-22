
<?php include(APPPATH.'Views/templates/common-hlinks.php'); ?>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(<?php echo base_url() ?>/assets/img/dogs/image3.jpeg);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <?php 
                                        if ($login_type == 'student'){
                                            echo "<div class='my-3 alert alert-info  small'>To Access the system for the first time, use your <u>Parent Email or admission No as Username</u> and <u>admission Number as your password</u> for your account </div>";
                                        }
                                        if($login_type == 'teacher'){
                                            echo "<div class='my-3 alert alert-info  small'>To Access the system for the first time, use your <u> Email </u> and <u> `teacher` as your password</u> for your account </div>";
                                        }

                                        if (!empty(session()->getFlashData('fail'))){
                                            echo "<div class='my-3 alert alert-danger  small'>Trying to access  restricted resource</div>";
                                        }
                                        
                                    ?>
                                    <div class="text-left">
                                        <div class="text-dark mb-4" style="font-size: 23px">Welcome Back ! ◘</div>
                                        <?php if ($errors) echo "<div class='my-3 text-danger small'>Please Enter Correct Email or Password</div>" ?>
                                    </div>
                                    <form class="user" method='post', action='/login/<?php echo $login_type; ?>'>
                                      <?= csrf_field() ?>
                                        <div class="mb-3 form-group">
                                            <label for="emailId" class="mb-1 text-dark">Email ID</label>
                                            <input class="form-control" type="email" id="emailId" aria-describedby="emailHelp" placeholder="Email" name="email">
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label for="passwd" class="mb-1 text-dark">Pasword</label>
                                            <input class="form-control" type="password" id="passwd" placeholder="password" name="password">
                                        </div>
                                        <div class="mb-3 form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary d-block  w-100" type="submit">Login</button>
                                        </div>

                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>