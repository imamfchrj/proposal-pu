<?php
 if(!isset($title)) {
   $title = "Pekerjaan Umum";
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <!-- Twitter -->
    <meta name="twitter:site" content="@KemenPU">
    <meta name="twitter:creator" content="@KemenPU">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Sigap membangun bangsa demi negeri.">
    <meta name="twitter:image" content="https://www.pu.go.id/templates/frontend/img/logo.png">

    <!-- Facebook -->
    <meta property="og:url" content="https://www.pu.go.id">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Sigap membangun bangsa demi negeri.">

    <meta property="og:image" content="https://www.pu.go.id/templates/frontend/img/logo.png">
    <meta property="og:image:secure_url" content="https://www.pu.go.id/templates/frontend/img/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    
    <link rel="icon" href="https://www.pu.go.id/assets/images/content/Logo_PU_(RGB).jpg">

    <meta name="description" content="Sigap membangun bangsa demi negeri.">
    <meta name="author" content="redcloud-project">

    <title><?=$title?></title>

    <!-- Vendor css -->
    <link href="<?=base_url()?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/slim.css">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html"><?=APP_NAME?><span>.</span></a></h2>
        <h2 class="signin-title-primary">Selamat datang!</h2>
        <h3 class="signin-title-secondary">Lakukan login untuk melanjutkan.</h3>

        <div class="form-group">
          <input type="text" class="form-control" id="email" placeholder="Enter your email">
          <span class="text-danger" id="email-text"></span>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
          <span class="text-danger" id="password-text"></span>
        </div><!-- form-group -->

        <div class="form-group mg-b-50 text-xs-center">
          <div class="g-cap">
              <div id="g-recaptcha"></div>
          </div>
          <span class="text-danger" id="setuju-text"></span>
        </div>
        <button class="btn btn-primary btn-block btn-signin submit">Sign In</button>
        <!-- <p class="mg-b-0">Don't have an account? <a href="page-signup.html">Sign Up</a></p> -->
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    
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
    <script src="<?=base_url()?>/assets/lib/jquery/js/jquery.js"></script>
    <script src="<?=base_url()?>/assets/lib/popper.js/js/popper.js"></script>
    <script src="<?=base_url()?>/assets/lib/bootstrap/js/bootstrap.js"></script>

    <script src="<?=base_url()?>/assets/js/slim.js"></script>


	<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('g-recaptcha', {
          'sitekey' : '<?=config_item('recatpcha_site_key');?>'
        });
      };
    </script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

<script>

function alert_success($title, $description, $link=""){
        $('.title_success').html($title);
        $('.description_success').html($description);
        $('.link_success').attr("href",$link);
        if(!$link) {
          $('.link_success').html("");
        }
        
        $('#alert_success').modal('show');
      }

      function alert_failed($title, $description, $link=""){
        $('.title_failed').html($title);
        $('.description_failed').html($description);
        // $('.link_failed').html($link);
        $('.link_failed').attr("href",$link);
        if(!$link) {
          $('.link_success').html("");
        }
        
        $('#alert_failed').modal('show');
      }


      function alert_danger($title, $description, $link=""){
        $('.title_danger').html($title);
        $('.description_danger').html($description);
        $('.link_danger').attr("href",$link);
        
        $('#alert_danger').modal('show');
      }
</script>

<script>
$(function(){
    $(".submit").click(function(){
        if($("#email").val().length < 5){
            $("#email-text").html("Format email salah");
            return;
        }
        // if(!validateEmail($("#email").val())){
        //     $("#email-text").html("Format email salah");
        //     return;
        // }
            $("#email-text").html("");
        if($("#password").val().length < 8){
            $("#password-text").html("Panjang password kurang dari 8 karakter");
            return;
        }
        $("#password-text").html("");
        var response = grecaptcha.getResponse();
        if(response.length == 0){
            $("#setuju-text").html("Please accept gcaptcha");
        }
        $("#setuju-text").html("");
        submit(response);
    });
   
});
</script>
<script>
tmp=true;
var submit = function (response){  
    $.ajax({
        url: '<?=base_url()?>login/ajax_login',
        type: 'post',
        dataType: 'json',
        data: {
            "email":$("#email").val(),
            "password":$("#password").val(),
            "g-recaptcha-response":response
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            alert_danger(data.error_message);
            grecaptcha.reset();
            return; 
        }
        grecaptcha.reset();
        window.location = "<?php echo base_url(DEFAULT_PAGE_USER); ?>";
    })
    .fail(function() {
        if(tmp){
            alert_danger( "Server tidak merespon. Mohon cek koneksi internet anda. (Lakukan refresh jika dibutuhkan)\n" );
            grecaptcha.reset();
            tmp = false;
        }
    })
    .always(function() {
      grecaptcha.reset();
    }) ;
}
</script>
  </body>
</html>
