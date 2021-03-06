<?php helper('emojis') ?>

<!-- load form helper   -->
<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<style>
    body{
        background: #eee;
        position: relative;
    }
    .v-shape{
        top: 10%;
        height: 60vh;
        left: 10%;
        position: absolute;
        object-fit: cover;
        animation: wrongTurn 5s infinite cubic-bezier(0.175, 0.885, 0.32, 1.275);
        
    }
    @keyframes wrongTurn {
        0%{
            transform: rotate(0deg);
        }
        50%{
            transform: rotate(10deg);
        }
        100%{
            transform: rotate(0deg);
        }
    }
</style>
<body>
    <img class="v-shape" src="<?=base_url('assets/svgs/travel.svg')?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card shadow-sm o-hidden border-0 ml-5 my-5" style="max-width: 350px; margin-left: 300px;">
                <div class="card-body p-0" >
                    <div class="row">
                         <div class="col">
                            <div class="px-4 my-5">
                                <?php 
                                  

                                    if (!empty(session()->getFlashData('fail'))){
                                        echo "<div class='my-3 alert alert-danger alert-sm  small'>".session()->getFlashData('fail')."</div>";
                                    }
                                    
                                ?>
                                <div class="text-left">
                                    <div class="text-dark mb-1" style="font-size: 23px">Ahoy Back</div>
                                    <small class="text-dark mb-4">A place where secrets are revealed<?=render_emoji('happy') ?> 🤣🤣🤣🐱‍💻</small>
                                    <div class="mb-3"></div>

                                    <?php if ($errors) echo "<div class='my-3 text-danger small'>Please Enter Correct Email or Password</div>" ?>
                                </div>
                                <form class="user" method='post' action='/auth/login_validate'>
                                    <?= csrf_field() ?>
                                    <div class="mb-3 form-group">
                                        <label for="emailId" class="mb-1 text-dark">Email ID</label>
                                        <input class="form-control" type="email" id="emailId" aria-describedby="emailHelp"  placeholder="Email" name="email">
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>