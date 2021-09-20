<div class="modal fade " id="jam"  tabindex="-1" role="dialog"
        aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button"  id="close" class="close light" data-dismiss="modal"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <form class="px-sm-4 py-sm-4" id="createEvent">
                    <h3>Create New Event</h3>
                    
                    <div class="row">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="body_data">
                                        <strong>To do</strong><br>
                                        <small>A small summary of events</small>
                                    </label>
                                    <textarea class="form-control" id="body_data" rows="4" name="body"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="due_date">
                                        <strong>Start Date</strong><br>
                                        <small>Select the starting date</small>
                                    </label>
                                    <input class="form-control" type="date" placeholder="" id='start_data' name="start">
                                </div>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="due_date">
                                        <strong>Start Date</strong><i> [optional]</i><br>
                                        <small>P.S If the events for more than a day</small>
                                    </label>
                                    <input class="form-control" type="date" placeholder="" id='end_data' name="start">
                                </div>
                            
                            </div>                    
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block w-100" data-dismiss="modal" aria-label="Close">Publish Event</button>
                        </div>
                    </div>                       
                </form>
            </div>


        </div>
    </div>
</div>
