<?php include(APPPATH.'Views/templates/side-nav.php'); ?>


<?php ?>
<style>
 .custom-bg{
     background: linear-gradient(-45deg, rgba(0,0,0,.1), transparent), url("<?=base_url().'/assets/svgs/app.svg' ?>");
     background-size: cover;
     background-position: left top;
     background-attachment: fixed; 
     min-height: 100vh;
 }

 input[type='radio']:hover{
     cursor: pointer;
 }


</style>

<div class="container-fluid">
    <div class="mb-4">
        <h4 class="text-dark mb-0">System Customization</h4>
      
    </div>

    <!-- success shows up here -->
    <?php if (!empty(session()->getFlashData('success'))): ?>
        <div class="alert alert-success">
            <?=session()->getFlashData('success') ?>
        </div>
    <?php endif ?>

    

    <div class="row mb-4 custom-bg py-4">
        <div class="col-lg-4">  

        </div>
        <div class="col-lg-8">
            <form class="col" action="<?=base_url('/create/update_credentials') ?>" method='post'>
                <div class="card  mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">System Infomation</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row mb-1">
                            <div class="col">
                                <label for="system_name" class="form-label">
                                    <strong>
                                        System Name
                                    </strong>
                                    <br>
                                    <small>What's can we call this </small>
                                </label>
                                <input type="text" value='<?=$config['system_name'] ?>' name="system_name" id="system_name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="system_email" class="form-label">
                                    <strong>
                                        School Email
                                    </strong>
                                    <br>
                                    <small>What's the official school email </small>
                                </label>
                                <input type="text" value='<?=$config['system_email'] ?>' name="system_email" id="system_email" class="form-control">
                            </div>
                             <div class="col">
                                <label for="system_phone" class="form-label">
                                    <strong>
                                        School Phone
                                    </strong>
                                    <br>
                                    <small>What's the official phone number </small>
                                </label>
                                <input type="tel" value='<?=$config['phone'] ?>' name="phone" id="system_phone" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">Customization</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col">
                                <label for="system_name" class="form-label">
                                    <strong>
                                       Color Pallete
                                    </strong>
                                    <br>
                                    <small>
                                        Select an appropriate skin color for your liking
                                    </small>
                                </label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-1">    
                                            <input type="radio" value="primary" <?php echo $config['skin_color'] == 'primary' ? 'checked': '' ?>  name="skin_color" id="primary">
                                            <label for="primary">
                                                Primary
                                            </label>    
                                        </div>          
                                        <div class="card border-start-primary bg-primary py-4">
                                        </div>
                                    </div>

                                      <div class="col-md-3">
                                        <div class="mb-1">    
                                            <input type="radio" value="danger" <?php echo $config['skin_color'] == 'danger' ? 'checked': '' ?> name="skin_color" id="danger">
                                            <label for="danger">
                                                Danger
                                            </label>    
                                        </div>          
                                        <div class="card border-start-primary bg-danger py-4">
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="mb-1">    
                                            <input type="radio" value="info" <?php echo $config['skin_color'] == 'info' ? 'checked': '' ?> name="skin_color" id="info">
                                            <label for="info">
                                                info
                                            </label>    
                                        </div>          
                                        <div class="card border-start-primary bg-info py-4">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-1">    
                                            <input type="radio" value="success" <?php echo $config['skin_color'] == 'success' ? 'checked': '' ?> name="skin_color" id="success">
                                            <label for="success">
                                                Happy
                                            </label>    
                                        </div>          
                                        <div class="card border-start-primary bg-success py-4">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-1">    
                                            <input type="radio" value="dark" <?php echo $config['skin_color'] == 'dark' ? 'checked': '' ?> name="skin_color" id="dark">
                                            <label for="dark">
                                                Nightly
                                            </label>    
                                        </div>          
                                        <div class="card border-start-primary bg-dark py-4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">Sms Service Configuration</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="system_name" class="form-label">
                                    <strong>
                                       Active sms service
                                    </strong>
                                    <br>
                                    <small>
                                        Select an appropriate skin color for your liking
                                    </small>
                                </label>
                                <select name="active_sms_service" id="active_sms" class="form-control">
                                    <option default> <?=$config['active_sms_service'] ?></option>
                                    <option value="twilio-sms">Twilio SMS</option>
                                    <option value="clicksend-sms">ClickSend SMS</option>
                                </select>
                         
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">
                        Save Credentials
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
