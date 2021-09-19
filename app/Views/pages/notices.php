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
                <form method='post' action='/create/notice'>
                     <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Create Notice</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 form-group">
                                        <label class="form-label" for="title">
                                            <strong>Title</strong>
                                        </label>
                                        <input class="form-control" type="text" id="title" placeholder="" name="title">
                                    </div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 form-group">
                                        <label class="form-label" for="details">
                                            <strong>Body</strong>
                                        </label>
                                        <input class="form-control" type="text" id="details" placeholder="" name="body">
                                    </div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 form-group">
                                        <label class="form-label" for="details">
                                            <strong>Posted By</strong>
                                        </label>
                                        <input class="form-control" type="text" id="postedBy" placeholder="" name="posted_by">
                                    </div>
                                </div>                                        
                            </div>
                          
                        </div>
                    </div>
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Create&nbsp;Notice</button></div>

                </form>
            </div>
            <div class="col-md-8 mb-4">

                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Recents</p>
                    </div>
                    <div class="card-body">

                        <?php foreach($all_notices as $row): ?>
                        <div class="col mb-4">
                            <h4 class="mb-1 text-primary fw-bold"><?php echo $row['title'] ?></h4>
                            <div class="text-grey small">
                               Posted on <?php echo $row['created_at'] ?>
                            </div>
                            <div class="row justify-content-between align-items-center text-md">
                                <div class="col-4 small"> 
                                    <span>created by</span> 
                                    <span class="text-primary"><?php echo $row['posted_by'] ?></span>
                                </div> 
                            </div>
                            <div class="mt-2">
                                <?php echo $row['body'] ?>
                            </div>
                        </div>
                        <hr>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
            
<?php include(APPPATH.'Views/templates/lunar-scripts.php'); ?>
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
