<?php include(APPPATH.'Views/templates/side-nav.php'); ?>
<?php include(APPPATH.'Views/templates/lunar-css.php'); ?>

    <div class="container-fluid">
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
                <form method='post' action='/create/student' enctype="multipart/form-data">
                     <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Create Notice</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="title"><strong>Title</strong></label><input class="form-control" type="text" id="title" placeholder="" name="title"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="details"><strong>Subject</strong></label><input class="form-control" type="text" id="details" placeholder="" name="details"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="details"><strong>Posted By</strong></label><input class="form-control" type="text" id="postedBy" placeholder="" name="postedBy"></div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="date"><strong>Date</strong></label><input class="form-control" type="date" id="date" placeholder="" name="date"></div>
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
                        <p class="text-primary m-0 fw-bold">Recents</p>
                    </div>
                    <div class="card-body">
                        <div class="col mb-2">
                            <div class="text-grey">
                                16, May 2021
                            </div>
                            <div class="row justify-content-between align-items-center text-md">
                                <div class="col-4 text-primary">Jeniffer Lopez</div> 
                                <div class="col-8 text-grey">5 min ago</div>
                            </div>
                            <div class="mt-2">
                                Great student management portal, i could actually pay for it 
                            </div>
                        </div>
                         <div class="col mb-2">
                            <div class="text-grey">
                                16, May 2021
                            </div>
                            <div class="row justify-content-between align-items-center text-md">
                                <div class="col-4 text-primary">Jeniffer Lopez</div> 
                                <div class="col-8 text-grey">5 min ago</div>
                            </div>
                            <div class="mt-2">
                                Great student management portal, i could actually pay for it 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/lunar-scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
