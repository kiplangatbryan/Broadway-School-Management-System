<?php include(APPPATH.'Views/templates/header-common.php'); ?>
<?php include(APPPATH.'Views/templates/side-nav.php'); ?>

                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Fee Structure</h3>
                </div>
                <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 80vh;max-height: 100vh;">
                   <?php if(empty($config['fee_pdf'])): ?>
                         <form action="<?=base_url('/create/fee_structure') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-control">
                            <input type="file" class="form-control" name="fee_pdf" id="">
                            <button type="submit" class="btn btn-primary"> 
                                upload
                            </button>
                        </div>
                    </form>
                    <p class="text-center" style="padding: 3em 0;"><a class="btn btn-primary btn-icon-split" role="button"></a>No fee structure documents found, upload now!.</p><a class="btn btn-primary btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-file-upload"></i></span><span class="text-white text">upload fee structure</span></a>
                    <?php else: ?>
                    <embed style="width: 90%;height: 100%" src="<?=base_url('/uploads/FeeStructure/'.$config['fee_pdf'])?>" type="application/pdf">
                    <?php endif ?>
                </div>
            </div>
<?php include(APPPATH.'Views/templates/footer.php'); ?>
