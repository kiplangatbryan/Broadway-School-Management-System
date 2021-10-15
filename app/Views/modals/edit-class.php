<div class="modal fade  " id="edit-Class"  tabindex="-1" role="dialog"
         aria-labelledby="demoModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered " role="document">
            <div class="modal-content">
                <button type="button"  id="close" class="close light" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <form class="px-sm-4 py-sm-4" method="post" action="<?=base_url('create/edit');?>">
                        <?= csrf_field() ?>
                        <h3>Add class schedule</h3>
                       
                        <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">
                                            <strong>Teacher Name</strong><br>
                                            <small>select the teacher invloved with the class</small>
                                        </label>
                                        <select name='teacher_id' id="teacher_id" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($teachers as $row): ?> 
                                                <option value="<?=$row['teacher_id'] ?>"><?=$row['name'] ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="class">
                                            <strong>Class</strong><br>
                                            <small>select the class</small>
                                        </label>
                                         <select name='class_id' id="class_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($classes as $row): ?> 
                                                <option value="<?=$row['class_id'] ?>"><?=$row['name'] ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="stream">
                                            <strong>Section | Stream</strong><br>
                                            <small>select stream</small>
                                        </label>
                                        <select name='stream' id="stream_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($streams as $row): ?> 
                                                <option value="<?=$row ?>"><?=$row ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="subject">
                                            <strong>Subject</strong><br>
                                            <small>select subject</small>
                                        </label>
                                        <select name='subject_id' id="subject_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($subjects as $row): ?> 
                                                <option value="<?=$row['subject_id'] ?>"><?=$row['name'] ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="class">
                                            <strong>Day</strong><br>
                                            <small>Day of the week</small>
                                        </label>
                                         <select name='day' id="day_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                            <option selected>Select</option>
                                            <?php foreach($days as $row): ?> 
                                                <option value="<?=$row ?>"><?=$row ?></option>
                                            <?php endforeach ?>
                                
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col">
                                   <div class="mb-3"><label class="form-label" for="start">
                                       <strong>Beginning</strong><br>
                                       <small>When is the class starting</small>
                                    </label>
                                    <input class="form-control" id="startTime"  value="20:54:00" type="time" placeholder="" name="start"></div>
                               </div>
                                <div class="col">
                                   <div class="mb-3"><label class="form-label" for="end">
                                       <strong>End</strong><br>
                                       <small>When is the class ending</small>

                                    </label>
                                    <input class="form-control" id="endTime" type="time" value="" placeholder="" name="end"></div>
                               </div>
                               
                           </div>
                        
                        </div>
                       

                        <button type="submit" class="btn btn-cstm-danger btn-md btn-cta btn-block" data-dismiss="modal" aria-label="Close">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>