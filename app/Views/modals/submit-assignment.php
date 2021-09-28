

<div class="modal fade " id="submit-assign"  tabindex="-1" role="dialog"
        aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button"  id="close" class="close light" data-dismiss="modal"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <form class="px-sm-4 py-sm-4" id="assign-submit" enctype="mutlipart/form-data">
                    <h3 class="mb-3">Push Assignment</h3>
                    
                    <div class="row">
    
                        <div class="row">
                           
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="due_date">
                                        <strong>Attach Assignment File</strong><br>
                                        <small>supported files formats include *.docx, *.pdf only</small>
                                    </label>
                                    <input class="form-control" id="file-assign" type="file" file="*.pdf, .docx" name="file">
                                </div>
                            </div>                    
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" data-dismiss="modal" aria-label="Close">Submit</button>
                        </div>
                    </div>                       
                </form>
            </div>


        </div>
    </div>
</div>
