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
        <h2 class="signin-title-primary">Welcome back!</h2>
        <h3 class="signin-title-secondary">Sign in to continue.</h3>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <button class="btn btn-primary btn-block btn-signin">Sign In</button>
        <p class="mg-b-0">Don't have an account? <a href="page-signup.html">Sign Up</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="<?=base_url()?>/assets/lib/jquery/js/jquery.js"></script>
    <script src="<?=base_url()?>/assets/lib/popper.js/js/popper.js"></script>
    <script src="<?=base_url()?>/assets/lib/bootstrap/js/bootstrap.js"></script>

    <script src="<?=base_url()?>/assets/js/slim.js"></script>

  </body>
</html>
