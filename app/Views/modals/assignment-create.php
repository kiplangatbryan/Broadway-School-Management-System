<div class="modal fade  " id="demoModal"  tabindex="-1" role="dialog"
         aria-labelledby="demoModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered " role="document">
            <div class="modal-content">
                <button type="button"  id="close" class="close light" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <form class="px-sm-4 py-sm-4" method="post" action="<?=base_url('teacher/assignments/create');?>" enctype="multipart/form-data">
                        <h3>Create an assignment</h3>
                       
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">
                                            <strong>Title</strong><br>
                                            <small>assignment namespace</small>
                                        </label>
                                        <input class="form-control" type="text" placeholder="" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">
                                            <strong>Subject</strong><br>
                                            <small>subject for the assigment</small>
                                        </label>
                                        <select name='subject_id' id="subject_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($all_subjects as $row): ?> 
                                                <option value="<?=$row['subject_id'] ?>"><?=$row['name'] ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="class">
                                            <strong>Class</strong><br>
                                            <small>select the target group</small>
                                        </label>
                                         <select name='class_id' id="class_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($all_classes as $row): ?> 
                                                <option value="<?=$row['class_id'] ?>"><?=$row['name'] ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col">
                                   <div class="mb-3"><label class="form-label" for="due_date">
                                       <strong>Date due</strong><br>
                                       <small>The assignment deadline date*</small>
                                    </label>
                                    <input class="form-control" type="date" placeholder="" name="due_date"></div>
                               </div>
                               <div class="row">
                                   <label class="form-label" for="assign_file">
                                       <strong>Attach a File</strong><br>
                                       <small>The document containing the actual assignment</small>
                                   </label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file"  id="assignment_file" name="assign_file">
                                    </div>
                                </div>
                           </div>
                            <div class="col">
                                  <div class="my-3">
                                        <label class="form-label" for="description">
                                            <strong>Assignment Description</strong><br>
                                            <small>What would you wants the students do and don't do?</small>
                                        </label>
                                        <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                                    </div>
                            </div>
                        </div>
                       

                        <button type="submit" class="btn btn-cstm-danger btn-cta btn-block" data-dismiss="modal" aria-label="Close">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>