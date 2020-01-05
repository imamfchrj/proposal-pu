
    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2020 &copy; All Rights Reserved. <?=APP_NAME?></p>
        <p>Designed by: <a href="<?=VENDOR_URL?>"><?=VENDOR?></a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    
    <!-- MODAL ALERT MESSAGE -->
    <div id="alert_success" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20 title_success">Congratulations!</h4>
            <p class="mg-b-20 mg-x-20 description_success"></p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
            <a href="#" class="link_success">Lanjutkan</a>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div id="alert_failed" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-danger mg-b-20 title_failed">Error: Cannot process your request!</h4>
            <p class="mg-b-20 mg-x-20 description_failed"></p>
            <button type="button" class="btn btn-danger pd-x-25 link_failed" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    <div id="alert_danger" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon icon ion-outlet tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-warning mg-b-20 title_danger">Warning</h4>
            <p class="mg-b-20 mg-x-20 description_danger"></p>
            <a href="#" class="btn btn-warning pd-x-25 link_danger">Continue</a>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->