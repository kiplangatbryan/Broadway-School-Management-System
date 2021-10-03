


 <!-- Modal -->
    <div class="modal fade"  id="successModal"  tabindex="-1" role="dialog"
         aria-labelledby="demoModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" id="successClose" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="px-3 pt-3 text-center">
                        <div class="event-type success">
                            <div class="event-indicator ">
                                <svg style="width:60px;height:60px" viewBox="0 0 24 24">
                                    <path fill="#ffffff" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="pt-3">Hurray!</h3>
                        <p class="text-muted">
                            <?=session()->getFlashData('success') ?>
                        </p>

                    </div>
                </div>
                <div class="modal-footer text-md-right">
                    <a href="#" class="btn btn-cstm-secondary" data-dismiss="modal" aria-label="Close" >Okay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ends -->

