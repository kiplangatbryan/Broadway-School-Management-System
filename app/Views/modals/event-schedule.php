<div class="modal fade " id="jam"  tabindex="-1" role="dialog"
        aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button"  id="close" class="close light" data-dismiss="modal"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <form class="px-sm-4 py-sm-4" id="addSchedule">
                    <h3>Create New Schedule</h3>
                    
                    <div class="row">
    
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="class">
                                    <strong>Select class</strong><br>
                                    <small>The class target</small>
                                </label>
                                 <select name='class_id' id="class_opt" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                    <option selected>Select</option>
                                    <?php foreach($all_classes as $row): ?> 
                                        <option value="<?=$row['class_id'] ?>"><?=$row['name'] ?></option>
                                    <?php endforeach ?>
                                
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="due_date">
                                        <strong>Start Time</strong><br>
                                        <small>Select the starting date</small>
                                    </label>
                                    <input class="form-control" type="time" placeholder="" id='start_data' name="start">
                                </div>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="due_date">
                                        <strong>Start Date</strong><i> [optional]</i><br>
                                        <small>If you leave this field blank the default duration is set to <button class="btn btn-info btn-sm">1 Hour</button></small>
                                    </label>
                                    <input class="form-control" type="time" placeholder="" id='end_data' name="start">
                                </div>
                            
                            </div>                    
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" data-dismiss="modal" aria-label="Close">Add Schedule</button>
                        </div>
                    </div>                       
                </form>
            </div>


        </div>
    </div>
</div>
